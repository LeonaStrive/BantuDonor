<?php

namespace App\Controllers;

class DataPendonor extends BaseController
{
    public function index()
    {
        $data['title']  = "Bantu Donor - Data Pendonor";
        return view('admin/pendonor', $data);
    }
}
