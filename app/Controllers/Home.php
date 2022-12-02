<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('pages/home');
    }

    public function devices()
    {
        return view('pages/devices');
    }

    public function deviceDetails()
    {
        return view('pages/devicesDetail');
    }
}
