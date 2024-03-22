<?php

namespace App\Controllers;

class Pendonor extends BaseController
{
    public function index()
    {
        $data['title']  = "Bantu Donor - Data Pendonor";
        return view('rs/pendonor', $data);
    }
}
