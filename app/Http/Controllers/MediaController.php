<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class MediaController extends Controller
{
    public function index() {
        $data = [];
        $menu = [
            "menu1" =>  [
                "nama" => "YouTube",
                "link" => "https://www.youtube.com/channel/UCOry-kt116RmyuajMVXjtkg",
                "image" => "youtube.jpg"
            ],
            "menu2" =>  [
                "nama" => "Instagram",
                "link" => "https://www.instagram.com/azhoura_official",
                "image" => "instagram.jpg"
            ],
            "menu3" =>  [
                "nama" => "Tiktok",
                "link" => "https://www.tiktok.com/@azhoura_official",
                "image" => "tiktok.jpg"
            ]
        ];
        
        $data['menu'] = $menu;
        $data['title'] = "Media";
        return view('media',$data);
    }
}
