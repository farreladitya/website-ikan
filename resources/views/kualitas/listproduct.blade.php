@extends('layout.layout')
@section('title', 'List Product')
@section('isikonten')

<div class="row">
    <div class="col-sm-12">
        <img src="{{URL::asset('/images/gambarlist.png')}}" width="100%">
        <p style="font-size: 40px; color:black; margin-left: 150px; margin-top:70px" class="carousel-caption carousel-captions"><b>Sepalopoda</b> <br></p>
        <form action="kualitas/listproduct/cari" method="GET">
        <div class="row carousel-caption carousel-captions" style="margin-top:150px">
            <div class="col-sm-4"></div>
            <div class="col-sm-6">
                <div class="form-group has-search center float-right" style="width: 78%">
                    <span class="fa fa-search form-control-feedback"></span>
                    <input type="text" class="form-control buttonradius" placeholder="Cari" name="cari" value="{{ old('cari') }}">
                </div>
            </div>
            <div class="col-sm-2">
                    <button class="button buttonmasuk buttonradius" style="margin-top: 9px; margin-left:-90px" type="submit" value="CARI">Cari</button>
            </div>

        </div>
    </form>
    </div>
</div>
<div class="row">
    <div class="col-sm-3"></div>
    <div class="col-sm-9">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mt-1" style="margin-left: 47px">
            <li class="breadcrumb-item"><a class="text-secondary" href="/">Beranda</a></li>
            <li class="breadcrumb-item"><a class="text-secondary" href="/giziphp">Kualitas</a></li>
            <li class="breadcrumb-item active text-dark" aria-current="page">List Product</li>
            </ol>
        </nav>
    </div>
</div>
<livewire:ikan-kualitas></livewire:ikan-kualitas>

@endsection

@section('kualitasactive')
class='navbar navbar-brand active'
@endsection
