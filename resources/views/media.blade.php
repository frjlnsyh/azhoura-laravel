@extends('layouts.app')

@section('content')

    <div class="background-color" style="margin:-5px 0;background:#14224F;color:white">
    <svg id="visual" viewBox="0 0 1000 100" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"><path d="M0 38L41.7 35.3C83.3 32.7 166.7 27.3 250 32.2C333.3 37 416.7 52 500 57.7C583.3 63.3 666.7 59.7 750 54.8C833.3 50 916.7 44 958.3 41L1000 38L1000 0L958.3 0C916.7 0 833.3 0 750 0C666.7 0 583.3 0 500 0C416.7 0 333.3 0 250 0C166.7 0 83.3 0 41.7 0L0 0Z" fill="#FFC47E" stroke-linecap="round" stroke-linejoin="miter"></path></svg>
    
      <div class="container pb-5" id="media">
        <div class="row pb-4 text-center" id="kotak-media" >
          <div class="col-lg-6 text-lg-start" data-aos="zoom-in">
            <div class="col-12" id="tittleMedia">
              <h2>Media</h2>
            </div>
            <div class="col-12" id="media-keterangan">
              <p>Dengan segala kebaikan untuk kecantikan, Azhoura tak hanya mempersembahkan produk-produk perawatan
                kulit,
                tapi juga informasi dan edukasi. Lewat tulisan, gambar, dan juga video, Azhoura membantu Beauties untuk
                semakin memahami kondisi kulit sendiri, dan bagaiamana harus merawatnya.
                <br><br>Terdapat konten tentang serba-serbi key ingredients dalam skincare, termasuk manfaat dan
                informasi
                pemakaiannya. Ada pula tips perawatan kecantikan, hingga informasi terkini tentang pergerakan, promo,
                dan
                juga
                event yang diikuti atau digelar oleh Azhoura dalam halaman ini. Selamat membaca, Beauties!
              </p>
            </div>
          </div>
          <div class="col-lg-6 pt-4 pb-4 pt-lg-0 pb-lg-0  text-lg-start" id="media-video" data-aos="fade-up" data-aos-delay="500">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/EYR8dC42qLw?si=aovDvodq6l9CVxWZ"
              title="YouTube video player" frameborder="0"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
              allowfullscreen></iframe>
          </div>
        </div>

        <div class="row pt-5" id="medsos-media" data-aos="fade-up">
          @foreach ($menu as $value)
          <div class="col-12 col-md-4 pt-3 pb-3" id="menuMedia">
            <a href="{{$value['link']}}">
              <img src="{{asset('image/'.$value['image'])}}" alt="">
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