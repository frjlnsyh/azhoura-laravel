@extends('layouts.app')

@section('content')

<div class="container-fluid p-0" style="margin:-2px 0;background:#14224F;color:white">

<svg id="visual" viewBox="0 0 1000 100" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"><path d="M0 38L41.7 35.3C83.3 32.7 166.7 27.3 250 32.2C333.3 37 416.7 52 500 57.7C583.3 63.3 666.7 59.7 750 54.8C833.3 50 916.7 44 958.3 41L1000 38L1000 0L958.3 0C916.7 0 833.3 0 750 0C666.7 0 583.3 0 500 0C416.7 0 333.3 0 250 0C166.7 0 83.3 0 41.7 0L0 0Z" fill="#FFC47E" stroke-linecap="round" stroke-linejoin="miter"></path></svg>

  <div class="container" id="product">
      <div class="row">
        <div id="tittleProduct">
          <hr>
          <h2>Product Kami</h2>
          <hr>
        </div>
        @foreach ($produk as $value)
        <div class="shadow card">
          <a href="{{$value['link_produk']}}">
            <img src="{{asset('image/'.$value['image'])}}" class="card-img-top" alt="...">
            <div class="card-body">
              <h4 class="card-title m-0">{{$value['nama_produk']}}</h4>
              <p id="size">{{$value['size']}}</p>
              <h5 id="harga" class=" card-text text-danger pb-3">{{$value['keterangan_produk']}}</h5>
              <a href="{{$value['link_produk']}}" class="btn btn-outline-danger">Lihat produk</a>
            </div>
          </a>
        </div>
        @endforeach
        <div id="bundle">
        </div>
        <div id="tittleProduct">
          <hr>
          <h2>Bundle Produk</h2>
          <hr>
        </div>
        @foreach ($bundling as $value)
        <div class="shadow card">
          <a href="{{$value['link_produk']}}">
            <img src="{{asset('image/'.$value['image'])}}" class="card-img-top" alt="...">
            <div class="card-body">
              <h4 class="card-title m-0">{{$value['nama_produk']}}</h4>
              <p class="">{{$value['size']}}</p>
              <h6 id="harga" class="mb-0 card-text"><s>{{$value['harga']}}</s></h6>
              <h5 id="harga" class="card-text text-danger pb-3">{{$value['harga-promo']}}</h5>
              <a href="{{$value['link_produk']}}" class="btn btn-outline-danger">Lihat produk</a>
            </div>
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