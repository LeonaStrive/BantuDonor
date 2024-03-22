<?php

namespace App\Controllers;

class DataStok extends BaseController
{
    public function index()
    {
        $data['title']  = "Bantu Donor - Data Stok Darah";
        return view('admin/stokdarah', $data);
    }
}
