@extends('layout.layout')
@section('title', 'Beranda')
@section('isikonten')

<div class="row">
    <div class="col-5">
        <h1 class="font-weight-bold display-4 margincontainer" style="margin-top: 115px"> Halo Pecinta Hasil Laut, </h1>
        <p style="font-size: 24px; margin-top:30px" class="margincontainer">Disini kalian bisa mempelajari semua tentang hasil laut dari hal yang paling umum hingga hal yang paling detil</p>
        <button class="button buttonmasuk margincontainer">Tentang Kami</button>
    </div>
    <div class="col-7">
        <img src="{{URL::asset('/images/gambarberanda.png')}}" width="110%" class="float-right">
    </div>
</div>
<div class="row">
    <div class="col-5" style="margin-top: 65px;">
        <img src="{{URL::asset('/images/ikan1beranda.png')}}" width="100%" >
    </div>
    <div class="col-7">
        <h1 class="font-weight-bold margincontainer" style="margin-top: 140px; margin-right: 55px; font-size:40px"> Susah mencari indikator kualitas hasil laut dan cara mengelolahnya? </h1>
        <p style="font-size: 24px; margin-top:30px" class="margincontainer">Disini pengunjung bisa mencari indikator kualitas dari berbagai hasil laut</p>
        <button class="button buttonmasuk margincontainer">Pelajari Selengkapnya</button>
    </div>
</div>
<div class="row">
    <div class="col-5">
        <h1 class="font-weight-bold margincontainer" style="margin-top: 115px; font-size:40px"> Bingung dengan nilai gizi dan pantangan pada hasil laut? </h1>
        <p style="font-size: 24px; margin-top:30px" class="margincontainer">Disini pengunjung bisa menambah pengetahuan gizi dari hasil laut yang nantinya berkorelasi dengan dampak dan manfaat yang diperoleh saat dikonsumsi</p>
        <button class="button buttonmasuk margincontainer">Pelajari Selengkapnya</button>
    </div>
    <div class="col-7" style="margin-top: 85px;">
        <img src="{{URL::asset('/images/ikan2beranda.png')}}" width="60%" class="rounded mx-auto d-block">
    </div>
</div>
<div class="row">
    <div class="col-5" style="margin-top: 65px;">
        <img src="{{URL::asset('/images/kotak1beranda.png')}}" width="100%">
        <p style="font-size: 40px; color:black; text-align:left; margin-left: 110px" class="carousel-caption"><b>Rekomendasi hasil laut</b> <br>
            <span class="row row-bottom-margin" style="font-size:20px; margin-left: 0px; margin-top:20px">Bingung mau cari ikan yang antimainstream? Yuk cek rekomendasi ikan disini</span>
            <a href = "#" style="font-size:20px; color: black">Lihat Selengkapnya</a>
        </p>
    </div>
    {{-- <div class="col-7">

    </div> --}}
</div>

<div class="row">
    <div class="col-5" style="margin-top: 65px;">
        <img src="{{URL::asset('/images/resepberanda.png')}}" width="100%">
        <p style="font-size: 40px; color:black; text-align:left; margin-left: 110px" class="carousel-caption"><b>Rekomendasi Resep</b> <br>
            <span class="row row-bottom-margin" style="font-size:19px; margin-left: 0px; margin-top:20px">Bingung mau cari masakan hasil laut yang anti-mainstream? Yuk cek rekomendasi resep terpopuler disini</span>
            <a href = "#" style="font-size:19px; color: black">Lihat Selengkapnya</a>
        </p>
    </div>
    {{-- <div class="col-7">

    </div> --}}
</div>
@endsection
