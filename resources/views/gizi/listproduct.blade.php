@extends('layout.layout')
@section('title', 'List Product')
@section('isikonten')

<div class="row">
    <div class="col-sm-12">
        <img src="{{URL::asset('/images/gambarlist.png')}}" width="100%">
        <p style="font-size: 40px; color:black; margin-left: 150px; margin-top:70px" class="carousel-caption carousel-captions"><b>List Produk</b> <br></p>
        <form action="/gizi/listproduct/cari" method="GET">
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
            <li class="breadcrumb-item"><a class="text-secondary" href="/giziphp">Gizi</a></li>
            <li class="breadcrumb-item active text-dark" aria-current="page">List Product</li>
            </ol>
        </nav>
    </div>
</div>
<form action="{{route('filtergizi')}}" method="GET" class="filterproduk">
    <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-2" style="background-color: #dcdada; border-radius: 25px; padding: 30px; font-size:14px">
            <div>
                <h4 class="font-weight-bold">Filter</h4>
            </div>
            <div>
                <p class="font-weight-bold" style="margin-top: 20px; font-size:16px">Kategori</p>
                    <div class="form-check mt-1 custom-control custom-checkbox">
                        <input class="form-check-input custom-control-input" type="checkbox" value="Cephalopod" id="defaultCheck1" name="kategori[]" @if (empty($jenis) || in_array('Cephalopod', $jenis))
                            checked
                        @endif>
                        <label class="form-check-label custom-control-label" for="defaultCheck1">
                          Sepalopoda
                        </label>
                    </div>
                    <div class="form-check mt-1 custom-control custom-checkbox">
                        <input class="form-check-input custom-control-input" type="checkbox" value="Pelagic" id="defaultCheck2" name="kategori[]" @if (empty($jenis) || in_array('Pelagic', $jenis))
                        checked
                    @endif>
                        <label class="form-check-label custom-control-label" for="defaultCheck2">
                          Ikan Pelagis
                    </div>
                    <div class="form-check mt-1 custom-control custom-checkbox">
                        <input class="form-check-input custom-control-input" type="checkbox" value="Demersal" id="defaultCheck3" name="kategori[]" @if (empty($jenis) || in_array('Demersal', $jenis))
                        checked
                    @endif>
                        <label class="form-check-label custom-control-label" for="defaultCheck3">
                          Ikan Demersal
                    </div>
            </div>
            <div class="py-3">
                <p class="font-weight-bold" style="font-size:16px">Habitat Ikan</p>
                    <div class="form-check mt-1 custom-control custom-checkbox">
                        <input class="form-check-input custom-control-input" type="checkbox" value="Air Laut" id="defaultCheck4" name="habitat[]" @if (empty($habitat) || in_array('Air Laut', $habitat))
                        checked
                    @endif>
                        <label class="form-check-label custom-control-label" for="defaultCheck4" >
                          Air Laut
                        </label>
                    </div>
                    <div class="form-check mt-1 custom-control custom-checkbox">
                        <input class="form-check-input custom-control-input" type="checkbox" value="Air Tawar" id="defaultCheck5" name="habitat[]" @if (empty($habitat) || in_array('Air Tawar', $habitat))
                        checked
                    @endif>
                        <label class="form-check-label custom-control-label" for="defaultCheck5">
                          Air Tawar
                    </div>
                    <div class="form-check mt-1 custom-control custom-checkbox">
                        <input class="form-check-input custom-control-input" type="checkbox" value="Air Payau" id="defaultCheck6" name="habitat[]" @if (empty($habitat) || in_array('Air Payau', $habitat))
                        checked
                    @endif>
                        <label class="form-check-label custom-control-label" for="defaultCheck6">
                          Air Payau
                    </div>
            </div>
            {{-- <div class="py-4">
                <p class="font-weight-bold" style="font-size:16px">Harga per kg</p>
                <input type="text" style="width: 45%" placeholder="Terendah" name="harga_min" value="{{old('harga_min')}}"> - <input type="text"style="width: 45%" placeholder="Tertinggi" name="harga_max" value="{{old('harga_max')}}">
            </div>
            <div >
                <p class="font-weight-bold" style="font-size:16px">Berat Ikan</p>
                <input type="text" style="width: 45%" placeholder="Terendah" name="berat_min" value="{{old('berat_min')}}"> - <input type="text"style="width: 45%" placeholder="Tertinggi" name="berat_max" value="{{old('berat_max')}}">
            </div> --}}
            <div class="py-4">
                <button type="submit" class="btn btn-primary">Filter</button>
            </div>
        </div>
</form>
<div class="col-sm-8 container">
    <div class="row">
        @foreach ($ikan as $i)
        <div class="col-lg-4 col-md-6 col-sm-10 offset-md-0 offset-sm-1 my-3" onclick="location.href='/gizi/product/{{$i->ikan_id}}';">
                <div class="card"> <div class="container-gambar" style="aspect-ratio: 3/2;"><img class="card-img-top w-100 h-100" style="object-fit: contain" src="{{$i->url_gambar}}"></div>
                <div class="card-body">
                    <h6 class="font-weight-bold pt-1">{{$i->nama_ikan}}</h6>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection

@section('giziactive')
class='navbar navbar-brand active'
@endsection
