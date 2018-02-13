<?php

namespace App\Http\Controllers;

use App\Models\House\Address;
use App\Models\House\House;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class HouseController extends BaseController
{

    /**
     * @return View
     */
    public function index()
    {
        $houses = House::with('address')->get();

        return view('home', [
            'houses' => $houses
        ]);
    }

    /**
     * @param int $houseId
     * @return View
     */
    public function view(int $houseId)
    {
        return view('house.view', [
            'house' => House::with('address')->findOrFail($houseId)
        ]);
    }

    /**
     * @return View
     */
    public function create()
    {
        return view('house.create');
    }

    /**
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request)
    {
        $address = Address::create($request->get('address'));
        $house = House::create([
            'user_id' => $request->user()->id,
            'address_id' => $address->id
        ]);

        return redirect()->route('house.view', $house->id);
    }

    /**
     * @param int $houseId
     * @return View
     */
    public function edit(int $houseId)
    {
        return view('house.edit');
    }

    /**
     * @param Request $request
     * @param int $houseId
     * @return RedirectResponse
     */
    public function update(Request $request, int $houseId)
    {
        return redirect()->route('house.index');
    }
}