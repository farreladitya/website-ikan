@extends('layout.layout')
@section('title', 'Detail Racun')
@section('isikonten')
<img src="{{URL::asset('/images/merkury1.png')}}" height="424px">
<div class="text-center mt-5">
    <h1 class="font-weight-bold"> {{$racun->nama_racun}} </h1>
</div>
@if ($efeksamping->count() != 0)
<div class="row container ">
    <div class="col-1"></div>
    <div class="col-7 ml-5">
        <h4 class="font-weight-bold mt-5">Efek samping {{$racun->nama_racun}} :</h4>
        <ul class="mt-3" style="font-size: 18px">
            @foreach ($efeksamping as $efek)
            <li>{{$efek->efek_samping}}</li>
            @endforeach
        </ul>
    </div>
</div>
@endif
@if ($ikan->count() != 0)
<div class="row container mt-4">
    <div class="col-1"></div>
    <div class="col-10 ml-5">
        <h4 class="font-weight-bold">Banyak ditemukan pada hasil laut :</h4>
        <div class="row">
            <div class="col-sm-12">
                <div class="achievement section-padding mt-3">
                    <div class="owl-carousel owl-carouselss achievement-carousel">
                        @foreach ($ikan as $p)
                        <div class="achievement-item bayangan" >
                            <div class="ach-1 mb-3" style="aspect-ratio: 3/2;"><img src="{{$p->url_gambar}}" style="object-fit: contain" class="w-100 h-100 card-img" alt="ach-1"></div>
                            <div class="pl-lg-2 item-text">
                                <h6>{{$p->nama_ikan}}</h6>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endif
@if ($ciriracun)
<div class="row container">
    <div class="col-1"></div>
    <div class="col-7 ml-5">
        <h4 class="font-weight-bold mt-5">Ciri-ciri :</h4>
        <ul class="mt-3" style="font-size: 18px">
            @php
            $ciris = explode('|', $ciriracun->ciriracun);
            @endphp
            @foreach ($ciris as $cr)
            <li>{{$cr}}</li>
            @endforeach
        </ul>
    </div>
</div>
@endif
@endsection

@section('giziactive')
class='navbar navbar-brand active'
@endsection
