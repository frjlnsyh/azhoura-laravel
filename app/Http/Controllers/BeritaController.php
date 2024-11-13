<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class BeritaController extends Controller
{
    public function index() {
        $data = [];
        $data['berita'] = "berita";
        return view('berita',$data);
    }
}
