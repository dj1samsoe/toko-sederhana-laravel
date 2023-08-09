@extends('layouts.frontend')
@section('content')

<div class="hero-section min-vh-100"  style="background-image: url({{asset('assets/img/bg-4.jpg')}})">
    <div class="container text-center">
        <div class="content">
            <h1 class="mb-3 mt-5 pt-5" data-aos="fade-right" data-aos-duration="1000"><b>Welcome to Djisamsoe Store</b></h1>
            <h4  class="mt-4 pb-3" data-aos="fade-left" data-aos-duration="1000">New Experience Shopping! Choose your Style Here</h4>
            <a href="#product" class="btn btn-outline-dark" style="font-size: 1.2rem; padding: 10px 20px" data-aos="fade-up" data-aos-duration="1000"><i class="fa fa-shopping-cart" style="margin-right: 10px"></i>Shop Now</a>
        </div>
    </div>
</div>

<div class="product-section" id="product">
        <div class="row">
            <div class="col-sm-10 mx-auto">
                <!--product -->
                <div class="product">
                    <h4 class="mb-3 text-center" style="color: #282828"><b>Produk Terbaru</b></h4>
                    @include('components.frontend.produk_list')
                </div>
                <!-- end product -->
        </div>
    
</div>

@endsection
@section('javascript')

@endsection