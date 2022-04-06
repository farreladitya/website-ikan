@extends('layout.layout')
@section('title', 'Product')
@section('isikonten')
<h1 class="font-weight-bold display-4 text-center" style="margin-top: 120px"> CV Wijaya Sukses Bersama </h1>
<div class="row container mx-auto" style="margin-top: 80px">
    <div class="col-sm-6 text-center my-auto">
        <img src="{{URL::asset('/images/cvwijaya.png')}}" width="40%">
    </div>
    <div class="col-sm-6">
        <h3 class="font-weight-bold">Tentang</h3>
        <p class="py-3 text-justify">CV. WIJAYA SUKSES BERSAMA bergerak di bidang perdagangan hasil
            olahan perikanan budidaya dan perikanan tangkap (Udang, Cumi, Dori, Kakap, Kerapu, dll).
            Perdagangan produk-produk yang segar dan bebas antibiotik adalah komitmen utama kami,
            serta memastikan terpenuhinya standar keamanan produk sesuai dengan standar nasional dan
            internasional.
        </p>
    </div>
</div>
<div class="row container mx-auto" style="margin-top: 80px">
    <div class="col-sm-6">
        <h3 class="font-weight-bold">Kontak</h3>
        <div class="row">
            <div class="col-sm-3">
                <p class="mt-3" style="font-size: 20px">No Telepon </p>
            </div>
            <div class="col-sm-6">
                <p class="mt-3" style="font-size: 20px">: 085104446661</p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-3">
                <p style="font-size: 20px">Whatsapp </p>
            </div>
            <div class="col-sm-6">
                <p style="font-size: 20px">: 085104446661</p>
            </div>
        </div>
        <h3 class="font-weight-bold mt-5">Alamat</h3>
        <p class="mt-3" style="font-size: 20px"> Jl. Kutisari Sel. VII No.12, Kutisari, Kec. Tenggilis Mejoyo, Kota SBY, Jawa Timur 60291, Indonesia</p>
    </div>
    <div class="col-sm-6">
        <iframe width="600" height="450" style="border:0" loading="lazy" allowfullscreen src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJcVTuPrT71y0RIIivI7OXXVE&key=AIzaSyBuXP-F3ucpIRV4YT9W_ZeXwqg7cl_qols"></iframe>
    </div>
</div>
@endsection

@section('mitraactive')
class='navbar navbar-brand active'
@endsection
