<?php

namespace App\Controllers;

class DashboardRs extends BaseController
{
    public function index()
    {
        $data['title']  = "Bantu Donor - Dashboard Rumah Sakit";
        return view('rs/dashboard', $data);
    }
}
