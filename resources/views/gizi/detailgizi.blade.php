@extends('layout.layout')
@section('title', 'Detail Gizi')
@section('isikonten')
<img src="{{URL::asset('/images/omega31.png')}}" height="424px">
<div class="text-center mt-5">
    <h1 class="font-weight-bold"> {{$gizi->nama_gizi}} </h1>
    {{-- <a href = "/" style="font-size:19px;" class="text-dark">[Edit]</a> --}}
</div>
@php
$benefit = 0;
foreach ($manfaat as $m) {
    if (in_array($gizi->nama_gizi, explode(',', $m->kandungan))) {
        $benefit++;
    }
}
@endphp
@if ($benefit !== 0)
<div class="row container ">
    <div class="col-1"></div>
    <div class="col-7 ml-5">
        <h4 class="font-weight-bold mt-5">Manfaat {{$gizi->nama_gizi}} :</h4>
        <ul class="mt-3" style="font-size: 18px">
            @foreach ($manfaat as $m)
            @if (in_array($gizi->nama_gizi, explode(',', $m->kandungan)))
            <li>{{$m->manfaat}}</li>
            @endif
            @endforeach
        </ul>
    </div>
</div>
@endif

@if ($efeksamping->count() != 0)
<div class="row container ">
    <div class="col-1"></div>
    <div class="col-7 ml-5">
        <h4 class="font-weight-bold mt-4">Efek Samping {{$gizi->nama_gizi}} :</h4>
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

{{-- Tips gizi --}}
@if ($tipsgizi)
<div class="row container">
    <div class="col-1"></div>
    <div class="col-7 ml-5">
        <h4 class="font-weight-bold mt-5">Tips gizi :</h4>
        <ul class="mt-3" style="font-size: 18px">
            @php
            $tips = explode('|', $tipsgizi->tipsgizi)
            @endphp
            @foreach ($tips as $t)
            <li>{{$t}}</li>
            @endforeach
        </ul>
    </div>
</div>
@endif
@endsection

@section('giziactive')
class='navbar navbar-brand active'
@endsection
