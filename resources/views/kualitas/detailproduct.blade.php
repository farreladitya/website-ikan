@extends('layout.layout')
@section('title', 'Detail Product')
@section('head')
@if ($i->tekstur_daging === null && $i->bau_amis === null && $i->berminyak === null && $i->duri === null)
<style>
    .informasi-ikan{
        display:none
    }
</style>
@endif
@if ($i->tekstur_daging === null)
<style>
    .tekstur{
        display:none
    }
</style>
@endif
@if ($i->bau_amis === null)
<style>
    .bau-amis{
        display:none
    }
</style>
@endif
@if ($i->berminyak === null)
<style>
    .berminyak{
        display:none
    }
</style>
@endif
@if ($i->duri === null)
<style>
    .duri{
        display:none
    }
</style>
@endif

<script>
    var msg = '{{Session::get('alert')}}';
    var exist = '{{Session::has('alert')}}';
    if(exist){
        alert(msg);
    }
</script>

@endsection


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
<div class="row">
    <div class="col-sm-5">
        <h1 class="font-weight-bold display-4 margincontainer" style="margin-top: 130px"> Ikan {{$i->nama_ikan}} </h1>
        <h1 class="font-weight-bold margincontainer" style="margin-top: 30px; color: #96B7D6;"> @if (!$i->harga && $penjual == 0)
            Harga Belum Diketahui
            @elseif ($i->harga && $ikanmitras->count() == 0)
            Rp{{$i->harga}} / Kg
            @elseif (!$i->harga && $ikanmitras->count() == 1)
            @foreach ($ikanmitras as $ikanmitra)
                @php
                    $hargaikan = $ikanmitra->harga / $ikanmitra->berat;
                    if($ikanmitra->satuan_berat == 'Ons'){
                        $hargaikan *= 10;
                    }elseif($ikanmitra->satuan_berat == 'Gram'){
                        $hargaikan *= 1000;
                    }
                @endphp
                RP{{ $hargaikan}} /Kg
            @endforeach
            @else
            @php
                $harga = [$i->harga];
            @endphp
            @foreach ($ikanmitras as $ikanmitra)
            @php
                    $hargaikanmitra = $ikanmitra->harga / (int)$ikanmitra->berat;
                    if($ikanmitra->satuan_berat == 'Ons'){
                        $hargaikanmitra *= 10;
                    }elseif($ikanmitra->satuan_berat == 'Gram'){
                        $hargaikanmitra *= 1000;
                    }
                    array_push($harga, $hargaikanmitra);
            @endphp
            @endforeach
            @php
                $hargaminimal = min($harga);
                $hargamaksimal = max($harga);
            @endphp
            RP{{ $hargaminimal }} - {{ $hargamaksimal }} / Kg
            @endif
        </h1>
        <p style="font-size: 22px; color: #96B7D6;" class="margincontainer">@if ($i->berat_minimal == 0 && $i->berat_maksimal == 0)
            All Size
            @else
            {{$i->berat_minimal}}-{{$i->berat_maksimal}} gram/ekor
            @endif</p>
            @if ($penjual != 0)
            <a href="/penjual/{{$i->ikan_id}}" class="margincontainer"> <button class="btn btn-success" style="border-radius:20px">Hubungi Penjual</button></a>
            @else
            <p style="font-size: 22px; color: #96B7D6;" class="margincontainer"> Belum ada mitra yang menjual ikan ini </p>
            @endif
        </div>
        <div class="col-sm-7">
            <img src="{{URL::asset('/images/kualitas.png')}}" style="max-width: unset; max-height: unset; padding: unset;" width="90%" class="float-right" >
        </div>
    </div>
    <div class="row d-flex justify-content-center" style="margin-top: 50px;">
        <div class="col-2 divdetail text-center">
            <p>Kategori Ikan</p>
            <i class="fa fa-list fa-lg" style="margin-top: 15px"></i><br><br>
            <p class="font-weight-bold" style="font-size: 18px; display:inline"> Ikan {{$i->jenis_ikan}} </p>
        </div>
        <div class="col-2 divdetail text-center">
            <p>Habitat</p>
            <i class="fa fa-water fa-lg" style="margin-top: 15px"></i><br><br>
            <p class="font-weight-bold" style="font-size: 18px; display:inline"> {{ $i->habitat }} </p>
        </div>
        <div class="col-2 divdetail text-center">
            <p>Tipe Proses</p>
            <i class="fa fa-fish fa-lg" style="margin-top: 15px"></i><br><br>
            <p class="font-weight-bold" style="font-size: 18px; display:inline"> {{$i->kategori_ikan}} </p>
        </div>
    </div>
    <div class="text-center informasi-ikan">
        <h2 class="font-weight-bold" style="margin-top: 100px;"> Informasi Ikan </h2>
        @if ($i->tekstur_daging)
        <div class="row d-flex justify-content-center mt-5">
            <div class="col-3 my-auto tekstur" >
                <h4 class="font-weight-bold text-left"> Tekstur Daging </h4>
            </div>
            <div class="col-1 tekstur"></div>
            <div class="col-1 @if ($i->tekstur_daging == 1 || $i->tekstur_daging == 4 || $i->tekstur_daging == 5 || $i->tekstur_daging == 7)
                divactive
                @endif divinformasi tekstur">
                <h5 style="display:inline">Kenyal</h5>
            </div>
            <div class="col-1 @if ($i->tekstur_daging == 2 || $i->tekstur_daging == 4 || $i->tekstur_daging == 6 || $i->tekstur_daging == 7)
                divactive
                @endif divinformasi tekstur">
                <h5 style="display:inline">Lembut</h5>
            </div>
            <div class="col-1 @if ($i->tekstur_daging == 3 || $i->tekstur_daging == 6 || $i->tekstur_daging == 5 || $i->tekstur_daging == 7)
                divactive
                @endif divinformasi tekstur">
                <h5 style="display:inline">Padat</h5>
            </div>
        </div>
        @endif
        @if ($i->bau_amis)
        <div class="row d-flex justify-content-center mt-4 bau-amis">
            <div class="col-3 my-auto">
                <h4 class="font-weight-bold text-left"> Bau Amis </h4>
            </div>
            <div class="col-1"></div>
            <div class="col-1 @if ($i->bau_amis == 1)
                divactive
                @endif divinformasi">
                <h5 style="display:inline">Ya</h5>
            </div>
            <div class="col-1 @if ($i->bau_amis == 2)
                divactive
                @endif divinformasi ">
                <h5 style="display:inline">Tidak</h5>
            </div>
        </div>
        @endif
        @if ($i->berminyak)
        <div class="row d-flex justify-content-center mt-4 berminyak">
            <div class="col-3 my-auto">
                <h4 class="font-weight-bold text-left">Berminyak </h4>
            </div>
            <div class="col-1"></div>
            <div class="col-1 @if ($i->berminyak == 1)
                divactive
                @endif divinformasi">
                <h5 style="display:inline">Ya</h5>
            </div>
            <div class="col-1 @if ($i->berminyak == 2)
                divactive
                @endif divinformasi ">
                <h5 style="display:inline">Tidak</h5>
            </div>
            {{-- <div class="col-1"></div> --}}
            <div class="col-1 divinformasi" style="background-color:#ece9e9">
            </div>
        </div>
        @endif
        @if ($i->duri)
        <div class="row d-flex justify-content-center mt-4 duri">
            <div class="col-3 my-auto">
                <h4 class="font-weight-bold text-left"> Duri </h4>
            </div>
            <div class="col-1"></div>
            <div class="col-1 @if ($i->duri == 1)
                divactive
                @endif divinformasi">
                <h5 style="display:inline">Ya</h5>
            </div>
            <div class="col-1 @if ($i->duri == 2)
                divactive
                @endif divinformasi">
                <h5 style="display:inline">Tidak</h5>
            </div>
        </div>

        @endif
    </div>
    <div class="container" style="background-color: #E6F5F8; border-radius:20px; padding: 50px; margin-top:80px">
        <div class="row">
            <div class="col-sm-7">
                <h1 class="font-weight-bold display-5 " > Manfaat Sisa-sisa dari Ikan {{$i->nama_ikan}} </h1>
                <p style="font-size: 22px; margin-top:20px">Bingung cara memanfaatkan sisa ikan yang tidak dikonsumsi? Disini pengunjung bisa mengetahui fakta dari sisa ikan yang memiliki berbagai manfaat</p>
                <a href="/faktaikan"><button class="button buttonmasuk buttonradius mt-4">Lihat Selengkapnya</button></a>
            </div>
            <div class="col-sm-5 my-auto">
                <img src="{{$i->url_gambar}}" width="75%" class="float-right" style="max-width: unset; max-height: unset; padding: unset;">
            </div>
        </div>
    </div>
    <h2 class="font-weight-bold text-center" style="margin-top: 100px;"> Tambah Ulasan </h2>
    <form action="/kualitas/product/detail/{{$i->ikan_id}}" method="POST">
        @csrf
        <div class="container p-3 mt-4" style="background-color: white;">
            <div class="form-group">
                <textarea placeholder="Bagikan tanggapan terkait ikan {{$i->nama_ikan}}" style="border: none; outline: none; font-size:18px" class="form-control" id="exampleFormControlTextarea1" rows="5" name="comment" required></textarea>
            </div>
            <div class="row">
                <div class="col">
                    <div class="text-right">
                        <button type="submit" class="button buttonmasuk mt-2" style="width: 130px;">Kirim</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
        <livewire:ulasan />
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
                            };
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
    </div>
</div>
    @endsection

    @section('kualitasactive')
    class='navbar navbar-brand active'
    @endsection
