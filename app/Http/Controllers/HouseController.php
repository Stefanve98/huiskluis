<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class HouseController extends BaseController
{

    /**
     * @return View
     */
    public function index()
    {
        return view('home');
    }

    /**
     * @return View
     */
    public function create()
    {
        return view('house.create');
    }

    /**
     * @return RedirectResponse
     */
    public function store()
    {
        return redirect()->route('house.index');
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
     * @return RedirectResponse
     */
    public function update(int $houseId)
    {
        return redirect()->route('house.index');
    }
}