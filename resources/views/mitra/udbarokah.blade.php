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
    <div class="col-sm-6">
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
        <iframe width="600" height="450" style="border:0" loading="lazy" allowfullscreen src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJqfKWoOTudy4RUWaCEn8LeMs&key=AIzaSyBuXP-F3ucpIRV4YT9W_ZeXwqg7cl_qols"></iframe>
    </div>
</div>
@endsection

@section('mitraactive')
class='navbar navbar-brand active'
@endsection
