@extends('desktop.layout.master')

@section('css')

    <style>
        .product-container {
            margin-top: 100px;
            margin-bottom: 100px;
            border: 1px solid #aaaaaa;
            padding: 30px 20px;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            transition: margin 0.2s ease-in-out;
            overflow-wrap: break-word;
        }

        .filter {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
        }

        .filter .form-select {
            max-width: 200px;
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

        .products {
            margin-top: 50px;
        }

        a.product-link, a.card-shop {
            color: #000;
            text-decoration: none;
        }
    </style>
    
@endsection

@section('content')
    @include('desktop.layout.navbar')    

    <div class="container">
        <div class="product-container">
            <div class="container filter">
                <span>Showing 9999 Products for "electronics" 1-10 from 9999</span>
                <select class="form-select" name="filter" id="filter" aria-label="Filter">
                    <option value="" selected>1</option>
                    <option value="">1</option>
                    <option value="">1</option>
                </select>
            </div>
            <div class="container products">
                <div class="card product-card" style="width: 12rem;" onclick="productDetail(n)">
                    <a href=".." class="product-link">
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
    </div>

    @include('desktop.layout.footer')
@endsection