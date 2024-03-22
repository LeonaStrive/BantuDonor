<?php

namespace App\Controllers;

class DataRs extends BaseController
{
    public function index()
    {
        $data['title']  = "Bantu Donor - Data Rumah Sakit";
        return view('admin/rs', $data);
    }
}
