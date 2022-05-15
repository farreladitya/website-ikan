@extends('layout.layout')
@section('title', 'Detail Product')
@section('isikonten')

<div class="row">
    <div class="col-sm-5">
        <h1 class="font-weight-bold display-4 margincontainer" style="margin-top: 70px"> Ikan Soldier Crooker </h1>
        <h1 class="font-weight-bold margincontainer" style="margin-top: 30px; color: #96B7D6;"> Rp30000 </h1>
        <p style="font-size: 22px; color: #96B7D6;" class="margincontainer">50-500 gr/ ekor</p>
        <h4 class="font-weight-bold margincontainer" style="margin-top: 30px;"> Penjual : </h4>
        <img src="{{URL::asset('/images/udbarokah.png')}}" width="44%" class="margincontainer" style="margin-top: 10px">
    </div>
    <div class="col-sm-7">
        <img src="{{URL::asset('/images/kualitas.png')}}" width="90%" class="float-right">
    </div>
</div>
<div class="row d-flex justify-content-center" style="margin-top: 50px">
    <div class="col-2 divdetail text-center">
        <p>Nama Latin</p>
        <i class="fa fa-fish fa-lg" style="margin-top: 15px"></i><br><br>
        <p class="font-weight-bold" style="font-size: 18px; display:inline"> Thunnus albacares </p>
    </div>
    <div class="col-2 divdetail text-center">
        <p>Kategoti Ikan</p>
        <i class="fa fa-list fa-lg" style="margin-top: 15px"></i><br><br>
        <p class="font-weight-bold" style="font-size: 18px; display:inline"> Ikan Pelagis </p>
    </div>
    <div class="col-2 divdetail text-center">
        <p>Habitat</p>
        <i class="fa fa-water fa-lg" style="margin-top: 15px"></i><br><br>
        <p class="font-weight-bold" style="font-size: 18px; display:inline"> Air Laut </p>
    </div>
    <div class="col-2 divdetail text-center">
        <p>Tipe Proses</p>
        <i class="fa fa-fish fa-lg" style="margin-top: 15px"></i><br><br>
        <p class="font-weight-bold" style="font-size: 18px; display:inline"> Whole Round </p>
    </div>
