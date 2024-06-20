@extends('desktop.layout.master')

@section('css')
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>

<style>
    .dashboard-container{
      margin-bottom: 100px;
    }
    
    .swiper-container {
      width: 100%;
      max-width: 1300px;
      max-height: 500px;
      overflow: hidden;
      margin: auto;
      margin-bottom: 100px;
    }

    .swiper-slide {
      text-align: center;
      font-size: 18px;
      background: #fff;

      /* Center slide text vertically */
      display: -webkit-box;
      display: -ms-flexbox;
      display: -webkit-flex;
      display: flex;
      -webkit-box-pack: center;
      -ms-flex-pack: center;
      -webkit-justify-content: center;
      justify-content: center;
      -webkit-box-align: center;
      -ms-flex-align: center;
      -webkit-align-items: center;
      align-items: center;
    }

    .swiper-slide img {
      display: block;
      max-width: 1300px;
      width: 100%;
      max-height: 500px;
      object-fit: cover;
    }

    .swiper-button-next {
      position: absolute;
      top: 50%;
      right: 5%;
      width: 50px;
      height: 50px;
      margin-top: -25px;
      z-index: 10;
      color: #000;
    }

    .swiper-button-prev {
      position: absolute;
      top: 50%;
      left: 5%;
      width: 50px;
      height: 50px;
      margin-top: -25px;
      z-index: 10;
      color: #000;
    }
    
    .swiper-pagination {
        position: absolute;
        bottom: 20% !important;
        left: 50%;
    }

    .swiper-pagination-bullet-active {
        background-color: #000; /* Change this to the color you want */
    }

    .card-header {
        font-size: 18px;
        font-weight: bold;
    }

    .category-container .card-header {
      padding: 20px;
      font-size: 30px;
    }

    .category-container .category-button {
      font-size: 20px;
      padding: 30px 50px;
    }

    .products-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        margin-top: 100px;
        transition: margin 0.2s ease-in-out;
        overflow-wrap: break-word;
    }

    .products-container .product-card {
      transition: margin 0.5s ease-in-out;
      margin-bottom: 30px;
    }

    .products-container .product-card:hover {
      margin-left: -2px;
      margin-top: -2px;
      box-shadow: 2px 2px #b9b9b9;
    }

    .product-container .card-shop {
      font-size: 14px;
      font-weight: normal;
    }

    .card-shop, a.product-link {
      color: #000;
      text-decoration: none;
    }

    </style>
@endsection

@section('content')
    @include('desktop.layout.navbar')

    <div class="container-md mt-3 dashboard-container">
        <div class="swiper-container mySwiper">
            <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img src="{{ asset('storage/gab.jpg') }}" alt="">
            </div>
            <div class="swiper-slide"><img src="{{ asset('storage/gab.jpg') }}" alt=""></div>
            <div class="swiper-slide"><img src="{{ asset('storage/gab.jpg') }}" alt=""></div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
        </div>
        <div class="category-container card mb-3">
            <div class="card-header">Category</div>
            <div class="card-body d-flex flex-row justify-content-around">
              <a href="{{ route('dashboard.category.page', ['category' => 'electornics']) }}"><button class="btn category-button btn-primary">Electronics</button></a>
            </div>
        </div>
        <div class="products-container">

          <div class="card product-card" style="width: 12rem;" onclick="productDetail(n)">
            <a href="" class="product-link">
              <img src="{{ asset('storage/product.jpg') }}" class="card-img-top" alt="">
              <div class="card-body">
                <p class="card-text">Some quick example</p>
                <h5 class="card-title">Rp50.000</h5>
                <a href=".." class="card-shop">Toko Bijugur</a>
              </div>
            </a>
          </div>
        </div>
    </div>

    @include('desktop.layout.footer')
@endsection

@section('js')
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
  var swiper = new Swiper(".mySwiper", {
    spaceBetween: 30,
    centeredSlides: true,
    autoplay: {
      delay: 2500,
      disableOnInteraction: false
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev"
    }
  });
</script>
@endsection