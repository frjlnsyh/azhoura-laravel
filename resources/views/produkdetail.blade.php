@extends('layouts.app')

@section('content')
<div class="container-fluid p-0"  style="margin:-10px 0;background:#14224F;color:white">

<svg id="visual" viewBox="0 0 1000 100" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"><path d="M0 38L41.7 35.3C83.3 32.7 166.7 27.3 250 32.2C333.3 37 416.7 52 500 57.7C583.3 63.3 666.7 59.7 750 54.8C833.3 50 916.7 44 958.3 41L1000 38L1000 0L958.3 0C916.7 0 833.3 0 750 0C666.7 0 583.3 0 500 0C416.7 0 333.3 0 250 0C166.7 0 83.3 0 41.7 0L0 0Z" fill="#FFC47E" stroke-linecap="round" stroke-linejoin="miter"></path></svg>


<div class="container pt-5 pb-5" id="page-product">
      <div class="row justify-content-center text-center" id="kotak-page-product">
        <div class="col-sm-4 col-12 text-sm-end img">
          <img class="bg-white" src="{{asset('image/'.$produk['image'])}}" style="width: 100%;border: 0 0 0" alt="">
        </div>
        <div class="row col-sm-8 col-12 text-center text-sm-start" id="page-1">
          <div class="col-12 pb-3 pb-sm-3">
            <h4 class="m-0 pt-3 pt-sm-0">{{$produk['nama_produk']}}</h4>
            <p id="size">{{$produk['size']}}</p>
            <h6 id="harga" class="mb-0 card-text"><s>{{$produk['harga']}}</s></h6>
            <h5 id="harga"class="card-text text-danger">{{$produk['harga-promo']}}</h5>
            <p>{{$produk['desc']}}</p>
          </div>
          <div class="col-12">
            <a type="button" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
              Pesan Sekarang
            </a>
          </div>
          <!-- Modal -->
          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered text-secondary">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="text-center">Pilih Layanan</h4>
                </div>
                <div class="row modal-body text-center" 
                style="align-items-center;background:cover"
                color
                >
                  <a class="mx-auto col-sm-6" href="{{$produk['link_Shopee']}}"><img src="{{asset('image/shopee.png')}}"
                      alt=""></a>
                  <a class="mx-auto col-sm-6" href="{{$produk['link_Tokopedia']}}"><img
                      src="{{asset('image/tokopedia.png')}}" alt=""></a>
                  <a class="mx-auto col-sm-6" href="{{$produk['link_Wa']}}"><img src="{{asset('image/wa.png')}}"
                      alt=""></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container detailPage pt-5 pb-5">
      <div class="row">
        <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
          <li class="nav-item" role="presentation">
            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane"
              type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Cara Pemakaian</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane"
              type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Ingredient</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane"
              type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">BPOM</button>
          </li>
        </ul>
        <div class="tab-content pt-3" id="myTabContent">
          <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab"
            tabindex="0">{{$produk['cara-pemakaian']}}</div>
          <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
            <h6>{{$produk['prod1']}}</h6>
            {{$produk['ingredient']}} 
            <br> <br> 
            <h6>{{$produk['prod2']}}</h6>
            {{$produk['ingredient2']}}
          </div>
          <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">
            <h6>{{$produk['prod1']}}</h6>
            {{$produk['bpom']}}
            <h6 class="pt-3">{{$produk['prod2']}}</h6>
            {{$produk['bpom2']}}
          </div>
        </div>
      </div>
    </div>

    <svg id="visual" viewBox="0 0 1000 100" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"><path d="M0 41L41.7 38.8C83.3 36.7 166.7 32.3 250 34.2C333.3 36 416.7 44 500 49.7C583.3 55.3 666.7 58.7 750 60C833.3 61.3 916.7 60.7 958.3 60.3L1000 60L1000 101L958.3 101C916.7 101 833.3 101 750 101C666.7 101 583.3 101 500 101C416.7 101 333.3 101 250 101C166.7 101 83.3 101 41.7 101L0 101Z" fill="#FFC47E" stroke-linecap="round" stroke-linejoin="miter"></path></svg>

</div>
    

@endsection
@push('script')
@endpush