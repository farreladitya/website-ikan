@extends('layout.layout')
@section('title', 'Gizi Ikan')
@section('isikonten')
{{-- <div class="row">
    <div class="col-sm-5 ">
        @foreach ($ikan as $i)
        <h1 class="font-weight-bold display-4 margincontainer" style="margin-top: 115px"> Cek gizi Ikan {{$i->nama_ikan}} </h1>
        @endforeach
        <div class="row mt-4">
            <div class="col-sm-12">
                <div class="container ml-lg-5 font-weight-normal">
                    <p>
                        Peta gizi membantu <br> pengunjung untuk <br> mengetahui lebih detail <br> manfaat dan efek samping dari ikan
                    </p>
                    @foreach ($ikan as $i)
                    <a href = "/gizi/product/detail/{{$i->ikan_id}}" style="font-size:17px;" class="text-secondary">Lihat Selengkapnya</a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-7">
        <img src="{{URL::asset('/images/gambarproduct.png')}}" width="85%" class="float-right">
    </div>
</div> --}}
<div class="row">
    <div class="col-sm-5">
        <h1 class="font-weight-bold display-4 margincontainer" style="margin-top: 105px"> Cek Gizi Ikan {{$ikan->nama_biasa}} </h1>
        <p style="font-size: 24px; margin-top:30px" class="margincontainer">Peta gizi membantu pengunjung untuk mengetahui lebih detail manfaat dan efek samping dari ikan</p>
        <a href = "{{route('detailproduk', $ikan->ikan_id)}}" style="font-size:17px;" class="text-secondary margincontainer">Lihat detail ikan</a>
    </div>
    <div class="col-sm-7">
        <img src="{{URL::asset('/images/kualitas.png')}}" width="90%" class="float-right">
    </div>
</div>
<div class="text-center">
    <h2 class="font-weight-bold mt-5" > Kandungan </h2>
    <a href = "/" style="font-size:19px;" class="text-dark">[Edit]</a>
    <div class="dropdown mt-4">
        <button class="btn button buttonmasuk dropdown-toggle" type="button" id="dropdownMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Pilih jenis konsumen
        </button>
        <div class="dropdown-menu" id="pilih-konsumen" aria-labelledby="dropdownMenu">
            <option class="dropdown-item jenis-konsumen">1</option>
            <option class="dropdown-item jenis-konsumen">2</option>
            <option class="dropdown-item jenis-konsumen">3</option>
        </div>
    </div>
    <div class="mt-5">
        <span class="dot" style="background-color: #253368;"></span>
        <p class="ml-2" style="display: inline-block; vertical-align: middle;">Gizi</p>
        <span class="dot ml-4" style="background-color: #0081FE;"></span>
        <p class="ml-2" style="display: inline-block; vertical-align: middle;">Racun</p>
        <span class="dot ml-4" style="background-color: #1FCD10;"></span>
        <p class="ml-2" style="display: inline-block; vertical-align: middle;">Manfaat</p>
        <span class="dot ml-4" style="background-color: #CD1010;"></span>
        <p class="ml-2" style="display: inline-block; vertical-align: middle;">Efek Samping</p>
    </div>
</div>
@php
$kandungan = explode(',', $gizi->gizi);
@endphp
@foreach ($kandungan as $k)
@php
$kandunganarray = explode(' ', $k);
$idgizi = 0;
$namaKandungan = $kandunganarray[0];
$jumlahKandungan = $kandunganarray[1];
$satuanKandungan = $kandunganarray[2];

