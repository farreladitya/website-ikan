@extends('layout.layout')
@section('title', 'Kualitas Ikan')
@section('isikonten')
<div class="row">
    <div class="col-sm-5">
        <h1 class="font-weight-bold display-4 margincontainer" style="margin-top: 105px"> Cek Kualitas Ikan {{$ikan->nama_biasa}} </h1>
        <p style="font-size: 24px; margin-top:30px" class="margincontainer">Lihat Video dan indikator dibawah untuk mengetahui indikator kualitas ikan</p>
        <a href = "/kualitas/product/detail/{{$ikan->ikan_id}}" style="font-size:17px;" class="text-secondary margincontainer">Lihat detail ikan</a>
    </div>
    <div class="col-sm-7">
        <img src="{{URL::asset('/images/kualitas.png')}}" width="90%" class="float-right">
    </div>
</div>

<div class="responsive-container d-flex align-items-center justify-content-center" style="margin-top: 80px"><div id="player"></div></div>
@php
    $waktuts = [];
    $timestamp = explode(',', $ikan->timestamp);
    $namats = [];
    $timeshow = [];
    foreach ($timestamp as $ts) {
        $w = explode(' ', $ts); //pisahkan antara waktu dan nama
        $splitw = explode(':', $w[0]); //pisahkan menit dan detik dari waktu
        array_push($timeshow, $w[0]);
        $detik = strval(($splitw[0]*60) + ($splitw[1]));
        $n = $w[1].' '.$w[2]; //concat nama timestamp (kata pertama dan kedua)
        array_push($waktuts, $detik);
        array_push($namats, $n);
    }
    $detikts = $waktuts[0];
    for ($i=0; $i < count($waktuts); $i++) {
        if ($i !== 0) {
            $detikts = $detikts.', '.$waktuts[$i];
        }
    }
@endphp
<script>
  var tag = document.createElement('script');
  tag.src = "https://www.youtube.com/iframe_api";
  var firstScriptTag = document.getElementsByTagName('script')[0];
  firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
  var player;
  function onYouTubeIframeAPIReady() {
    player = new YT.Player('player', {
        videoId: '{{$ikan->url_video}}',
    });
  }
  function setCurrentTime(slideNum) {
    var object = [{{$detikts}}];
    player.seekTo(object[slideNum]);
  }
</script>

@php
    $x = 0;
@endphp

@foreach ($namats as $namatimestamp)
<div class="row">
    <div class="col-2"></div>
    <div class="col-1">
        <button type="button" href="#demo{{$x}}" data-toggle="collapse" id="arrow{{$x}}" class="btn btn-default float-right" onclick="show({{$x}})"><i class="fa fa-angle-down"></i> </button>
        <script>
            function show(x) {
                $('#arrow'+ x).find("i").toggleClass("fa-angle-down fa-angle-up");
            }
        </script>
    </div>
    <div class="col-6">
        <p class="font-weight-bold" style="font-size:24px">{{$namatimestamp}}</p>
        <a class="font-weight-light" style="color: black" href="javascript:void(0);" onclick="setCurrentTime({{$x}})">{{$timeshow[$x]}}</a>
        <div id="demo{{$x}}" class="collapse mt-3">
            <img src="{{URL::asset('/images/detailvideo.png')}}" width="90%">
        </div>
    </div>
</div>
@php
    $x++;
@endphp
@endforeach

@endsection

@section('kualitasactive')
class='navbar navbar-brand active'
@endsection
