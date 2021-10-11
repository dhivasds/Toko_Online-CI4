<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('toko/online', ['data' => 'data ini di ambil dari home.php']);
    }
}
