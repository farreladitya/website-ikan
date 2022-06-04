@extends('layout.layout')
@section('title', 'Gizi Ikan')
@section('isikonten')
<img src="{{URL::asset('/images/manfaat1.png')}}" height="424px">
<div class="row container mt-5">
    <div class="col-1"></div>
    <div class="col-7 ml-5">
        <h1 class="font-weight-bold" style="display: inline"> Menjaga Kesehatan Tulang dan Gigi </h1>
        <a href = "/" style="font-size:19px;" class="text-dark">[Edit]</a>
        <h4 class="font-weight-bold mt-5">Cocok untuk :</h4>
        <ul class="mt-3" style="font-size: 18px">
            <li>Lansia</li>
            <li>Balita</li>
            <li>Anak-anak</li>
        </ul>
        <h4 class="font-weight-bold mt-5">Gizi yang dibutuhkan :</h4>
    </div>
</div>
<div class="row d-flex justify-content-center mt-4">
    <div class="col-2 text-center">
        <img src="{{URL::asset('/images/gizi.png')}}" height="70%">
        <p class="font-weight-bold mt-3">Kalsium</p>
    </div>
    <div class="col-2 text-center">
        <img src="{{URL::asset('/images/gizi.png')}}" height="70%">
        <p class="font-weight-bold mt-3">Fosfor</p>
    </div>
    <div class="col-2 text-center">
        <img src="{{URL::asset('/images/gizi.png')}}" height="70%">
        <p class="font-weight-bold mt-3">Lisin</p>
    </div>
    <div class="col-2 text-center">
        <img src="{{URL::asset('/images/gizi.png')}}" height="70%">
        <p class="font-weight-bold mt-3">Fenilanin</p>
    </div>
</div>
<div class="row container mt-3">
    <div class="col-1"></div>
    <div class="col-10 ml-5">
        <h4 class="font-weight-bold">Banyak ditemukan pada hasil laut :</h4>
        {{-- INI CAROUSEL NTAR BENERIN
            <div class="row">
            <div class="col-sm-11" style="margin-left:25px">
            <div class="achievement section-padding mt-3">
                  <div class="owl-carousel owl-carousels achievement-carousel">
                    @foreach ($pelagis as $p)
                    <div class="achievement-item bayangan" >
                        <div class="ach-1 mb-3" style="aspect-ratio: 3/2;"><img src="{{$p->url_gambar}}" style="object-fit: contain" class="w-100 h-100 card-img" alt="ach-1"></div>
                          <div class="item-text">
                            <h6>{{$p->nama_biasa}}</h6>
                            <p>@if ($p->harga === 0)
                                Harga Tidak Diketahui
                                @else
                                {{$p->harga}}
                            @endif</p>
                          </div>
                      </div>
                    @endforeach
                  </div>
            </div>
            </div>
        </div> --}}
    </div>
</div>
@endsection

@section('giziactive')
class='navbar navbar-brand active'
@endsection
