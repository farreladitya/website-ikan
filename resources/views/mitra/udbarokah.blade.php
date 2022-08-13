@extends('layout.layout')
@section('title', 'Product')
@section('isikonten')
<h1 class="font-weight-bold display-4 text-center" style="margin-top: 120px"> UD Barokah </h1>
<div class="row container mx-auto" style="margin-top: 80px">
    <div class="col-sm-6 my-auto">
        <img src="{{URL::asset('/images/udbarokah.png')}}" width="100%">
    </div>
    <div class="col-sm-6">
        <h3 class="font-weight-bold">Tentang</h3>
        <p class="py-3 text-justify"> UD Barokah jasa merupakan UMKM yang bergerak pada bisnis mebel dan sebagai
            distributor ikan asin yang ada di wilaya Kabupaten Lamongan. Berdasarkan hasil wawancara,
            UD Barokah berencana mengembangkan bisnis nya untuk merambah pada sector ikan laut dan
            berfokus pada hasil tangkapan nelayan yang ada di perairan Kecamatan Brondong Kabupaten Lamongan.
        </p>
    </div>
</div>
<div class="row container mx-auto" style="margin-top: 80px">
    <div class="col-sm-6 my-auto">
        <h3 class="font-weight-bold">Kontak</h3>
        <div class="row">
            <div class="col-sm-3">
                <p class="mt-3" style="font-size: 20px">No Telepon </p>
            </div>
            <div class="col-sm-6">
                <p class="mt-3" style="font-size: 20px">: 081357778844</p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-3">
                <p style="font-size: 20px">Whatsapp </p>
            </div>
            <div class="col-sm-6">
                <p style="font-size: 20px">: 081357778844</p>
            </div>
        </div>
        <h3 class="font-weight-bold mt-5">Alamat</h3>
        <p class="mt-3" style="font-size: 20px"> Jl. Ds. Mertani RT 3 RW 1, Kec. Karanggereneng, Kabupaten Lamongan, Jawa Timur 62263, Indonesia</p>
    </div>
    <div class="col-sm-6">
        <div class="mapouter"><div class="gmap_canvas"><iframe width="530" height="380" id="gmap_canvas" src="https://maps.google.com/maps?q=kantor%20balai%20desa%20mertani%20lamongan&t=&z=17&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe></div></div>
    </div>
</div>
<div class="container mt-5">
    <h3 class="font-weight-bold text-center">Produk Mitra</h3>
    <form action="/mitra/udbarokah/cari" method="POST">
        @csrf
        <div class="row mt-4">
            <div class="col-sm-8">
                <div class="form-group has-search center float-right" style="width: 62%">
                    <span class="fa fa-search form-control-feedback"></span>
                    <input type="text" class="form-control buttonradius" placeholder="Cari ikan" name="cari" value="{{ old('cari') }}">
                </div>
            </div>
            <div class="col-sm-3">
                <button class="button buttonmasuk buttonradius" style="margin-top: 9px; margin-left:-20px" type="submit">Cari</button>
            </div>
            <div class="col-1"></div>
        </div>
    </form>
</div>
<div class="col-sm-8 container">
    <div class="row">
        @foreach ($input_mitra_tables as $i)
        <div class="col-lg-4 col-md-6 col-sm-10 offset-md-0 offset-sm-1 my-3" onclick="location.href='{{route('detailproduk', ['idikan'=>$i->ikan])}}';">
            <div class="card"> <div class="container-gambar" style="aspect-ratio: 3/2;"><img class="card-img-top w-100 h-100" style="aspect-ratio: 3/2" @if ($i->gambar)
                src="{{ url('/gambar_ikan/'.$i->gambar) }}"
                @else
                @foreach ($fotoikan as $f)
                @if ($f->ikan_id == $i->ikan)
                src="{{$f->url_gambar}}"
                @endif
                @endforeach
                @endif></div>
                <div class="card-body">
                    <h6 class="font-weight-bold pt-1">{{$i->nama_ikan}}</h6>
                    @if ($i->harga)
                    <div class="d-flex flex-column">
                        <div class="h6 font-weight-bold">@if ($i->harga === 0)
                            Harga Tidak Diketahui
                            @else
                            @php
                            echo "Rp. " . number_format($i->harga,0,",",".",);
                            @endphp
                            @endif</div>
                        </div>
                        @endif
                    </div>
                </div>
            </a>
        </div>
        @endforeach
    </div>
</div>
@endsection

@section('mitraactive')
class='navbar navbar-brand active'
@endsection
