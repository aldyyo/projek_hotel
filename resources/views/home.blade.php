@extends('layouts.app')

{{-- CSS  --}}
<link href="css/css.css" rel="stylesheet" type="text/css">

{{-- Font Awesome --}}
<script src="https://kit.fontawesome.com/6dd0d33a7f.js" crossorigin="anonymous"></script>

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

@section('content')
<!-- Swiper -->
<div class="swiper mySwiper rounded shadow">
    <div class="swiper-wrapper">
        <div class="swiper-slide">
            <img src="{{asset('img/hotels4.jpg')}}" alt="Hotel 1">
        </div>

        <div class="swiper-slide">
            <img src="{{asset('img/hotels5.jpg')}}" alt="Hotel 2">
        </div>

        <div class="swiper-slide">
            <img src="{{asset('img/hotels6.jpg')}}" alt="Hotel 3">
        </div>
    </div>
    <div class="swiper-pagination"></div>
</div>

{{-- Jenis Kamar Section --}}
<h2 class="mt-5 pt-4 mb-4 text-center fw-bold">Jenis Kamar</h2>

<div class="container">
    <div class="row">
        {{-- First Card --}}
        <div class="col-lg-4 col-md-6 my-3">
            <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                {{-- Image Swipper JS --}}
                <div class="swiper mySwiper rounded shadow">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="{{asset('img/reg/kamar_reg_4.jpg')}}" alt="Testing" class="">
                        </div>
                
                        <div class="swiper-slide">
                            <img src="{{asset('img/reg/kamar_reg_5.jpg')}}" alt="Testing" class="">
                        </div>
                
                        <div class="swiper-slide">
                            <img src="{{asset('img/reg/kamar_reg_6.jpg')}}" alt="Testing" class="">
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>

                <div class="card-body">
                    <h5>Standar</h5>
                    <h6 class="mb-4">Rp 500.000/Malam</h6>
                    <div class="features mb-4">
                        <h6>Features</h6>
                        <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">2 Kasur</span>
                        <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">1 Kamar Mandi</span>
                        <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">AC</span>
                        <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">TV</span>
                    </div>

                    <div class="rating mb-4">
                        <h6 class="mb-1">Rating</h6>
                        <i class="fa-solid fa-star text-warning"></i>
                        <i class="fa-solid fa-star text-warning"></i>
                        <i class="fa-solid fa-star text-warning"></i>
                        <i class="fa-solid fa-star text-warning"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <a href="/input" class="btn btn-success btn-md text-white shadow-none">Book Now</a>
                </div>
            </div>
        </div>

        {{-- Second --}}
        <div class="col-lg-4 col-md-6 my-3">
            <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                {{-- Image Swipper JS --}}
                <div class="swiper mySwiper rounded shadow">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="{{asset('img/reg/kamar_reg_3.jpg')}}" alt="Testing" class="">
                        </div>
                
                        <div class="swiper-slide">
                            <img src="{{asset('img/del/deluxe_4.jpg')}}" alt="Testing" class="">
                        </div>
                
                        <div class="swiper-slide">
                            <img src="{{asset('img/del/deluxe_3.jpg')}}" alt="Testing" class="">
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>

                <div class="card-body">
                    <h5>Deluxe</h5>
                    <h6 class="mb-4">Rp 800.000/Malam</h6>
                    <div class="features mb-4">
                        <h6>Features</h6>
                        <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">2 Kasur</span>
                        <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">1 Kamar Mandi</span>
                        <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">AC</span>
                        <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">TV</span>
                    </div>

                    <div class="rating mb-4">
                        <h6 class="mb-1">Rating</h6>
                        <i class="fa-solid fa-star text-warning"></i>
                        <i class="fa-solid fa-star text-warning"></i>
                        <i class="fa-solid fa-star text-warning"></i>
                        <i class="fa-solid fa-star text-warning"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <a href="/input" class="btn btn-success btn-md text-white shadow-none">Book Now</a>
                </div>
            </div>
        </div>

        {{-- Third --}}
        <div class="col-lg-4 col-md-6 my-3">
            <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                {{-- Image Swipper JS --}}
                <div class="swiper mySwiper rounded shadow">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="{{asset('img/fam/family_4.jpg')}}" alt="Testing" class="">
                        </div>
                
                        <div class="swiper-slide">
                            <img src="{{asset('img/fam/family_5.jpg')}}" alt="Testing" class="">
                        </div>
                
                        <div class="swiper-slide">
                            <img src="{{asset('img/fam/family_6.jpg')}}" alt="Testing" class="">
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>

                <div class="card-body">
                    <h5>Family</h5>
                    <h6 class="mb-4">Rp 1.200.000/Malam</h6>
                    <div class="features mb-4">
                        <h6>Features</h6>
                        <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">Outdoor</span>
                        <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">2 Kasur</span>
                        <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">1 Kamar Mandi</span>
                        <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">AC</span>
                        <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">TV</span>
                    </div>

                    <div class="rating mb-4">
                        <h6 class="mb-1">Rating</h6>
                        <i class="fa-solid fa-star text-warning"></i>
                        <i class="fa-solid fa-star text-warning"></i>
                        <i class="fa-solid fa-star text-warning"></i>
                        <i class="fa-solid fa-star text-warning"></i>
                        <i class="fa-solid fa-star text-warning"></i>
                    </div>
                    <a href="/input" class="btn btn-success btn-md text-white shadow-none">Book Now</a>
                </div>
            </div>
        </div>

    </div>
</div>

{{-- Tentang Kami Section --}}
<h2 class="mt-5 pt-4 mb-4 text-center fw-bold">Tentang Kami</h2>

<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-light rounded">
            <h1 class="text-center">
                Alamat
            </h1>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.5147112232958!2d106.8197822749902!3d-6.1956128937920525!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f421963cd607%3A0x503cb9e9306e657a!2sHotel%20Indonesia%20Kempinski%20Jakarta!5e0!3m2!1sid!2sid!4v1692962118991!5m2!1sid!2sid" width="855" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

        <div class="col-lg-4 col-md-4">
            <div class="p-4 rounded mb-4 bg-light">
                <h5>Telepon Kami</h5>
                <a href="" class="badge d-inline-block text-dark fs-6 mb-2 p-2 text-decoration-none">
                    <i class="fa-solid fa-phone"></i> +1-900-HOTELID
                </a>
            </div>

            <div class="p-4 rounded mb-4 bg-light">
                <h5>Email Kami</h5>
                <a href="" class="badge text-dark fs-6 mb-2 p-2 text-decoration-none">
                    <i class="fa-solid fa-envelope"></i> hotelindonesia@email.com
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Initialize Swiper -->
<script>
    var swiper = new Swiper(".mySwiper", {
        slidesPerView: 1,
        spaceBetween: 30,
        effect: "fade",
        loop: true,
        pagination: {
            el: ".swiper-pagination",
            dynamicBullets: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });
</script>
@endsection