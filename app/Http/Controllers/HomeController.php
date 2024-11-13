<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index() {
        $data = [];
        $head = [
            "head1" => [
                "image" => "bp1.png",
                "name" => "Free Gift",
                "desc" => "Setiap Pembelian Bundle",
                "carousel" => "active",
                "link" => "media"
            ],
            "head2" => [
                "image" => "bp2.png",
                "name" => "Lihat Facebook Kami",
                "desc" => "Keterangan Banner",
                "carousel" => "",
                "link" => "product"
            ],
            "head3" => [
                "image" => "bp3.png",
                "name" => "Lihat Instagram Kami",
                "desc" => "Keterangan Banner",
                "carousel" => "",
                "link" => "product/#bundle"
            ]
        ];
        $head2 = [
            "head1" => [
                "image" => "bl1.png",
                "name" => "Lihat Instagram Kami",
                "desc" => "Keterangan Banner",
                "carousel" => "active",
                "link" => "https://www.instagram.com/azhoura_official"
            ],
            "head2" => [
                "image" => "bl2.png",
                "name" => "Lihat Tiktok Kami",
                "desc" => "Keterangan Banner",
                "carousel" => "",
                "link" => "https://www.tiktok.com/@azhoura_official"
            ],
            "head3" => [
                "image" => "bl3.png",
                "name" => "Lihat Facebook Kami",
                "desc" => "Keterangan Banner",
                "carousel" => "",
                "link" => "https://web.facebook.com/profile.php?id=61551871874491"
            ]
        ];

        //Best Produk --------------------------
        $bundling = [
            "produk1" =>  [
                "nama-produk" => "Bundle 1",
                "size" => "Body serum 250ml + Body Lotion 250ml",
                "harga" => "Rp 210.450",
                "harga-promo" => "Rp 195.900",
                "link" => "product/bundle1",
                "image" => "250l250s.png",
                "carousel" => "active"
            ],
            "produk2" =>  [
                "nama-produk" => "Bundle 2",
                "size" => "Body serum 250ml + Body Lotion 100ml",
                "harga" => "Rp 171.150",
                "harga-promo" => "Rp 157.700",
                "link" => "product/bundle2",
                "image" => "250s100l.png",
                "carousel" => ""
            ],
            "produk3" =>  [
                "nama-produk" => "Bundle 3",
                "size" => "Body serum 100ml + Body Lotion 250ml",
                "harga" => "Rp 148.900",
                "harga-promo" => "Rp 136.400",
                "link" => "product/bundle3",
                "image" => "250l100s.png",
                "carousel" => ""
            ],
            "produk4" =>  [
                "nama-produk" => "Bundle 4",
                "size" => "Body serum 100ml + Body Lotion 100ml",
                "harga" => "Rp 109.600",
                "harga-promo" => "Rp 98.300",
                "link" => "product/bundle4",
                "image" => "100s100l.png",
                "carousel" => ""
            ]
        ];

        // All Produk ------------------------
        $prod = [
            "produk1" =>  [
                "image" => "250s.png",
                "nama-produk" => "Body Serum",
                "size" => "250ml",
                "harga" => "Rp 123.850",
                "link" => "product/body-serum250",
                "carousel" => "active"
            ],
            "produk2" =>  [
                "image" => "100s.png",
                "nama-produk" => "Body Serum",
                "size" => "100ml",
                "harga" => "Rp 62.300",
                "link" => "product/body-serum100",
                "carousel" => ""
            ],
            "produk3" =>  [
                "image" => "250l.png",
                "nama-produk" => "Body lotion",
                "size" => "250ml",
                "harga" => "Rp 86.600",
                "link" => "product/body-lotion250",
                "carousel" => ""
            ],
            "produk4" =>  [
                "image" => "100l.png",
                "nama-produk" => "Body lotion",
                "size" => "250ml",
                "harga" => "Rp Rp 42.300",
                "link" => "product/body-lotion250",
                "carousel" => ""
            ]
        ];

        $data['head'] = $head;
        $data['head2'] = $head2;
        $data['prod'] = $prod;
        $data['bundling'] = $bundling;
        return view('home',$data);
    }
    
    public function best() {
        $data =[];


    }
    public function aboutus() {
        $data = [];
        $data['title'] = "About Us";
        return view('aboutus',$data);
    }
    public function product() {
        $data = [];
        $data['title'] = "Product";
        return view('produk',$data);
    }
    public function seller() {
        $data = [];
        $data['title'] = "Seller";
        return view('seller',$data);
    }
    public function media() {
        $data = [];
        $data['title'] = "Media";
        return view('media',$data);
    }
    
}