if ($namaKandungan === 'VitaminB1') {
    $namaKandungan = "Vitamin B1";
};
if ($namaKandungan === 'VitaminB2') {
    $namaKandungan = "Vitamin B2";
};
if ($namaKandungan === 'VitaminB3') {
    $namaKandungan = "Vitamin B3";
};
if ($namaKandungan === 'VitaminB5') {
    $namaKandungan = "Vitamin B5";
};
if ($namaKandungan === 'VitaminB6') {
    $namaKandungan = "Vitamin B6";
};
if ($namaKandungan === 'VitaminB12') {
    $namaKandungan = "Vitamin B12";
};
if ($namaKandungan === 'ZatBesi') {
    $namaKandungan = "Zat Besi";
};
if ($namaKandungan === 'Omega3') {
    $namaKandungan = "Omega-3";
};
foreach ($listgizi as $lg) {
    if ($lg->nama_gizi === $namaKandungan) {
        $idgizi = $lg->gizi_id;
    }
}
@endphp
<div class="container mt-5">
    <div class="cards" style="background-color: #253368; padding: 15px; border-radius:0px" @if ($idgizi !== 0)
    onclick="location.href='{{route('detailgizi', ['idgizi'=> $idgizi])}}';"
    @endif>
    <div class="row" style="color: white">
        <div class="col-1 text-center my-auto">
            <img src="{{URL::asset('/images/nutrition.png')}}" width="80%">
        </div>
        <div class="col-10">
            <p style="font-size:30px; margin:0px"> {{$namaKandungan}}</p>
            <p style="font-size:15px; margin:0px"> {{$jumlahKandungan.' '.$satuanKandungan}}</p>
        </div>
    </div>
</div>
@foreach ($manfaat as $m)
@php
$kandungangizi = explode(',' , $m->kandungan);
@endphp
@if (in_array($namaKandungan, $kandungangizi))
<div class="mt-5 cardss" onclick="location.href='{{route('detailManfaat', ['idmanfaat' => $m->manfaat_id])}}';">
    <span style="font-size: 20px">{{$m->manfaat}}</span>
    <span class="rectangle float-right" style="background-color: #1FCD10;"></span>
    <hr style="color:#C6DADA">
</div>
@endif
@endforeach
@foreach ($efeksamping as $efek)
@php
$kandunganGiziEfek = explode(',' , $efek->ktrt_gizi);
@endphp
@if (in_array($namaKandungan, $kandunganGiziEfek))
<div class="mt-5 cardss" onclick="location.href='/';">
    <span style="font-size: 20px">{{$efek->efek_samping}}</span>
    <span class="rectangle float-right" style="background-color: #FF0000;"></span>
    <hr style="color:#C6DADA">
</div>
@endif
@endforeach
<p class="text-center mt-4">Sumber : https://hallosehat.com</p>
</div>
@endforeach
@php
$racun = explode(',', $gizi->racun);
@endphp
@foreach ($racun as $r)
@php
$idracun = 0;
foreach ($listracun as $lr) {
    if ($lr->nama_racun === $r) {
        $idracun = $lr->racun_id;
    }
}
@endphp
<div class="container mt-5">
    <div class="cards" style="background-color: #0081FE; padding: 15px; border-radius:0px" @if ($idracun !== 0)
    onclick="location.href='{{route('detailracun', ['idracun'=> $idracun])}}';"
    @endif>
    <div class="row" style="color: white">
        <div class="col-1 text-center my-auto">
            <img src="{{URL::asset('/images/poison.png')}}" width="95%">
        </div>
        <div class="col-10">
            <p style="font-size:30px; margin:0px">{{$r}}</p>
        </div>
    </div>
</div>
@foreach ($efeksamping as $efek)
@php
$kandunganGiziEfek = explode(',' , $efek->ktrt_racun);
@endphp
@if (in_array($r, $kandunganGiziEfek))
<div class="mt-5 cardss" onclick="location.href='/';">
    <span style="font-size: 20px">{{$efek->efek_samping}}</span>
    <span class="rectangle float-right" style="background-color: #FF0000;"></span>
    <hr style="color:#C6DADA">
</div>
@endif
@endforeach
<p class="text-center mt-4">Sumber : https://hallosehat.com</p>
</div>
@endforeach
@endsection
@section('giziactive')
class='navbar navbar-brand active'
@endsection
