<?php

namespace App\Controllers;

class ProfilAdmin extends BaseController
{
    public function index()
    {
        $data['title']  = "Bantu Donor - Profil";
        return view('admin/profil', $data);
    }
}
