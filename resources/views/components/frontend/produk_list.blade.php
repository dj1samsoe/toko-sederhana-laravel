
<div class="d-none d-lg-block">
    <div class="row">
        @foreach($produk as $r)
        <div class="col-sm-3 mb-3 d-none d-lg-block">
            <div class="card-product mt-3">
                <a href="{{ url('produk/'.$r->id) }}">
                    <img src="{{ asset('storage/'. $r->gambar) }}" class="img-fluid w-100 rounded" style="object-position: top; object-fit: cover; max-height:250px" data-aos="fade-up" data-aos-duration="1000">
                </a>
                <div class="clearfix mb-3"></div>
                <div class="text-center">
                    <h5 style="font-size: 1rem">Rp. {{number_format($r->harga_jual)}},-</h5>
                    <a href="{{ url('produk/'.$r->id) }}" class="text-produk">{{ $r->nama_produk }}</a>
                </div>
                <div class="clearfix"></div>
            </div>  
        </div>  
        @endforeach
    </div>
</div>
<div class="d-lg-none">
    <div class="row">
        @foreach($produk as $r)
        <div class="col-6 mb-3 d-lg-none">
            <div class="card-product">
                <a href="{{ url('produk/'.$r->id) }}" class="text-produk">
                    <img src="{{ asset('storage/'. $r->gambar) }}" class="img-fluid w-100 rounded" style="object-position: top; object-fit: cover; max-height:500px" data-aos="fade-up" data-aos-duration="1000">
                </a>
                <div class="clearfix mb-3"></div>
                <div class="text-center">
                    <h5 style="font-size: 1rem">Rp. {{number_format($r->harga_jual)}},-</h5>
                    <a href="{{ url('produk/'.$r->id) }}" style="text-decoration: none; color:black; font-size: 1rem; font-weight: 600">{{ $r->nama_produk }}</a>
                </div>
                <div class="clearfix"></div>
            </div>  
        </div>  
        @endforeach
    </div>  
</div>