<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index()
    {
        $data['title']  = "Bantu Donor - Dashboard";
        return view('admin/dashboard', $data);
    }
}
