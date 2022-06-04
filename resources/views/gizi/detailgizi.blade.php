@extends('layout.layout')
@section('title', 'Gizi Ikan')
@section('isikonten')
<img src="{{URL::asset('/images/omega31.png')}}" height="424px">
<div class="text-center mt-5">
    <h1 class="font-weight-bold"> Omega-3 </h1>
    <a href = "/" style="font-size:19px;" class="text-dark">[Edit]</a>
</div>
<div class="row container ">
    <div class="col-1"></div>
    <div class="col-7 ml-5">
        <h4 class="font-weight-bold mt-5">Manfaat Omega-3 :</h4>
        <ul class="mt-3" style="font-size: 18px">
            <li>Menjaga kesehatan jantung</li>
            <li>Menyehatkan otak dan mata</li>
            <li>Mengurangi risiko kerusakan mata</li>
            <li>Membantu mental</li>
        </ul>
    </div>
</div>
<div class="row container ">
    <div class="col-1"></div>
    <div class="col-7 ml-5">
        <h4 class="font-weight-bold mt-4">Efek Samping Omega-3 :</h4>
        <ul class="mt-3" style="font-size: 18px">
            <li>Gula Darah Tinggi</li>
            <li>Pendarahan</li>
            <li>Diare</li>
            <li>Refluks Asam</li>
        </ul>
    </div>
</div>
<div class="row container mt-4">
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
<div class="row container">
    <div class="col-1"></div>
    <div class="col-7 ml-5">
        <h4 class="font-weight-bold mt-5">Tips Konsumsi omega-3</h4>
        <ul class="mt-3" style="font-size: 18px">
            <li>Omega-3 sekitar 1,6 gram setiap hari</li>
        </ul>
    </div>
</div>
@endsection

@section('giziactive')
class='navbar navbar-brand active'
@endsection
