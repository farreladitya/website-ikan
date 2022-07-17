@extends('layout.layout')
@section('title', 'Gizi Ikan')
@section('isikonten')
<div style="background-color: #C6DADA">
    <div class="row">
        <div class="col-6">
            <h1 class="font-weight-bold display-4" style="margin-left:75px; margin-top: 70px">{{$persebaran}}</h1>
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
            <input type="radio" onclick="showOffline()" name="options" id="option1" autocomplete="off" checked>Offline
        </label>
        <label class="btn btn btn-outline-dark buttonradius btn-sm ml-3 pl-3 pr-3">
            <input type="radio" onclick="showOnline()" name="options" id="option2" autocomplete="off">Online
        </label>
    </div>
</div>

<div id="offlineOut" class="container mt-5">
    @foreach ($outlet as $o)
    @if ($o->jenis === 'offline')
    <div class="row mb-3">
        <div class="col-4">
            <img src="{{URL::asset('/images/gambarpenjual.png')}}" width="100%">
        </div>
        <div class="col-8 my-auto">
            <h2 class="font-weight-bold"> {{$o->nama_outlet}}</h2>
            <p>{{$o->lokasi}}</p>
            <h4 class="font-weight-bold"> @php
                echo "Rp. " . number_format($o->harga,0,",",".",);
            @endphp/Kg </h4>
            <a href="{{$o->url}}" class="button buttonmasuk buttonradius mt-3">Lihat Toko <i class="fas fa-arrow-right ml-2"></i> </a>
        </div>
    </div>
    @endif
    @endforeach
</div>

<div id="onlineOut" style="display: none" class="container mt-5">
    @foreach ($outlet as $o)
    @if ($o->jenis === 'online')
    <div class="row mb-3">
        <div class="col-4">
            <img src="{{URL::asset('/images/gambarpenjual.png')}}" width="100%">
        </div>
        <div class="col-8 my-auto">
            <h2 class="font-weight-bold"> {{$o->nama_outlet}}</h2>
            <h4 class="font-weight-bold"> @php
                echo "Rp. " . number_format($o->harga,0,",",".",);
            @endphp/Kg </h4>
            <a href="{{$o->url}}" class="button buttonmasuk buttonradius mt-3">Lihat Toko <i class="fas fa-arrow-right ml-2"></i> </a>
        </div>
    </div>
    @endif
    @endforeach
</div>
@endsection

@section('berandaactive')
class='navbar navbar-brand active'
@endsection
