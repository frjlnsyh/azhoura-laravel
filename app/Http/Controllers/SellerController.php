<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class SellerController extends Controller
{
    public function index() {
        $data = [];
        $ecommerce = [
            "commerce1" => [
                "image" => "shopee.png",
                "link" => "https://shopee.co.id/azhoura_official"
            ],
            "commerce2" => [
                "image" => "tokopedia.png",
                "link" => "https://tokopedia.link/R84BYun4pEb"
            ]
            ];
        $data['ecommerce'] = $ecommerce;    
        $data['title'] = "Seller";
        return view('seller',$data);
    }
}
