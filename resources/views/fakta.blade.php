@extends('layout.layout')
@section('title', 'Gizi Ikan')
@section('isikonten')
<style>
    img {
        max-width: 200px;
        max-height: 200px;
        padding: 5px;
        vertical-align: middle;
        text-align: center;
        object-fit: cover;
    }
    .divs {
        line-height: 200px;
    }
</style>
<div style="background-color: #C6DADA">
    <div class="row">
        <div class="col-6">
            <h1 class="font-weight-bold" style="margin-left:75px; margin-top: 70px; font-size:48px"> Manfaat sisa-sisa Ikan Tuna Sirip Kuning </h1>
        </div>
        <div class="col-6 my-auto text-center">
            <img src="{{URL::asset('/images/SeekPng3.png')}}" width="60%" style="max-width: unset; max-height: unset; padding: unset; ">
        </div>
    </div>
</div>
<form>
    <div class="container p-3 mt-5" style="background-color: white;">
        <div class="form-group">
            <textarea placeholder="Bagikan cara memanfaatkan sisa-sisa ikan tuna sirip kuning" style="border: none; outline: none; font-size:18px" class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
        </div>
        <div class="row">
            <div class="col-1 my-auto">
                <label class="custom-file-upload">
                <input type="file" accept=".jpg,.jpeg.,.png,.mov,.mp4" style="button"/>
                <img src="{{URL::asset('/images/upload.png')}}" width="150%" style="max-width: unset; max-height: unset; padding: unset; ">
                </label>
            </div>
            <div class="col-10 mx-4 my-auto">
                <input type="text" placeholder="Tambah konteks" style="height:34px;">
                {{-- <span class="font-weight-bold" style="background-color:white; color: #253368;padding: 5px 17px;margin-left: -5px;height:34px; display:inline-block;">Mudah Pengelohaan</span> --}}
                <span class="button font-weight-bold" onclick="/" style="background-color:#253368;color: white;border-radius: 0px 5px 5px 0px; padding: 5px 17px;margin-left: -5px;">+</span>
            </div>
        </div>
        <div class="divs"></div>
        <div class="row">
            <div class="col">
                <div class="text-right">
                    <button type="submit" class="button buttonmasuk mt-2" style="width: 130px;">Kirim</button>
                </div>
            </div>
        </div>
    </div>
</form>
<div class="container" style="margin-top: 70px; margin-bottom:130px">
    <div class="dropdown">
        <button class="btn button buttonmasuk dropdown-toggle" type="button" id="dropdownMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Urutkan Berdasarkan
        </button>
        <div class="dropdown-menu" id="pilih-ikan" aria-labelledby="dropdownMenu">
            {{-- @foreach ($persebaran as $p)
                <option class="dropdown-item jenis-ikan" value="{{$p->persebaran}};{{$p->url_gambar}};{{$p->nama_biasa}}" >{{$p->nama_biasa}}</option>
                @endforeach --}}
            </div>
        </div>
</div>
<script>
    document.getElementsByTagName('input')[0].addEventListener('change', function(event) {
    var file = event.target.files[0];
    var fileReader = new FileReader();
    if (file.type.match('image')) {
        fileReader.onload = function() {
        var img = document.createElement('img');
        img.src = fileReader.result;
        document.getElementsByClassName('divs')[0].appendChild(img);
        };
        fileReader.readAsDataURL(file);
    } else {
        fileReader.onload = function() {
        var blob = new Blob([fileReader.result], {type: file.type});
        var url = URL.createObjectURL(blob);
        var video = document.createElement('video');
        var timeupdate = function() {
            if (snapImage()) {
            video.removeEventListener('timeupdate', timeupdate);
            video.pause();
            }
        };
        video.addEventListener('loadeddata', function() {
            if (snapImage()) {
            video.removeEventListener('timeupdate', timeupdate);
            }
        });
        var snapImage = function() {
            var canvas = document.createElement('canvas');
            canvas.width = video.videoWidth;
            canvas.height = video.videoHeight;
            canvas.getContext('2d').drawImage(video, 0, 0, canvas.width, canvas.height);
            var image = canvas.toDataURL();
            var success = image.length > 100000;
            if (success) {
            var img = document.createElement('img');
            img.src = image;
            document.getElementsByClassName('divs')[0].appendChild(img);
            URL.revokeObjectURL(url);
            }
            return success;
        };
        video.addEventListener('timeupdate', timeupdate);
        video.preload = 'metadata';
        video.src = url;
        // Load video in Safari / IE11
        video.muted = true;
        video.playsInline = true;
        video.play();
        };
        fileReader.readAsArrayBuffer(file);
    }
    });
</script>
@endsection

@section('faktaactive')
class='navbar navbar-brand active'
@endsection
