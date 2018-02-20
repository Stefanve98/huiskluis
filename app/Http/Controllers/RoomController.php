<?php

namespace App\Http\Controllers;

use App\Models\House\House;
use App\Models\Rooms\Type;
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
    {
        return view('rooms.edit', [
            'roomTypes' => Type::all(),
            'house' => House::findOrFail($houseId)
        ]);
    }

    /**
     * @param Request $request
     * @param int $houseId
     * @return RedirectResponse
     */
    public function update(Request $request, int $houseId): RedirectResponse
    {
        dd($request->all());

        foreach ($request->get('roomType') as $roomType) {
            dd($roomType);
        }

        return redirect()->route('house.view', $houseId);
    }
}