<?php

namespace App\Controllers;

class Profil extends BaseController
{
    public function index()
    {
        $data['title']  = "Bantu Donor - Profil";
        return view('rs/profil', $data);
    }
}
