@extends('layouts.frontend')
@section('content')
<div class="container">
    <div class="btn mb-3" style="padding-top: 3rem">
        <a href="{{ url()->previous() }}" class="btn px-4" style="color: #fff; background-color: #b6895b">Back</a>
    </div>
    <div class="row">
        <div class="col-sm-9 mx-auto">
            <!--product -->
            <div class="product">
                <h4 class="mb-5 text-center"><b>{{ $title }}</b></h4>
                <div class="row">
                    <div class="col-sm-5 gambar-produk">
                        <img src="{{ asset('storage/'. $edit->gambar) }}" class="img-fluid w-100 mb-3 mr-5 rounded" data-aos="fade-right" data-aos-duration="1000">
                    </div>
                    <div class="col-sm-7 detail-produk" data-aos="fade-left" data-aos-duration="1000">
                        <div class="row mt-3">
                            <div class="col-sm-4"><b>Kategori</b></div>
                            <div class="col-sm-8">
                                <a class="text-produk" href="{{ url('kategori/'.$edit->id) }}">
                                    {{ $edit->nama_kategori }}
                                </a>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-sm-4"><b>Nama Produk</b></div>
                            <div class="col-sm-8"><b><?= $edit->nama_produk;?></b></div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-sm-4"><b>Harga jual</b></div>
                            <div class="col-sm-8" style="color: #b6895b"><h4><b>Rp. <?= number_format($edit->harga_jual);?>,-</b></h4></div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-sm-4"><b>Deskripsi</b></div>
                            <div class="col-sm-8"><?= $edit->deskripsi;?></div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-sm-4"><b></b></div>
                            <div class="col-sm-8">
                                <a class="btn btn-success btn-md" 
                                    href="https://api.whatsapp.com/send/?phone={{ $profil_toko->phone }}&text=Halo+Admin+Saya+ingin+membeli+produk+{{$edit->nama_produk}}+dengan+harga+Rp. {{number_format($edit->harga_jual)}}.+Apakah+stok+masih+ada+?" target="_blank" role="button">
                                    <i class="fab fa-whatsapp" style="margin-right: 10px"></i> Pesan Sekarang    
                                </a>    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('javascript')

@endsection