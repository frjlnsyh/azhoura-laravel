@extends('layouts.app')
@section('content')

<div class="container-fluid p-0" style="margin:-5px 0;background:#14224F;color:white">

<svg id="visual" viewBox="0 0 1000 100" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"><path d="M0 38L41.7 35.3C83.3 32.7 166.7 27.3 250 32.2C333.3 37 416.7 52 500 57.7C583.3 63.3 666.7 59.7 750 54.8C833.3 50 916.7 44 958.3 41L1000 38L1000 0L958.3 0C916.7 0 833.3 0 750 0C666.7 0 583.3 0 500 0C416.7 0 333.3 0 250 0C166.7 0 83.3 0 41.7 0L0 0Z" fill="#FFC47E" stroke-linecap="round" stroke-linejoin="miter"></path></svg>

    <!-- About Us -->
    <div class="container pb-4 pe-3 ps-3 pe-md-5 ps-md-5 pb-md-5" id="about-us" data-aos="zoom-in">
      <div class="col-12">
        <h2>About Us</h2>
      </div>
      <div class="col-12">
        <p>Azhoura merupakan brand kecantikan lokal dengan kualitas premium dan kekinian.
          Azhoura hadir dengan mengeluarkan specialist product Body Care diantaranya Body Lotion dan Body Serum yang
          dapat mencerahkan dan melembabkan kulit serta mudah menyerap dengan Aroma Parfum Capoeira yang tahan lama,
          dapat dipakai oleh pria dan wanita.
          Selain itu produk Azhoura aman untuk digunakan mulai usia remaja sampai dewasa dan bersertifikat dari BPOM.
          Produk ini tersebar di seluruh e-commerce lokal Indonesia.
        </p>
      </div>
    </div>
    <!-- Menu Option -->
    <div class="container pt-4 pt-md-5" id="about-menu"  data-aos="fade-up">
      <div class="row">
        <div class="col-12 text-center">
          <h3> Media Sosial Official Azhoura</h3>
        </div>
        @foreach ($menu as $value)
        <div class="col-md-3 mx-auto text-center pt-3 pb-3" id="menu-kotak">
          <a href="{{$value['link']}}">
            <img src="{{asset('image/'.$value['image'])}}" width="100%" alt="">
            <h5 class="pt-2">{{$value['nama']}}</h5>
          </a>
        </div>
        @endforeach
      </div>
    </div>

    <svg id="visual" viewBox="0 0 1000 100" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"><path d="M0 41L41.7 38.8C83.3 36.7 166.7 32.3 250 34.2C333.3 36 416.7 44 500 49.7C583.3 55.3 666.7 58.7 750 60C833.3 61.3 916.7 60.7 958.3 60.3L1000 60L1000 101L958.3 101C916.7 101 833.3 101 750 101C666.7 101 583.3 101 500 101C416.7 101 333.3 101 250 101C166.7 101 83.3 101 41.7 101L0 101Z" fill="#FFC47E" stroke-linecap="round" stroke-linejoin="miter"></path></svg>
  
</div>
    


@endsection
@push('script')
@endpush