@extends('layout.layout')
@section('title', 'Beranda')
@section('isikonten')

<div class="row">
    <div class="col-sm-5">
        <h1 class="font-weight-bold display-4 margincontainer" style="margin-top: 115px"> Halo Pecinta Hasil Laut, </h1>
        <p style="font-size: 24px; margin-top:30px" class="margincontainer">Disini kalian bisa mempelajari semua tentang hasil laut dari hal yang paling umum hingga hal yang paling detil</p>
        <button class="button buttonmasuk margincontainer">Tentang Kami</button>
    </div>
    <div class="col-sm-7">
        <img src="{{URL::asset('/images/gambarberanda.png')}}" width="110%" class="float-right">
    </div>
</div>
<div class="row">
    <div class="col-sm-5" style="margin-top: 105px;">
        <img src="{{URL::asset('/images/ikan2beranda.png')}}" width="70%" class="rounded mx-auto d-block">
    </div>
    <div class="col-sm-7">
        <h1 class="font-weight-bold margincontainer" style="margin-top: 130px; font-size:40px"> Bingung dengan nilai gizi dan pantangan pada hasil laut? </h1>
        <p style="font-size: 24px; margin-top:30px; margin-right:80px" class="margincontainer">Disini pengunjung bisa menambah pengetahuan gizi dari hasil laut yang nantinya berkorelasi dengan dampak dan manfaat yang diperoleh saat dikonsumsi</p>
        <a href="/gizi"><button class="button buttonmasuk margincontainer">Pelajari Selengkapnya</button></a>
    </div>
</div>
<div class="row">
    <div class="col-sm-5" style="margin-top: 190px;">
        <h1 class="font-weight-bold margincontainer" style="font-size:40px"> Susah mencari indikator kualitas hasil laut dan cara mengelolahnya? </h1>
        <p style="font-size: 24px; margin-top:30px" class="margincontainer">Disini pengunjung bisa mencari indikator kualitas dari berbagai hasil laut</p>
        <a href="/kualitas"><button class="button buttonmasuk margincontainer">Pelajari Selengkapnya</button></a>
    </div>
    <div class="col-sm-7" style="margin-top: 105px;">
        <img src="{{URL::asset('/images/ikan1beranda.png')}}" width="80%" class="float-right">
    </div>
</div>

<div style="margin-top: 85px">
    <div>
        <h1 class="font-weight-bold text-center" style="font-size:45px"> Kampanye <i>Zero Waste</i></h1>
        <p style="font-size: 22px; margin-top:30px; margin-right: 60px" class=" text-center">Bingung cara memanfaatkan sisa ikan yang tidak dikonsumsi? Disini pengunjung bisa <br>mengetahui fakta dari sisa ikan yang memiliki berbagai manfaat. </p>
    </div>
    <div class="row">
        <div class="col-sm-7">
            <div class="form-group has-search center float-right">
                <span class="fa fa-search form-control-feedback"></span>
                <input type="text" class="form-control buttonradius" placeholder="Cari">
            </div>
        </div>
        <div class="col-sm-5">
                <button class="button buttonmasuk buttonradius" style="margin-top: 9px; margin-left:-20px">Cari</button>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-3"> </div>
        <div class="col-sm-7" style="margin-left: -40px">
        <div class="achievement section-padding mt-3">
              <div class="owl-carousel achievement-carousel">
                  @foreach ($ikan as $i)
                  <div class="achievement-item bayangan">
                    <div class="ach-1 mb-3" style="aspect-ratio: 3/2;">
                        <img src="{{$i->Url}}" style="object-fit: contain" class="w-100 h-100 card-img" alt="ach-1">
                    </div>
                    <div class="item-text card-body p-1">
                        <h6>{{$i->nama_ikan}}</h6>
                        <p>{{$i->harga}}</p>
                    </div>
                  </div>
                  @endforeach
              </div>
        </div>
        </div>
</div>
<div class="row">
    <div class="col-sm-1"></div>
    <div class="col-sm-5" style="margin-top: 75px;">
        <h1 class="font-weight-bold margincontainer" style="margin-right: 55px; font-size:35px"> Daerah Persebaran Ikan</h1>
        <div class="container-sm">
            <img src="https://thumbs.dreamstime.com/b/asian-ribbon-fish-isolated-white-background-asian-ribbon-fish-115846109.jpg" alt="" style="object-fit: contain" class="w-100 h-100 gambar-persebaran">
        </div>
    </div>
    <div class="col-sm-5" style="margin-top: 80px;">
        <div class="dropdown text-right" style="margin-right: 100px;">
            <button class="btn button buttonmasuk buttonradius dropdown-toggle" type="button" id="dropdownMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Jenis Ikan
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenu">
              @foreach ($persebaran as $p)
                <button class="dropdown-item" type="button" >{{$p->nama_biasa}}</button>
              @endforeach
            </div>
        </div>
        <hr style="color = black; margin-right: 100px;" class="mt-1">
        <p> 1. Lawang </p>
        <hr style="color = black; margin-right: 100px;" class="mt-1">
        <p> 2. Tuban </p>
        <hr style="color = black; margin-right: 100px;" class="mt-1">
        <p> 3. Jampang </p>
        <hr style="color = black; margin-right: 100px;" class="mt-1">
        <p> 4. Pelabuhan ratu </p>
        <hr style="color = black; margin-right: 100px;" class="mt-1">
        <p> 5. Ujung Genteng </p>
        <hr style="color = black; margin-right: 100px;" class="mt-1">
    </div>
    <div class="col-sm-1"></div>
</div>
<div class="row">
    <div class="col-sm-5" style="margin-top: 85px;">
        <img src="{{URL::asset('/images/resepberanda.png')}}" width="100%">
        <p style="font-size: 40px; color:black; text-align:left; margin-left: 110px" class="carousel-caption"><b>Rekomendasi Resep</b> <br>
            <span class="row row-bottom-margin" style="font-size:19px; margin-left: 0px; margin-top:20px">Bingung mau cari masakan hasil laut yang anti-mainstream? Yuk cek rekomendasi resep terpopuler disini</span>
            <a href = "#" style="font-size:19px; color: black">Lihat Selengkapnya</a>
        </p>
    </div>
    <div class="col-sm-6" style="margin-top: 140px">
        <div class="input-group-btn d-flex justify-content-center" data-toggle="buttons">
            <label class="btn btn btn-outline-dark buttonradius btn-sm active">
              <input type="radio" name="options" id="option1" autocomplete="off" checked>Bergizi Tinggi
            </label>
            <label class="btn btn btn-outline-dark buttonradius btn-sm ml-3">
              <input type="radio" name="options" id="option2" autocomplete="off">Olahan Sehat
            </label>
            <label class="btn btn btn-outline-dark buttonradius btn-sm ml-3">
              <input type="radio" name="options" id="option3" autocomplete="off">Ide Jualan
            </label>
          </div>
        <div class="achievement section-padding mt-3">
              <div class="owl-carousel achievement-carousel">
                @foreach ($ikan as $i)
                  <div class="achievement-item bayangan">
                    <div class="ach-1 mb-3" style="aspect-ratio: 3/2;"><img src="{{$i->Url}}" alt="ach-1" style="object-fit: contain" class="w-100 h-100 card-img"></div>
                      <div class="item-text">
                        <h6>{{$i->nama_ikan}}</h6>
                        <p>{{$i->harga}}</p>
                      </div>
                  </div>
                  @endforeach
              </div>
        </div>
        </div>
</div>
@endsection

@section('berandaactive')
class='navbar navbar-brand active'
@endsection
