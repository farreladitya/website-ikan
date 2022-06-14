@extends('layout.layout')
@section('title', 'Gizi Ikan')
@section('isikonten')
<img src="{{URL::asset('/images/manfaat1.png')}}" height="424px">
<div class="row container mt-5">
    <div class="col-1"></div>
    <div class="col-7 ml-5">
        <h1 class="font-weight-bold" style="display: inline"> {{$manfaat->manfaat}} </h1>
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
    <div class="col-1"></div>
    <div class="col-10 ml-5">
        <div class="row">
        @php
        $namaGizi = explode(',', $manfaat->kandungan);

        @endphp
        @foreach ($namaGizi as $n)
            @foreach ($gizi as $g)
                @if ($g->nama_gizi == $n)
                    <div class="col-2 text-center mx-4" onclick="location.href='/detailgizi/{{$g->gizi_id}}'">
                @endif
            @endforeach
                <img src="{{URL::asset('/images/gizi.png')}}" height="70%">
                <p class="font-weight-bold mt-3">{{$n}}</p>
            </div>
        @endforeach
        </div>
    </div>
    <div class="col-1"></div>
</div>

<div class="row container mt-3">
    <div class="col-1"></div>
    <div class="col-10 ml-5">
        <h4 class="font-weight-bold">Banyak ditemukan pada hasil laut :</h4>
        <div class="row">
            <div class="col-sm-11" style="margin-left:25px">
                <div class="achievement section-padding mt-3">
                    <div class="owl-carousel owl-carouselss achievement-carousel">
                        @foreach ($ikan as $i)
                        @php
                        //memisahkan antar data dalam gizi ikan dan manfaat
                        $namaGizi = explode(',', $manfaat->kandungan);
                        $splitgizi = explode(',', $i->gizi);
                        $kodeikansebelumnya = '';
                        @endphp

                        {{-- mendapatkan nama kandungan --}}
                        @foreach ($splitgizi as $gizi)
                            @php
                            $k = explode(' ', $gizi);
                            $kandunganikan  = $k[0];

                            @endphp

                            {{-- melihat apakah kandungan ikan terdapat dalam list kandungan dalam manfaat --}}
                            @if (in_array($kandunganikan, $namaGizi) && $i->ikan_id !== $kodeikansebelumnya)
                            <div class="achievement-item bayangan" >
                                <div class="ach-1 mb-3" style="aspect-ratio: 3/2;"><img src="{{$i->url_gambar}}" style="object-fit: contain" class="w-100 h-100 card-img" alt="ach-1"></div>
                                <div class="item-text">
                                    <h6>Ikan {{$i->nama_biasa}}</h6>
                                </div>
                            </div>
                            @php
                                $kodeikansebelumnya = $i->ikan_id;
                            @endphp
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        @endforeach
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
