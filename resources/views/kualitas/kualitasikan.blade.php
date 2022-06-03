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
    var object = [ 0, 133, 193 ];
    player.seekTo(object[slideNum]);
  }
</script>

<div class="row">
    <div class="col-2"></div>
    <div class="col-1">
        <button type="button" href="#demo" data-toggle="collapse" id="arrow" class="btn btn-default float-right" onclick="show()"> <i class="fa fa-angle-down"></i> </button>
        <script>
            function show() {
                $('#arrow').find("i").toggleClass("fa-angle-down fa-angle-up");
            }
        </script>
    </div>
    <div class="col-6">
        <p class="font-weight-bold" style="font-size:24px">Cek Warna </p>
        <a class="font-weight-light" style="color: black" href="javascript:void(0);" onclick="setCurrentTime(0)">0:00</a>
        <div id="demo" class="collapse mt-3">
            <img src="{{URL::asset('/images/detailvideo.png')}}" width="90%">
        </div>
    </div>
</div>
<div class="row mt-5">
    <div class="col-2"></div>
    <div class="col-1">
        <button type="button" href="#demo1" data-toggle="collapse" id="arrow1" class="btn btn-default float-right" onclick="show1()"> <i class="fa fa-angle-down"></i> </button>
        <script>
            function show1() {
                $('#arrow1').find("i").toggleClass("fa-angle-down fa-angle-up");
            }
        </script>
    </div>
    <div class="col-6">
        <p class="font-weight-bold" style="font-size:24px">Cek Insang </p>
        <a class="font-weight-light" style="color: black" href="javascript:void(0);" onclick="setCurrentTime(1)">2:13</a>
        <div id="demo1" class="collapse mt-3">
            <img src="{{URL::asset('/images/detailvideo.png')}}" width="90%">
        </div>
    </div>
</div>
<div class="row mt-5">
    <div class="col-2"></div>
    <div class="col-1">
        <button type="button" href="#demo2" data-toggle="collapse" id="arrow2" class="btn btn-default float-right" onclick="show2()"> <i class="fa fa-angle-down"></i> </button>
        <script>
            function show2() {
                $('#arrow2').find("i").toggleClass("fa-angle-down fa-angle-up");
            }
        </script>
    </div>
    <div class="col-6">
        <p class="font-weight-bold" style="font-size:24px">Cek Warna </p>
        <a class="font-weight-light" style="color: black" href="javascript:void(0);" onclick="setCurrentTime(2)">3:13</a>
        <div id="demo2" class="collapse mt-3">
            <img src="{{URL::asset('/images/detailvideo.png')}}" width="90%">
        </div>
    </div>
</div>

@endsection

@section('kualitasactive')
class='navbar navbar-brand active'
@endsection
