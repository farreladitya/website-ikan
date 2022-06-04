@extends('layout.layout')
@section('title', 'Gizi Ikan')
@section('isikonten')
<div style="background-color: #C6DADA">
    <div class="row">
        <div class="col-6">
            <h1 class="font-weight-bold display-4" style="margin-left:75px; margin-top: 70px"> Jawa Timur </h1>
            <form action="/listpenjual/cari" method="GET">
                <div class="row mt-4 mb-4">
                    <div class="col-sm-9">
                        <div class="form-group has-search center float-right" style="width: 87%">
                            <span class="fa fa-search form-control-feedback"></span>
                            <input type="text" class="form-control buttonradius" placeholder="Cari daerah" name="cari" value="{{ old('cari') }}">
                        </div>
                    </div>
                    <div class="col-sm-3">
                            <button class="button buttonmasuk buttonradius" style="margin-top: 9px; margin-left:-20px" type="submit">Cari</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-6 my-auto">
            <img src="{{URL::asset('/images/penjual.png')}}" width="80%" class="float-right">
        </div>
    </div>
</div>
<div class="container">
    <h2 class="font-weight-bold mt-5"> Pencarian Terpopuler </h2>
    <div class="input-group-btn mt-4" data-toggle="buttons">
        <label class="btn btn btn-outline-dark buttonradius btn-sm active pl-3 pr-3">
            <input type="radio" name="options" id="option1" autocomplete="off" checked>Offline
        </label>
        <label class="btn btn btn-outline-dark buttonradius btn-sm ml-3 pl-3 pr-3">
            <input type="radio" name="options" id="option2" autocomplete="off">Online
        </label>
    </div>
</div>
<div class="container mt-5">
    <div class="row">
        <div class="col-4">
            <img src="{{URL::asset('/images/gambarpenjual.png')}}" width="100%">
        </div>
        <div class="col-8 my-auto">
            <h2 class="font-weight-bold"> Guntur Ikan Laut </h2>
            <p>Jl. Salihara No.8, RT.11/RW.3, Jatipadang</p>
            <h4 class="font-weight-bold"> Rp 30.000/Kg </h4>
            <button class="button buttonmasuk buttonradius mt-3">Lihat Toko <i class="fas fa-arrow-right ml-2"></i> </button>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-4">
            <img src="{{URL::asset('/images/gambarpenjual.png')}}" width="100%">
        </div>
        <div class="col-8 my-auto">
            <h2 class="font-weight-bold"> Guntur Ikan Laut </h2>
            <p>Jl. Salihara No.8, RT.11/RW.3, Jatipadang</p>
            <h4 class="font-weight-bold"> Rp 30.000/Kg </h4>
            <button class="button buttonmasuk buttonradius mt-3">Lihat Toko <i class="fas fa-arrow-right ml-2"></i> </button>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-4">
            <img src="{{URL::asset('/images/gambarpenjual.png')}}" width="100%">
        </div>
        <div class="col-8 my-auto">
            <h2 class="font-weight-bold"> Guntur Ikan Laut </h2>
            <p>Jl. Salihara No.8, RT.11/RW.3, Jatipadang</p>
            <h4 class="font-weight-bold"> Rp 30.000/Kg </h4>
            <button class="button buttonmasuk buttonradius mt-3">Lihat Toko <i class="fas fa-arrow-right ml-2"></i> </button>
        </div>
    </div>
</div>
@endsection

@section('berandaactive')
class='navbar navbar-brand active'
@endsection
