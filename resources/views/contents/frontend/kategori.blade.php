@extends('layouts.frontend')
@section('content')
<div class="container mt-5 min-vh-100">
    <div class="row">
        <div class="col-sm-9 mx-auto">
            <!--product -->
            <div class="product">
                <h4 class="mt-5 mb-4 text-center"><b>{{ $title }}</b></h4>
                @include('components.frontend.produk_list')
                <br>
                {{ $produk->links() }}
            </div>
        </div>
    </div>
</div>
@endsection
@section('javascript')

@endsection