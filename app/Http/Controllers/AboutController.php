<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class AboutController extends Controller
{
    public function index() {
        $data = [];
        $data['title'] = "About Us";
        $menu = [
            "menu1" =>  [
                "nama" => "Instagram",
                "link" => "https://instagram.com/azhoura_official?",
                "image" => "instagram.jpg"
            ],
            "menu2" =>  [
                "nama" => "Facebook",
                "link" => "https://web.facebook.com/profile.php?id=61551871874491",
                "image" => "pacebook.jpg"
            ],
            "menu3" =>  [
                "nama" => "Tiktok",
                "link" => "https://www.tiktok.com/@azhoura_official",
                "image" => "tiktok.jpg"
            ],
            "menu4" =>  [
                "nama" => "Youtube",
                "link" => "https://www.youtube.com/channel/UCOry-kt116RmyuajMVXjtkg",
                "image" => "youtube.jpg"
            ]
        ];
        
        $data['menu'] = $menu;
        return view('aboutus',$data);
    }
    
}
