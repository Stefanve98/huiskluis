<?php

namespace App\Http\Controllers;

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
     *
     */
    public function create()
    {
        dd('create');
    }

    /**
     *
     */
    public function edit()
    {
        dd('edit');
    }
}