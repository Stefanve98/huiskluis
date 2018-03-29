<?php

namespace App\Http\Controllers;

use App\Models\House\Address;
use App\Models\House\House;
use App\Models\House\User;
use App\Models\User\OwnerTypes;
use Carbon\Carbon;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class HouseController extends BaseController
{

    /**
     * @return View
     */
    public function index(): View
    {
        $houses = House::whereHas('users', function ($query) {
            $query->where('user_id', Auth::user()->id);
        })->with([
            'address',
            'users'
        ])->get();

        return view('home', [
            'houses' => $houses
        ]);
    }

    /**
     * @param int $houseId
     * @return View
     */
    public function view(int $houseId): View
    {
        return view('house.view', [
            'house' => House::with('address')->findOrFail($houseId)
        ]);
    }

    /**
     * @return View
     */
    public function create(): View
    {
        return view('house.create');
    }

    /**
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        $address = $request->get('address');
        $now = Carbon::now()->format('Y-m-d');

        $addressCount = Address::where('zip_code', strtoupper($address['zip_code']))
            ->where('number', $address['number'])
            ->where('additional', $address['additional'] ? strtoupper($address['additional']) : null)
            ->whereHas('house', function ($query) use ($now) {
                $query->where(function ($query) use ($now) {
                    $query->where('owner_from', '<=', $now);
                })->orWhere(function ($query) use ($now) {
                    $query->where('owner_until', '>=', $now)
                        ->orWhereNull('owner_until');
                });
            })
            ->count();

        if ($addressCount > 0) {
            return back()->withInput()->withErrors('Dit huis is al geregistreerd onder een andere gebruiker.');
        }

        $address = Address::create($address);
        $house = House::create([
            'user_id' => $request->user()->id,
            'address_id' => $address->id,
            'owner_from' => $request->owner_from ? Carbon::parse($request->owner_from)->format('Y-m-d') : null,
            'owner_until' => $request->owner_until ? Carbon::parse($request->owner_until)->format('Y-m-d') : null
        ]);

        User::create([
            'user_id' => $request->user()->id,
            'house_owner_type_id' => OwnerTypes::owner,
            'house_id' => $house->id,
        ]);

        return redirect()->route('house.view', $house->id);
    }

    /**
     * @param int $houseId
     * @return View
     */
    public function edit(int $houseId): View
    {
        $house = House::where('id', $houseId)
            ->with('address')
            ->first();

        return view('house.edit', compact('house'));
    }

    /**
     * @param Request $request
     * @param int $houseId
     * @return RedirectResponse
     */
    public function update(Request $request, int $houseId): RedirectResponse
    {
        $house = House::findOrFail($houseId);
        $house->update($request->all());

        return redirect()->route('house.view', $house->id);
    }
}