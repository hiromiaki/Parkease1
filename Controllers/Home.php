<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('Home/index');
    }

    public function map(): string
    {
        return view('Home/map');
    }
}
