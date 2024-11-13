@extends('layouts.app')
@section('content')
<div class=" container-fluid p-0 w-100" style="margin-top:-2px;margin-bottom:-2px">
  <!-- Header 1 -->
  <div class="container-fluid p-0 h-1" data-bs-touch="true">
    <div id="h-11" class="carousel slide" data-bs-interval="1700" data-bs-ride="carousel">
      <div class="carousel-inner">
        @foreach ($head as $value)
        <a class="text-decoration-none" href="{{$value['link']}}">
          <div class="carousel-item {{$value['carousel']}}" id="banner1">
            <img src="{{asset('image/'.$value['image'])}}" class="d-block w-100" alt="...">
            <div class="caption w-100 position-absolute bottom-0 start-50 translate-middle justify-content-center text-center">
              <h1>Click Content</h1>
              <a href="" class="btn btn-danger"> Holaa</a>
            </div>
            
            <div class="gradient position-absolute bottom-0"
            style=
            "
            width:100%;
            height:100px;          
            background: linear-gradient(0deg, #FFC47E 0%, rgba(0,212,255,0) 50%);
            "
            >
              
            </div>
            <div class="gradient position-absolute top-0"
            style=
            "
            width:100%;
            height:100px;          
            background: linear-gradient(180deg, #FFC47E 0%, rgba(0,212,255,0) 20%);
            "
            >
              
            </div>
          </div>
        </a>
        @endforeach
      </div>
      <button class="carousel-control-prev mu-auto" type="button" data-bs-target="#h-11" data-bs-slide="prev">
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#h-11" data-bs-slide="next">
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>
  <!-- Header 2 -->
  <div class="container-fluid p-0 h-2">
    <div id="h-22" class="carousel slide" data-bs-interval="1700" data-bs-ride="carousel">
      <div class="carousel-inner">
        @foreach ($head2 as $value)
        <a href="{{$value['link']}}">
          <div class="carousel-item {{$value['carousel']}}">
            <img src="{{asset('image/'.$value['image'])}}" class="d-block w-100" alt="...">
            <div class="gradient position-absolute bottom-0"
            style=
            "
            width:100%;
            height:100px;          
            background: linear-gradient(0deg, #FFC47E 0%, rgba(0,212,255,0) 50%);
            "
            >
              
            </div>
            <div class="gradient position-absolute top-0"
            style=
            "
            width:100%;
            height:100px;          
            background: linear-gradient(180deg, #FFC47E 0%, rgba(0,212,255,0) 20%);
            "
            >
              
            </div>
          </div>
        </a>
        @endforeach
      </div>
      <button class="carousel-control-prev mu-auto" type="button" data-bs-target="#h-22" data-bs-slide="prev">
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#h-22" data-bs-slide="next">
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>
  <!-- product -->
    <div class="j-2" style="margin-top:-2px;">
    <div class="container pt-3 pb-3" id="j-22">
      <div class="text-center pb-4 pb-md-5" id="t-1">
        <h2>Produk Kami</h2>
      </div>
      <div id="t-11" class="carousel slide">
        <div class="carousel-inner d-md-flex">
          @foreach ($prod as $value)
          <div class="carousel-item {{$value['carousel']}}">
            <div class="shadow border-0 card mx-auto">
              <a href="{{$value['link']}}">
                <img src="{{asset('image/'.$value['image'])}}" class="card-img-top" alt="...">
              </a>
              <div class="card-body text-center">
                <h4 class="m-0 card-title">{{$value['nama-produk']}}</h4>
                <p id="size">{{$value['size']}}</ml>
                <h5 id="harga" class="card-text text-danger">{{$value['harga']}}</h5>
                <a href="{{$value['link']}}" id="c-btn-2" class="btn">Lihat Produk</a>
              </div>
            </div>
          </div>
          @endforeach
        </div>
        <button class="carousel-control-prev d-md-none" type="button" data-bs-target="#t-11" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next d-md-none" type="button" data-bs-target="#t-11" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
        <div class="text-center pt-4 pt-md-5" id="cc-btn-2">
          <a href="{{url('/product')}}" class="btn"><b>Semua Produk</b></a>
        </div>
      </div>
    </div>
  </div>
  <!-- bundle -->
  <div class="j-1" style="background:#FFC47E;color:#14224F;">
  <svg style="margin-top:-2px" id="visual" viewBox="0 0 1000 100" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"><path d="M0 55L41.7 56.7C83.3 58.3 166.7 61.7 250 61.3C333.3 61 416.7 57 500 50.5C583.3 44 666.7 35 750 31.7C833.3 28.3 916.7 30.7 958.3 31.8L1000 33L1000 0L958.3 0C916.7 0 833.3 0 750 0C666.7 0 583.3 0 500 0C416.7 0 333.3 0 250 0C166.7 0 83.3 0 41.7 0L0 0Z" fill="#14224F" stroke-linecap="round" stroke-linejoin="miter"></path></svg>
    <div class="container  pt-3 pb-3" data-bs-touch="true" id="j-11">
      <div class="text-center pb-4 pb-md-5" id="b-1">
        <h2 class="m-0">Bundling Produk</h2>
      </div>
      <div id="b-11" class="carousel slide">
        <div class="carousel-inner d-md-flex">
          @foreach ($bundling as $value)
          <div class="carousel-item {{$value['carousel']}}">
            <div class="shadow border-0 card mx-auto col-4">
              <a href="{{$value['link']}}">
                <img src="{{asset('image/'.$value['image'])}}" class="card-img-top" alt="...">
              </a>
              <div class="card-body text-center">
                <h4 class="mb-0 card-title">{{$value['nama-produk']}}</h4>
                <p id="size">{{$value['size']}}</p>
                <h6 id="harga" class="mb-0 card-text"><s>{{$value['harga']}}</s></h6>
                <h5 id="harga" class="card-text text-danger">{{$value['harga-promo']}}</h5>
                <a href="{{$value['link']}}" class="btn" id="c-btn-1">Lihat Produk</a>
              </div>
            </div>
          </div>
          @endforeach
        </div>
        <button class="carousel-control-prev d-md-none" type="button" data-bs-target="#b-11" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next d-md-none" type="button" data-bs-target="#b-11" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
        <div class="text-center pt-4 pt-md-5" id="cc-btn-1">
          <a href="{{url('/product#bundle')}}" class="btn"><b>Semua Bundling</b></a>
        </div>
      </div>
    </div>
  </div>
  <!-- Maps -->
  <div class="wrapper" style="background:#14224F;color:#FFC47E">
  <svg style="margin-top:-2px" id="visual" viewBox="0 0 1000 100" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"><path d="M0 50L41.7 52C83.3 54 166.7 58 250 56C333.3 54 416.7 46 500 39.2C583.3 32.3 666.7 26.7 750 31.3C833.3 36 916.7 51 958.3 58.5L1000 66L1000 0L958.3 0C916.7 0 833.3 0 750 0C666.7 0 583.3 0 500 0C416.7 0 333.3 0 250 0C166.7 0 83.3 0 41.7 0L0 0Z" fill="#FFC47E" stroke-linecap="round" stroke-linejoin="miter"></path></svg>
    <div class="container text-center pt-4 pb-4 pt-md-5 pb-md-5" id="store-home">
      <div id="store-home-tittle">
        <h2 class="pb-3">Official Store</h2>
      </div>
      <div class="row" id="store-home-maps">
        <div class="col-12 col-md-6 m-0  text-md-end">
          <iframe
                    class="rounded-3"
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15854.070200238782!2d106.818448!3d-6.5823984!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c74f1eb8c63f%3A0x9a6099a8e24ef777!2sAZHOURA%20OFFICIAL!5e0!3m2!1sid!2sid!4v1697720115460!5m2!1sid!2sid"
                    style="border: 0"
                    allowfullscreen=""
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"
                ></iframe>
        </div>
        <div class="col-12 col-md-6 m-0 text-md-start">
          <h5 class="pt-4 pt-md-0">Store terdekatmu</h5>
          <p>Jl. Pandu Raya No.49, RT.06/RW.14, Tegal Gundil, Kec. Bogor Utara, Kota Bogor, Jawa Barat 16152</p>
        </div>
      </div>
    </div>
  </div>
  <!-- Ecommerce -->
  <div class="container-fluid p-0" style="background:#14224F;color:#FFC47E;margin:-2px 0">
    <div class="container toko-home pt-4 pb-4 pt-md-5 pb-md-5">
      <div class="row" id="toko-home-button">
        <div class="col-12 text-center pb-3">
          <h2>Belum Menemukan Store Terdekatmu?</h2>
        </div>
        <div class="col-12 text-center">
          <a href="{{url('/seller#optionSeller')}}" class="btn"><b>Lihat E-commerce Kita</b></a>
        </div>
      </div>
    </div>
    <svg id="visual" viewBox="0 0 1000 100" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"><path d="M0 36L41.7 34.7C83.3 33.3 166.7 30.7 250 37.8C333.3 45 416.7 62 500 66.2C583.3 70.3 666.7 61.7 750 58.2C833.3 54.7 916.7 56.3 958.3 57.2L1000 58L1000 101L958.3 101C916.7 101 833.3 101 750 101C666.7 101 583.3 101 500 101C416.7 101 333.3 101 250 101C166.7 101 83.3 101 41.7 101L0 101Z" fill="#FFC47E" stroke-linecap="round" stroke-linejoin="miter"></path></svg>
</div>

@endsection
@push('script')
@endpush