@extends('layout.layout')
@section('title', 'Gizi Ikan')
@section('isikonten')
{{-- header --}}
<img src="{{URL::asset('/images/manfaat1.png')}}" height="424px">
<div class="row container mt-5">
    <div class="col-1"></div>
    <div class="col-7 ml-5">
        <h1 class="font-weight-bold" style="display: inline"> {{$efeksamping->efek_samping}} </h1>
        {{-- Kandungan Racun --}}
        @if ($efeksamping->ktrt_racun)
        @php
            $kandunganRacun = explode(',', $efeksamping->ktrt_racun)
        @endphp
        <h4 class="font-weight-bold mt-5">Banyak terdapat pada kandungan berikut :</h4>
        {{-- <a href = "/" style="font-size:19px;" class="text-dark">[Edit]</a> --}}
    </div>
</div>

<div class="row d-flex justify-content-center mt-4">
    <div class="col-1"></div>
    <div class="col-10 ml-5">
        <div class="row">
            @foreach ($racun as $r)
            @if (in_array($r->nama_racun, $kandunganRacun))
            <div class="col-2 text-center mx-4" onclick="location.href='/detailracun/{{$r->racun_id}}'">
                <img src="{{URL::asset('/images/gizi.png')}}" height="70%">
                <p class="font-weight-bold mt-3">{{$r->nama_racun}}</p>
            </div>
            @endif
            @endforeach
        </div>
    </div>
    <div class="col-1"></div>
</div>
@endif


<div class="row container mt-3">
    <div class="col-1"></div>
    <div class="col-10 ml-5">
        <h4 class="font-weight-bold">Banyak ditemukan pada hasil laut :</h4>
        <div class="row">
            <div class="col-sm-12" style="margin-left:25px">
                <div class="achievement section-padding mt-3">
                    <div class="owl-carousel owl-carouselss achievement-carousel">
                        @foreach ($ikans as $i)
                        <div class="achievement-item bayangan">
                            <div class="ach-1 mb-3" style="aspect-ratio: 3/2;"><img src="{{$i->url_gambar}}" alt="ach-1" style="object-fit: contain" class="w-100 h-100 card-img"></div>
                            <div class="pl-lg-2 item-text">
                                <h6>{{$i->nama_ikan}}</h6>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        {{-- <div class="row">
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
            </div>
        </div> --}}
    </div>
    @endsection

    @section('giziactive')
    class='navbar navbar-brand active'
    @endsection
