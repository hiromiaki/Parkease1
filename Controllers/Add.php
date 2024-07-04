<?php

namespace App\Controllers;

class Add extends BaseController
{
    public function addStaff(): string
    {
        return view('LoginForm/addStaff');
    }

    public function editTicket(): string 
    {
        return view('LoginForm/editTicket');
    }

    public function editVendors(): string 
    {
        return view('LoginForm/editVendors');
    }

    public function addVendors(): string 
    {
        return view('LoginForm/addVendors');
    }
}
