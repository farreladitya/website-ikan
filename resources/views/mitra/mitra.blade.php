@extends('layout.layout')
@section('title', 'Product')
@section('isikonten')
<h1 class="font-weight-bold display-4 text-center" style="margin-top: 100px"> Mitra </h1>
<div class="row mt-5">
    <div class="col-sm-3"></div>
    <div class="col-sm-6" onclick="location.href='/mitra/udbarokah';">
        <div class="row cards">
            <div class="col-sm-7 my-auto">
                <img src="{{URL::asset('/images/udbarokah.png')}}" width="100%">
            </div>
            <div class="col-sm-5">
                <h3 class="font-weight-bold">Kontak</h3>
                <i class="fab fa-whatsapp py-3" style="color:#189d0e; font-size:20px"></i>
                <span class="ml-2" style="font-size: 20px"> 081357778844</span><br>
                <i class="fas fa-phone-alt py-2" style="font-size:20px"></i>
                <span class="ml-2" style="font-size: 20px"> 081357778844</span><br>
                <i class="fas fa-envelope py-3" style="color:red; font-size:20px"></i>
                <span class="ml-2" style="font-size: 20px"> -</span>
            </div>
        </div>
    </div>
    <div class="col-sm-3"></div>
</div>
<div class="row" style="margin-top: 100px; margin-bottom: 100px">
    <div class="col-sm-3"></div>
    <div class="col-sm-6" onclick="location.href='/mitra/cvwijayasuksesbersama';">
        <div class="row cards">
            <div class="col-sm-7 text-center my-auto">
                <img src="{{URL::asset('/images/cvwijaya.png')}}" width="50%">
            </div>
            <div class="col-sm-5">
                <h3 class="font-weight-bold">Kontak</h3>
                <i class="fab fa-whatsapp py-3" style="color:#189d0e; font-size:20px"></i>
                <span class="ml-2" style="font-size: 20px"> 085104446661</span><br>
                <i class="fas fa-phone-alt py-2" style="font-size:20px"></i>
                <span class="ml-2" style="font-size: 20px"> 085104446661</span><br>
                <i class="fas fa-envelope py-3" style="color:red; font-size:20px"></i>
                <span class="ml-2" style="font-size: 20px"> -</span>
            </div>
        </div>
    </div>
    <div class="col-sm-3"></div>
</div>
@endsection

@section('mitraactive')
class='navbar navbar-brand active'
@endsection
