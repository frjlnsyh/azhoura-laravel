@extends('layouts.app') @section('content')

<div
    class="background"
    style="margin: -5px 0; background: #14224f; color: white"
>
    <svg
        id="visual"
        viewBox="0 0 1000 100"
        xmlns="http://www.w3.org/2000/svg"
        xmlns:xlink="http://www.w3.org/1999/xlink"
        version="1.1"
    >
        <path
            d="M0 38L41.7 35.3C83.3 32.7 166.7 27.3 250 32.2C333.3 37 416.7 52 500 57.7C583.3 63.3 666.7 59.7 750 54.8C833.3 50 916.7 44 958.3 41L1000 38L1000 0L958.3 0C916.7 0 833.3 0 750 0C666.7 0 583.3 0 500 0C416.7 0 333.3 0 250 0C166.7 0 83.3 0 41.7 0L0 0Z"
            fill="#FFC47E"
            stroke-linecap="round"
            stroke-linejoin="miter"
        ></path>
    </svg>

    <div class="container pt-4 pb-5" id="seller" data-aos="zoom-in">
        <div class="col-12 text-center" id="tittleSeller">
            <h2 class="m-0 pb-4">Toko Terdekat Kami</h2>
        </div>
        <div class="row">
            <div class="col-12 col-md-6 text-center text-md-end">
                <iframe
                    class="rounded-3"
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15854.070200238782!2d106.818448!3d-6.5823984!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c74f1eb8c63f%3A0x9a6099a8e24ef777!2sAZHOURA%20OFFICIAL!5e0!3m2!1sid!2sid!4v1697720115460!5m2!1sid!2sid"
                    width="100%"
                    style="border: 0"
                    allowfullscreen=""
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"
                ></iframe>
            </div>
            <div class="col-12 col-md-6 text-center text-md-start">
                <h5 class="m-0 pt-4 pt-md-0">Toko Kami</h5>
                <p>
                    Jl. Pandu Raya No.49, RT.06/RW.14, Tegal Gundil, Kec. Bogor
                    Utara, Kota Bogor, Jawa Barat 16152
                </p>
            </div>
        </div>
    </div>

    <svg
        id="visual"
        viewBox="0 0 1000 100"
        xmlns="http://www.w3.org/2000/svg"
        xmlns:xlink="http://www.w3.org/1999/xlink"
        version="1.1"
        style="margin-bottom:-2px;"
    >
        <path
            d="M0 64L55.5 58.2C111 52.3 222 40.7 333.2 41.8C444.3 43 555.7 57 666.8 58.8C778 60.7 889 50.3 944.5 45.2L1000 40L1000 101L944.5 101C889 101 778 101 666.8 101C555.7 101 444.3 101 333.2 101C222 101 111 101 55.5 101L0 101Z"
            fill="#FFC47E"
            stroke-linecap="round"
            stroke-linejoin="miter"
        ></path>
    </svg>
    <!-- form -->
    <div
        class="container-fluid"
        style="background-color: #ffc47e; color: #14224f"
    >
        <div class="container">
            <div class="row text-center" id="optionSeller">
                <div class="col-12 text-center">
                    <h3>Belum Ada? Yuk Mampir Ke E-Commerce kita</h3>
                </div>
                @foreach ($ecommerce as $value)
                <div class="col-12 col-md-6 p-3"  data-aos="fade up">
                    <a href="{{$value['link']}}">
                        <img src="{{asset('image/'.$value['image'])}}" alt="" />
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <svg
        id="visual"
        viewBox="0 0 1000 100"
        xmlns="http://www.w3.org/2000/svg"
        xmlns:xlink="http://www.w3.org/1999/xlink"
        version="1.1"
        style="margin-top:-2px;"
    >
        <path
            d="M0 48L55.5 44.8C111 41.7 222 35.3 333.2 39C444.3 42.7 555.7 56.3 666.8 58.3C778 60.3 889 50.7 944.5 45.8L1000 41L1000 0L944.5 0C889 0 778 0 666.8 0C555.7 0 444.3 0 333.2 0C222 0 111 0 55.5 0L0 0Z"
            fill="#FFC47E"
            stroke-linecap="round"
            stroke-linejoin="miter"
        ></path>
    </svg>

    <div class="container-fluid">
        <div class="container p-3">
            <div class="card border-0 bg-transparent" style="color: white">
                <form>
                    <h3 class="mb-3">Bergabung Bersama Kami</h3>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label"
                            >Nama / Nama Perusahaan</label
                        >
                        <input
                            type="email"
                            class="shadow form-control"
                            id="exampleInputEmail1"
                            aria-describedby="emailHelp"
                        />
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label"
                            >Alamat Email</label
                        >
                        <input
                            type="email"
                            class="shadow form-control"
                            id="exampleFormControlInput1"
                            placeholder="name@example.com"
                        />
                    </div>
                    <div class="mb-3">
                        <label
                            for="exampleFormControlTextarea1"
                            class="form-label"
                            >Ketertarikan Terhadap Azhoura</label
                        >
                        <textarea
                            class="shadow form-control"
                            id="exampleFormControlTextarea1"
                            rows="3"
                        ></textarea>
                    </div>
                    <button type="submit" class="btn" style="">Submit</button>
                </form>
            </div>
        </div>
    </div>

    <svg
        id="visual"
        viewBox="0 0 1000 100"
        xmlns="http://www.w3.org/2000/svg"
        xmlns:xlink="http://www.w3.org/1999/xlink"
        version="1.1"
        style="margin-bottom:-2px;"
    >
        <path
            d="M0 41L41.7 38.8C83.3 36.7 166.7 32.3 250 34.2C333.3 36 416.7 44 500 49.7C583.3 55.3 666.7 58.7 750 60C833.3 61.3 916.7 60.7 958.3 60.3L1000 60L1000 101L958.3 101C916.7 101 833.3 101 750 101C666.7 101 583.3 101 500 101C416.7 101 333.3 101 250 101C166.7 101 83.3 101 41.7 101L0 101Z"
            fill="#FFC47E"
            stroke-linecap="round"
            stroke-linejoin="miter"
        ></path>
    </svg>

    @endsection @push('script') @endpush
</div>
