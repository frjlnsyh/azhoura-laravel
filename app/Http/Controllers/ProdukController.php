<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class ProdukController extends Controller
{
    public function index() {
        $data = [];
        $data['title'] = "Product";
        $produk = [
            "Produk1"=> [
                "image" => "250s.png",
                "nama_produk" => "Body Serum",
                "size" => "250ml",
                "keterangan_produk" => "Rp 123.850",
                "link_produk" => "product/body-serum250"
            ],
            "produk2"=> [
                "image" => "100s.png",
                "nama_produk" => "Body Serum ",
                "size" => "100ml",
                "keterangan_produk" => "Rp 62.300",
                "link_produk" => "product/body-serum100"
            ],
            "produk3"=> [
                "image" => "250l.png",
                "nama_produk" => "Body Lotion",
                "size" => "250ml",
                "keterangan_produk" => "Rp 86.600",
                "link_produk" => "product/body-lotion250"
            ],
            "produk4"=> [
                "image" => "100l.png",
                "nama_produk" => "Body Lotion",
                "size" => "100ml",
                "keterangan_produk" => "Rp 47.300",
                "link_produk" => "product/body-lotion100"
            ]
        ];
        $bundling = [
            "Bundling1"=> [
                "image" => "250l250s.png",
                "nama_produk" => "Bundle 1",
                "size" => "Body serum 250ml + Body Lotion 250ml",
                "harga" => "Rp 210.450",
                "harga-promo" => "Rp 195.900",
                "link_produk" => "product/bundle1"
            ],
            "Bundling2"=> [
                "image" => "250s100l.png",
                "nama_produk" => "Bundle 2",
                "size" => "Body serum 250ml + Body Lotion 100ml",
                "harga" => "Rp 171.150",
                "harga-promo" => "Rp 157.700",
                "link_produk" => "product/bundle2"
            ],
            "Bundling3"=> [
                "image" => "250l100s.png",
                "nama_produk" => "Bundle 3",
                "size" => "Body serum 100ml + Body Lotion 250ml",
                "harga" => "Rp 148.900",
                "harga-promo" => "Rp 136.400",
                "link_produk" => "product/bundle3"
            ],
            "Bundling4"=> [
                "image" => "100s100l.png",
                "nama_produk" => "Bundle 4",
                "size" => "Body serum 100ml + Body Lotion 100ml",
                "harga" => "Rp 109.600",
                "harga-promo" => "Rp 98.300",
                "link_produk" => "product/bundle4"
            ]
        ];
        $data['produk'] = $produk;
        $data['bundling'] = $bundling;
        return view('produk',$data);
    }
    public function detail($id) {
        $data = [];
        $produk =[];
        $data['title'] = "Detail Product";
        $produk = [
            "body-serum250"=> [
                "image" => "250s.png",
                "nama_produk" => "Body Serum",
                "size" => "250ml",
                "harga" => "",
                "harga-promo" => "Rp 123.850",
                "desc" => "Azhoura adalah produk perawatan kulit berupa lotion dan serum yang formulanya terdiri dari air sehingga cepat meresap ke kulit dan mengandung molekul aktif dengan konsentrasi lebih tinggi dan membantu merawat, melembabkan kulit serta melindungi kulit dari sinar UV Mengandung Vitamin E dan Glutathione yang bisa mencerahkan kulit dalam 7 hari pemakaian.
                Membuat kamu akan lebih cepat berdandan dan siap lakukan aktivitas.",
                "link_Shopee" => "https://shopee.co.id/Azhoura-Enchante-Body-Serum-250ml-i.1054590866.21685314309?xptdk=7a6e4793-aad6-4cba-b576-9457e2f127a3",
                "link_Tokopedia" => "https://www.tokopedia.com/azhoura/enchante-body-serum-250ml?extParam=src%3Dshop%26whid%3D16473737",
                "link_Lazada" => "https://www.lazada.co.id/",
                "link_Wa" => "https://wa.me/+6282211355302?text=Kaka admin.. aku mau checkout *Body Serum 250ml*, terimakasih..",
                "cara-pemakaian" => "Oleskan AZHOURA - Enchante Body Serum pada kulit bagian tangan, kaki dan badan untuk menjaga kulit dari efek sinar matahari",
                "prod1" => "Body Serum",
                "ingredient" => "Aqua, Niacinamide, Propylene Glycol, Dimethicone, Glycerin, Titanium Dioxide, Diethylhexyl Carbonate, Fragrance, Tranexamic Acid, Phenoxyethanol, Triethanolamine, Aloe Barbadensis Leaf Extract, Chamomilla Recutita Flower Extract, Ethanol, Polyacrylamide, Acrylates/C10-30 Alkyl Acrylate Crosspolymer, C13-14 Isoparaffin, Allantoin, Disodium EDTA, PEG-40 Hydrogenated Castor Oil, Laureth-7, Butylene Glycol, 1,2-Hexanediol, Arbutin, Lecithin, Sodium Ascorbyl Phosphate, Sodium DNA, Tocopheryl Acetate, Linolenic Acid, Glutathione, Methylparaben, Linoleic Acid, Ethylparaben, Tocopherol, Vitis Vinifera Seed Extract",
                "prod2" => "",
                "ingredient2" => "",
                "bpom" => "NA18230112439",
                "bpom2" => ""
            ],
            "body-serum100"=> [
                "image" => "100s.png",
                "nama_produk" => "Body Serum",
                "size" => "100ml",
                "harga" => "",
                "harga-promo" => "Rp 62.300",
                "desc" => "Azhoura adalah produk perawatan kulit berupa lotion dan serum yang formulanya terdiri dari air sehingga cepat meresap ke kulit dan mengandung molekul aktif dengan konsentrasi lebih tinggi dan membantu merawat, melembabkan kulit serta melindungi kulit dari sinar UV Mengandung Vitamin E dan Glutathione yang bisa mencerahkan kulit dalam 7 hari pemakaian.
                Membuat kamu akan lebih cepat berdandan dan siap lakukan aktivitas.",
                "link_Shopee" => "https://shopee.co.id/Azhoura-Enchante-Body-Serum-100mL-i.1090645878.21886016537",
                "link_Tokopedia" => "https://www.tokopedia.com/azhoura/azhoura-enchante-body-serum-100ml?extParam=src%3Dshop%26whid%3D16473737",
                "link_Lazada" => "https://www.lazada.co.id/",
                "link_Wa" => "https://wa.me/+6282211355302?text=Kaka admin.. aku mau checkout *Body Serum 100ml*, terimakasih..",
                "cara-pemakaian" => "Oleskan AZHOURA - Enchante Body Serum pada kulit bagian tangan, kaki dan badan untuk menjaga kulit dari efek sinar matahari",
                "prod1" => "Body Serum",
                "ingredient" => "Aqua, Niacinamide, Propylene Glycol, Dimethicone, Glycerin, Titanium Dioxide, Diethylhexyl Carbonate, Fragrance, Tranexamic Acid, Phenoxyethanol, Triethanolamine, Aloe Barbadensis Leaf Extract, Chamomilla Recutita Flower Extract, Ethanol, Polyacrylamide, Acrylates/C10-30 Alkyl Acrylate Crosspolymer, C13-14 Isoparaffin, Allantoin, Disodium EDTA, PEG-40 Hydrogenated Castor Oil, Laureth-7, Butylene Glycol, 1,2-Hexanediol, Arbutin, Lecithin, Sodium Ascorbyl Phosphate, Sodium DNA, Tocopheryl Acetate, Linolenic Acid, Glutathione, Methylparaben, Linoleic Acid, Ethylparaben, Tocopherol, Vitis Vinifera Seed Extract",
                "prod2" => "",
                "ingredient2" => "",
                "bpom" => "NA18230112439",
                "bpom2" => ""
            ],
            "body-lotion250"=> [
                "image" => "250l.png",
                "nama_produk" => "Body Lotion",
                "size" => "250ml",
                "harga" => "",
                "harga-promo" => "Rp 86.600",
                "desc" => "Azhoura adalah produk perawatan kulit berupa lotion dan serum yang formulanya terdiri dari air sehingga cepat meresap ke kulit dan mengandung molekul aktif dengan konsentrasi lebih tinggi dan membantu merawat, melembabkan kulit serta melindungi kulit dari sinar UV Mengandung Vitamin E dan Glutathione yang bisa mencerahkan kulit dalam 7 hari pemakaian.
                Membuat kamu akan lebih cepat berdandan dan siap lakukan aktivitas.",
                "link_Shopee" => "https://shopee.co.id/Azhoura-Purely-Body-Lotion-250-ml-i.1054590866.20385309464?xptdk=6959ca4a-1396-40b2-91c8-20a1efea5f16",
                "link_Tokopedia" => "https://www.tokopedia.com/azhoura/azhoura-purely-body-lotion-250ml?extParam=whid%3D16473737%26src%3Dshop",
                "link_Lazada" => "https://www.lazada.co.id/",
                "link_Wa" => "https://wa.me/+6282211355302?text=Kaka admin.. aku mau checkout *Body lotion 250ml*, terimakasih..",
                "cara-pemakaian" => "Oleskan AZHOURA - Purely Body Lotion pada kulit bagian tangan, kaki, dan badan untuk menjaga kulit dari efek sinar matahari",
                "prod1" => "",
                "ingredient" => "",
                "prod2" => "Body Lotion",
                "ingredient2" => "Aqua, Glycerin, Caprylic/Capric Triglyceride, Dimethicone, Propylene Glycol, Cetyl Alcohol, Glyceryl Stearate, Stearic Acid, Fragrance, DMDM Hydantoin, Panthenol, PEG-100 Stearate, Titanium Dioxide, Triethanolamine, Ethanol, Acrylates/C10-30 Alkyl Acrylate Crosspolymer, Allantoin , Tocopheryl Acetate, BHT, Disodium EDTA, PEG-40 Hydrogenated Castor Oil, Sodium Hyaluronate, Arbutin, Butyl Methoxydibenzoylmethane, Ethylhexyl Methoxycinnamate, Butylene Glycol, Octocrylene, Lecithin, Sodium Ascorbyl Phosphate, Linolenic Acid, Glutathione, Linoleic Acid, Tocopherol, Vitis Vinifera Seed Extract, Phenoxyethanol",
                "bpom" => "",
                "bpom2" => "NA18230112440"
            ],
            "body-lotion100"=> [
                "image" => "100l.png",
                "nama_produk" => "Body Lotion",
                "size" => "100ml",
                "harga" => "",
                "harga-promo" => "Rp 47.300",
                "desc" => "Azhoura adalah produk perawatan kulit berupa lotion dan serum yang formulanya terdiri dari air sehingga cepat meresap ke kulit dan mengandung molekul aktif dengan konsentrasi lebih tinggi dan membantu merawat, melembabkan kulit serta melindungi kulit dari sinar UV Mengandung Vitamin E dan Glutathione yang bisa mencerahkan kulit dalam 7 hari pemakaian.
                Membuat kamu akan lebih cepat berdandan dan siap lakukan aktivitas.",
                "link_Shopee" => "https://shopee.co.id/Azhoura-Purely-Body-lotion-100-ml-i.1054590866.15099655317?xptdk=2a76a036-dd5e-4838-93b7-8c5197269cbd",
                "link_Tokopedia" => "https://www.tokopedia.com/azhoura/azhoura-purely-body-lotion-100ml?extParam=src%3Dshop%26whid%3D16473737   ",
                "link_Lazada" => "https://www.lazada.co.id/",
                "link_Wa" => "https://wa.me/+6282211355302?text=Kaka admin.. aku mau checkout *Body lotion 100ml*, terimakasih..",
                "cara-pemakaian" => "Oleskan AZHOURA - Enchante Body Serum pada kulit bagian tangan, kaki dan badan untuk menjaga kulit dari efek sinar matahari",
                "prod1" => "",
                "ingredient" => "",
                "prod2" => "Body Lotion",
                "ingredient2" => "Aqua, Glycerin, Caprylic/Capric Triglyceride, Dimethicone, Propylene Glycol, Cetyl Alcohol, Glyceryl Stearate, Stearic Acid, Fragrance, DMDM Hydantoin, Panthenol, PEG-100 Stearate, Titanium Dioxide, Triethanolamine, Ethanol, Acrylates/C10-30 Alkyl Acrylate Crosspolymer, Allantoin , Tocopheryl Acetate, BHT, Disodium EDTA, PEG-40 Hydrogenated Castor Oil, Sodium Hyaluronate, Arbutin, Butyl Methoxydibenzoylmethane, Ethylhexyl Methoxycinnamate, Butylene Glycol, Octocrylene, Lecithin, Sodium Ascorbyl Phosphate, Linolenic Acid, Glutathione, Linoleic Acid, Tocopherol, Vitis Vinifera Seed Extract, Phenoxyethanol",
                "bpom" => "",
                "bpom2" => "NA18230112440"
            ],
            "bundle1"=> [
                "image" => "250l250s.png",
                "nama_produk" => "Bundle 1",
                "size" => "Body serum 250ml + Body Lotion 250ml",
                "harga" => "Rp 210.450",
                "harga-promo" => "Rp 195.900",
                "desc" => "Azhoura adalah produk perawatan kulit berupa lotion dan serum yang formulanya terdiri dari air sehingga cepat meresap ke kulit dan mengandung molekul aktif dengan konsentrasi lebih tinggi dan membantu merawat, melembabkan kulit serta melindungi kulit dari sinar UV Mengandung Vitamin E dan Glutathione yang bisa mencerahkan kulit dalam 7 hari pemakaian.
                Membuat kamu akan lebih cepat berdandan dan siap lakukan aktivitas.",
                "link_Shopee" => "https://shopee.co.id/Bundel-1-(Body-Lotion-250mL-Body-Serum-250mL)-i.1090645878.24100041222",
                "link_Tokopedia" => "https://www.tokopedia.com/azhoura/bundle-1-body-lotion-250ml-body-serum-250ml?extParam=src%3Dshop%26whid%3D16473737",
                "link_Lazada" => "https://www.lazada.co.id/",
                "link_Wa" => "https://wa.me/+6282211355302?text=Kaka admin..%0aaku mau checkout [Bundle 1]%0a*Body Serum 250ml *dan* Body Lotion 2500ml* %0aterimakasih..",
                "cara-pemakaian" => "Oleskan AZHOURA - Enchante Body Serum pada kulit bagian tangan, kaki dan badan untuk menjaga kulit dari efek sinar matahari",
                "prod1" => "Body Serum",
                "ingredient" => "Aqua, Niacinamide, Propylene Glycol, Dimethicone, Glycerin, Titanium Dioxide, Diethylhexyl Carbonate, Fragrance, Tranexamic Acid, Phenoxyethanol, Triethanolamine, Aloe Barbadensis Leaf Extract, Chamomilla Recutita Flower Extract, Ethanol, Polyacrylamide, Acrylates/C10-30 Alkyl Acrylate Crosspolymer, C13-14 Isoparaffin, Allantoin, Disodium EDTA, PEG-40 Hydrogenated Castor Oil, Laureth-7, Butylene Glycol, 1,2-Hexanediol, Arbutin, Lecithin, Sodium Ascorbyl Phosphate, Sodium DNA, Tocopheryl Acetate, Linolenic Acid, Glutathione, Methylparaben, Linoleic Acid, Ethylparaben, Tocopherol, Vitis Vinifera Seed Extract",
                "prod2" => "Body Lotion",
                "ingredient2" => "Aqua, Glycerin, Caprylic/Capric Triglyceride, Dimethicone, Propylene Glycol, Cetyl Alcohol, Glyceryl Stearate, Stearic Acid, Fragrance, DMDM Hydantoin, Panthenol, PEG-100 Stearate, Titanium Dioxide, Triethanolamine, Ethanol, Acrylates/C10-30 Alkyl Acrylate Crosspolymer, Allantoin , Tocopheryl Acetate, BHT, Disodium EDTA, PEG-40 Hydrogenated Castor Oil, Sodium Hyaluronate, Arbutin, Butyl Methoxydibenzoylmethane, Ethylhexyl Methoxycinnamate, Butylene Glycol, Octocrylene, Lecithin, Sodium Ascorbyl Phosphate, Linolenic Acid, Glutathione, Linoleic Acid, Tocopherol, Vitis Vinifera Seed Extract, Phenoxyethanol",
                "bpom" => "NA18230112439",
                "bpom2" => "NA18230112440"
            ],
            "bundle2"=> [
                "image" => "250s100l.png",
                "nama_produk" => "Bundle 2",
                "size" => "Body serum 250ml + Body Lotion 100ml",
                "harga" => "Rp 171.150",
                "harga-promo" => "Rp 157.700",
                "desc" => "Azhoura adalah produk perawatan kulit berupa lotion dan serum yang formulanya terdiri dari air sehingga cepat meresap ke kulit dan mengandung molekul aktif dengan konsentrasi lebih tinggi dan membantu merawat, melembabkan kulit serta melindungi kulit dari sinar UV Mengandung Vitamin E dan Glutathione yang bisa mencerahkan kulit dalam 7 hari pemakaian.
                Membuat kamu akan lebih cepat berdandan dan siap lakukan aktivitas.",
                "link_Shopee" => "https://shopee.co.id/Bundle-2-(Body-Serum-250mL-Body-Lotion-100mL)-i.1090645878.19886036175?sp_atk=4bc613ec-124e-47f8-b9f9-a1b67a6e9c67",
                "link_Tokopedia" => "https://www.tokopedia.com/azhoura/bundle-2-body-serum-250ml-body-lotion-100ml?extParam=whid%3D16473737%26src%3Dshop",
                "link_Lazada" => "https://www.lazada.co.id/",
                "link_Wa" => "https://wa.me/+6282211355302?text=Kaka admin..%0aaku mau checkout [Bundle 2]%0a*Body Serum 250ml *dan* Body Lotion 100ml* %0aterimakasih..",
                "cara-pemakaian" => "Oleskan AZHOURA - Enchante Body Serum pada kulit bagian tangan, kaki dan badan untuk menjaga kulit dari efek sinar matahari",
                "prod1" => "Body Serum",
                "ingredient" => "Aqua, Niacinamide, Propylene Glycol, Dimethicone, Glycerin, Titanium Dioxide, Diethylhexyl Carbonate, Fragrance, Tranexamic Acid, Phenoxyethanol, Triethanolamine, Aloe Barbadensis Leaf Extract, Chamomilla Recutita Flower Extract, Ethanol, Polyacrylamide, Acrylates/C10-30 Alkyl Acrylate Crosspolymer, C13-14 Isoparaffin, Allantoin, Disodium EDTA, PEG-40 Hydrogenated Castor Oil, Laureth-7, Butylene Glycol, 1,2-Hexanediol, Arbutin, Lecithin, Sodium Ascorbyl Phosphate, Sodium DNA, Tocopheryl Acetate, Linolenic Acid, Glutathione, Methylparaben, Linoleic Acid, Ethylparaben, Tocopherol, Vitis Vinifera Seed Extract",
                "prod2" => "Body Lotion",
                "ingredient2" => "Aqua, Glycerin, Caprylic/Capric Triglyceride, Dimethicone, Propylene Glycol, Cetyl Alcohol, Glyceryl Stearate, Stearic Acid, Fragrance, DMDM Hydantoin, Panthenol, PEG-100 Stearate, Titanium Dioxide, Triethanolamine, Ethanol, Acrylates/C10-30 Alkyl Acrylate Crosspolymer, Allantoin , Tocopheryl Acetate, BHT, Disodium EDTA, PEG-40 Hydrogenated Castor Oil, Sodium Hyaluronate, Arbutin, Butyl Methoxydibenzoylmethane, Ethylhexyl Methoxycinnamate, Butylene Glycol, Octocrylene, Lecithin, Sodium Ascorbyl Phosphate, Linolenic Acid, Glutathione, Linoleic Acid, Tocopherol, Vitis Vinifera Seed Extract, Phenoxyethanol",
                "bpom" => "NA18230112439",
                "bpom2" => "NA18230112440"
            ],
            "bundle3"=> [
                "image" => "250l100s.png",
                "nama_produk" => "Bundle 3",
                "size" => "Body serum 100ml + Body Lotion 250ml",
                "harga" => "Rp 148.900",
                "harga-promo" => "Rp 136.400",
                "desc" => "Azhoura adalah produk perawatan kulit berupa lotion dan serum yang formulanya terdiri dari air sehingga cepat meresap ke kulit dan mengandung molekul aktif dengan konsentrasi lebih tinggi dan membantu merawat, melembabkan kulit serta melindungi kulit dari sinar UV Mengandung Vitamin E dan Glutathione yang bisa mencerahkan kulit dalam 7 hari pemakaian.
                Membuat kamu akan lebih cepat berdandan dan siap lakukan aktivitas.",
                "link_Shopee" => "https://shopee.co.id/Bundle-3-(-Body-Lotion-250mL-Body-Serum-100mL)-i.1090645878.23860158560?sp_atk=e5d04b36-364e-4942-926b-0eb48f042037",
                "link_Tokopedia" => "https://www.tokopedia.com/azhoura/bundle-3-body-lotion-250ml-body-serum-100ml?extParam=src%3Dshop%26whid%3D16473737",
                "link_Lazada" => "https://www.lazada.co.id/",
                "link_Wa" => "https://wa.me/+6282211355302?text=Kaka admin..%0aaku mau checkout [Bundle 3]%0a*Body Serum 100ml *dan* Body Lotion 250ml* %0aterimakasih..",
                "cara-pemakaian" => "Oleskan AZHOURA - Enchante Body Serum pada kulit bagian tangan, kaki dan badan untuk menjaga kulit dari efek sinar matahari",
                "prod1" => "Body Serum",
                "ingredient" => "Aqua, Niacinamide, Propylene Glycol, Dimethicone, Glycerin, Titanium Dioxide, Diethylhexyl Carbonate, Fragrance, Tranexamic Acid, Phenoxyethanol, Triethanolamine, Aloe Barbadensis Leaf Extract, Chamomilla Recutita Flower Extract, Ethanol, Polyacrylamide, Acrylates/C10-30 Alkyl Acrylate Crosspolymer, C13-14 Isoparaffin, Allantoin, Disodium EDTA, PEG-40 Hydrogenated Castor Oil, Laureth-7, Butylene Glycol, 1,2-Hexanediol, Arbutin, Lecithin, Sodium Ascorbyl Phosphate, Sodium DNA, Tocopheryl Acetate, Linolenic Acid, Glutathione, Methylparaben, Linoleic Acid, Ethylparaben, Tocopherol, Vitis Vinifera Seed Extract",
                "prod2" => "Body Lotion",
                "ingredient2" => "Aqua, Glycerin, Caprylic/Capric Triglyceride, Dimethicone, Propylene Glycol, Cetyl Alcohol, Glyceryl Stearate, Stearic Acid, Fragrance, DMDM Hydantoin, Panthenol, PEG-100 Stearate, Titanium Dioxide, Triethanolamine, Ethanol, Acrylates/C10-30 Alkyl Acrylate Crosspolymer, Allantoin , Tocopheryl Acetate, BHT, Disodium EDTA, PEG-40 Hydrogenated Castor Oil, Sodium Hyaluronate, Arbutin, Butyl Methoxydibenzoylmethane, Ethylhexyl Methoxycinnamate, Butylene Glycol, Octocrylene, Lecithin, Sodium Ascorbyl Phosphate, Linolenic Acid, Glutathione, Linoleic Acid, Tocopherol, Vitis Vinifera Seed Extract, Phenoxyethanol",
                "bpom" => "NA18230112439",
                "bpom2" => "NA18230112440"
            ],
            "bundle4"=> [
                "image" => "100s100l.png",
                "nama_produk" => "Bundle 4",
                "size" => "Body serum 100ml + Body Lotion 100ml",
                "harga" => "Rp 109.600",
                "harga-promo" => "Rp 98.300",
                "desc" => "Azhoura adalah produk perawatan kulit berupa lotion dan serum yang formulanya terdiri dari air sehingga cepat meresap ke kulit dan mengandung molekul aktif dengan konsentrasi lebih tinggi dan membantu merawat, melembabkan kulit serta melindungi kulit dari sinar UV Mengandung Vitamin E dan Glutathione yang bisa mencerahkan kulit dalam 7 hari pemakaian.
                Membuat kamu akan lebih cepat berdandan dan siap lakukan aktivitas.",
                "link_Shopee" => "https://shopee.co.id/Bundle-4-(Body-Lotion-100mL-Body-Serum-100mL)-i.1090645878.24800041864?sp_atk=ba6c8330-0d74-49a1-961e-992b86c16d90",
                "link_Tokopedia" => "https://www.tokopedia.com/azhoura/bundle-4-body-lotion-100ml-body-serum-100ml?extParam=src%3Dshop%26whid%3D16473737",
                "link_Lazada" => "https://www.lazada.co.id/",
                "link_Wa" => "https://wa.me/+6282211355302?text=Kaka admin..%0aaku mau checkout [Bundle 4]%0a*Body Serum 100ml *dan* Body Lotion 100ml* %0aterimakasih..",
                "cara-pemakaian" => "Oleskan AZHOURA - Enchante Body Serum pada kulit bagian tangan, kaki dan badan untuk menjaga kulit dari efek sinar matahari",
                "prod1" => "Body Serum",
                "ingredient" => "Aqua, Niacinamide, Propylene Glycol, Dimethicone, Glycerin, Titanium Dioxide, Diethylhexyl Carbonate, Fragrance, Tranexamic Acid, Phenoxyethanol, Triethanolamine, Aloe Barbadensis Leaf Extract, Chamomilla Recutita Flower Extract, Ethanol, Polyacrylamide, Acrylates/C10-30 Alkyl Acrylate Crosspolymer, C13-14 Isoparaffin, Allantoin, Disodium EDTA, PEG-40 Hydrogenated Castor Oil, Laureth-7, Butylene Glycol, 1,2-Hexanediol, Arbutin, Lecithin, Sodium Ascorbyl Phosphate, Sodium DNA, Tocopheryl Acetate, Linolenic Acid, Glutathione, Methylparaben, Linoleic Acid, Ethylparaben, Tocopherol, Vitis Vinifera Seed Extract",
                "prod2" => "Body Lotion",
                "ingredient2" => "Aqua, Glycerin, Caprylic/Capric Triglyceride, Dimethicone, Propylene Glycol, Cetyl Alcohol, Glyceryl Stearate, Stearic Acid, Fragrance, DMDM Hydantoin, Panthenol, PEG-100 Stearate, Titanium Dioxide, Triethanolamine, Ethanol, Acrylates/C10-30 Alkyl Acrylate Crosspolymer, Allantoin , Tocopheryl Acetate, BHT, Disodium EDTA, PEG-40 Hydrogenated Castor Oil, Sodium Hyaluronate, Arbutin, Butyl Methoxydibenzoylmethane, Ethylhexyl Methoxycinnamate, Butylene Glycol, Octocrylene, Lecithin, Sodium Ascorbyl Phosphate, Linolenic Acid, Glutathione, Linoleic Acid, Tocopherol, Vitis Vinifera Seed Extract, Phenoxyethanol",
                "bpom" => "NA18230112439",
                "bpom2" => "NA18230112440"
            ]
        ];
        $data['produk'] = $produk[$id];
        return view('produkdetail',$data);
    }
}
