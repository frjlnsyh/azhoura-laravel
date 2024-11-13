@extends('layouts.app')
@section('content')

<div class="container pt-5 pb-5 ">
<div class="d-flex flex-column flex-sm-row align-items-start">
  <div class="col-3 col-sm-3 nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
    <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-berita" aria-selected="true">Berita</button>
    <button class="nav-link" id="v-pills-produk-tab" data-bs-toggle="pill" data-bs-target="#v-pills-produk" type="button" role="tab" aria-controls="v-pills-produk" aria-selected="false">Produk</button>
  </div>
  <div class="col-9 col-sm-9 tab-content text-center" id="v-pills-tabContent">
    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab" tabindex="0">
        <h3>Aktifitas Azhoura</h3>
        <p>Berita Tentang Azhoura</p>
    </div>
    <div class="tab-pane fade" id="v-pills-produk" role="tabpanel" aria-labelledby="v-pills-produk-tab" tabindex="0">
        <h3>Produk Baru Azhoura</h3>
        <p>Produk Baru Azhoura</p>
    </div>
  </div>
</div>
</div>


@endsection
@push('script')
@endpush