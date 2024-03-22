<?php

namespace App\Controllers;

class Stok extends BaseController
{
    public function index()
    {
        $data['title']  = "Bantu Donor - Data Stok Darah";
        return view('rs/stokdarah', $data);
    }
}
