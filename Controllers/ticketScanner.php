<?php

namespace App\Controllers;

class ticketScanner extends BaseController
{
    public function scanner(): string
    {
        return view('ticketScanner/scanner');
    }

    public function scannerStaff(): string
    {
        return view('ticketScanner/scannerStaff');
    }
}