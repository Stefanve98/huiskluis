<?php

namespace App\Http\Controllers;

use App\Models\House\House;
use App\Models\Rooms\Rooms;
use App\Models\Rooms\Type;
use App\Repositories\Rooms\RoomsRepository;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class RoomController extends BaseController
{

    /**
     * @param int $houseId
     * @return View
     */
    public function edit(int $houseId): View
    {;
        $rooms = Type::with([
            'rooms' => function ($query) use ($houseId) {
                $query->where('house_id', $houseId);
            }
        ])->get();

        return view('rooms.edit', [
            'roomTypes' => $rooms,
            'house' => House::findOrFail($houseId)
        ]);
    }

    /**
     * @param Request $request
     * @param int $houseId
     * @param RoomsRepository $roomsRepository
     * @return RedirectResponse
     */
    public function update(Request $request, int $houseId, RoomsRepository $roomsRepository): RedirectResponse
    {
        if ($request->has('rooms') && $request->get('rooms')) {
            $rooms = [];
            foreach ($request->get('rooms') as $key => $room) {
                $rooms[] = $key;
                $roomsRepository->update($key, $room);
            }

            Rooms::where('house_id', $houseId)->whereNotIn('id', $rooms)->delete();
        } else {
            Rooms::where('house_id', $houseId)->delete();
        }

        if ($request->has('new_rooms') && $request->get('new_rooms')) {
            foreach ($request->get('new_rooms') as $newRoom) {
                $roomsRepository->create($newRoom);
            }
        }

        return redirect()->route('house.view', $houseId);
    }
}