</div>
<div class="text-center">
    <h2 class="font-weight-bold" style="margin-top: 100px;"> Standar Penyimpanan </h2>
    <a style="color: black; font-size:20px" href="/">[Edit]</a>
    <div class="row d-flex justify-content-center mt-4">
        <div class="col-2 text-center">
            <img src="{{URL::asset('/images/fridge.png')}}" width="24%" style="margin-top: 15px"><br><br>
            <p style="font-size: 23px; display:inline"> Simpan dalam suhu -20 </p>
        </div>
        <div class="col-1"></div>
        <div class="col-2 text-center">
            <img src="{{URL::asset('/images/stopwatch.png')}}" width="35%" style="margin-top: 15px"><br><br>
            <p style="font-size: 23px; display:inline"> Tahan Hingga 30 Hari </p>
        </div>
    </div>
    <h2 class="font-weight-bold" style="margin-top: 100px;"> Informasi Ikan </h2>
    <div class="row d-flex justify-content-center mt-5">
        <div class="col-3 my-auto">
            <h4 class="font-weight-bold text-left"> Tekstur Daging </h4>
        </div>
        <div class="col-1"></div>
        <div class="col-1 divinformasi {{-- {{ ($title === "Home") ? 'active' : '' }} --}}">
            <h5 style="display:inline">Kenyal</h5>
        </div>
        <div class="col-1 divactive {{-- {{ ($title === "Home") ? 'active' : '' }} --}}">
            <h5 style="display:inline">Lembut</h5>
        </div>
        <div class="col-1 divinformasi {{-- {{ ($title === "Home") ? 'active' : '' }} --}}">
            <h5 style="display:inline">Padat</h5>
        </div>
    </div>
    <div class="row d-flex justify-content-center mt-4">
        <div class="col-3 my-auto">
            <h4 class="font-weight-bold text-left"> Rasa Olahan </h4>
        </div>
        <div class="col-1"></div>
        <div class="col-1 divinformasi {{-- {{ ($title === "Home") ? 'active' : '' }} --}}">
            <h5 style="display:inline">Manis</h5>
        </div>
        <div class="col-1 divactive {{-- {{ ($title === "Home") ? 'active' : '' }} --}}">
            <h5 style="display:inline">Gurih</h5>
        </div>
        <div class="col-1 divinformasi {{-- {{ ($title === "Home") ? 'active' : '' }} --}}" style="background-color:  #ece9e9">
        </div>
    </div>
    <div class="row d-flex justify-content-center mt-4">
        <div class="col-1"></div>
        <div class="col-3 my-auto">
            <h4 class="font-weight-bold text-left">  </h4>
        </div>
        <div class="col-1"></div>
        <div class="col-1 divinformasi {{-- {{ ($title === "Home") ? 'active' : '' }} --}}">
            <h5 style="display:inline">Sedikit</h5>
        </div>
        <div class="col-1 divinformasi {{-- {{ ($title === "Home") ? 'active' : '' }} --}}">
            <h5 style="display:inline">Banyak</h5>
        </div>
        <div class="col-2 divactive {{-- {{ ($title === "Home") ? 'active' : '' }} --}}">
            <h5 style="display:inline">Tidak Ada</h5>
        </div>
    </div>
    <div class="row d-flex justify-content-center mt-4">
        <div class="col-3 my-auto">
            <h4 class="font-weight-bold text-left"> Kemudahan Pengolahan </h4>
        </div>
        <div class="col-1"></div>
        <div class="col-1 divactive {{-- {{ ($title === "Home") ? 'active' : '' }} --}}">
            <h5 style="display:inline">Easy</h5>
        </div>
        <div class="col-1 divinformasi {{-- {{ ($title === "Home") ? 'active' : '' }} --}}">
            <h5 style="display:inline">Medium</h5>
        </div>
        <div class="col-1 divinformasi {{-- {{ ($title === "Home") ? 'active' : '' }} --}}">
            <h5 style="display:inline">Hard</h5>
        </div>
    </div>
    <div class="row d-flex justify-content-center mt-4">
        <div class="col-3 my-auto">
            <h4 class="font-weight-bold text-left">  </h4>
        </div>
        <div class="col-1"></div>
        <div class="col-1 divactive {{-- {{ ($title === "Home") ? 'active' : '' }} --}}">
            <h5 style="display:inline">Ya</h5>
        </div>
        <div class="col-1 divinformasi {{-- {{ ($title === "Home") ? 'active' : '' }} --}}">
            <h5 style="display:inline">Tidak</h5>
        </div>
        <div class="col-1 divinformasi {{-- {{ ($title === "Home") ? 'active' : '' }} --}}" style="background-color:  #ece9e9">
        </div>
    </div>
    <div class="row d-flex justify-content-center mt-4">
        <div class="col-3 my-auto">
            <h4 class="font-weight-bold text-left"> </h4>
        </div>
        <div class="col-1"></div>
        <div class="col-1 divinformasi {{-- {{ ($title === "Home") ? 'active' : '' }} --}}">
            <h5 style="display:inline">Ya</h5>
        </div>
        <div class="col-1 divactive {{-- {{ ($title === "Home") ? 'active' : '' }} --}}">
            <h5 style="display:inline">Tidak</h5>
        </div>
        <div class="col-1 divinformasi {{-- {{ ($title === "Home") ? 'active' : '' }} --}}" style="background-color:  #ece9e9">
        </div>
    </div>
</div>

@endsection

@section('kualitasactive')
class='navbar navbar-brand active'
@endsection
