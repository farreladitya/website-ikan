@extends('layout.layout')
@section('title', 'Detail Product')
@section('isikonten')

<div class="row">
    <div class="col-sm-5">
        <h1 class="font-weight-bold display-4 margincontainer" style="margin-top: 70px"> Ikan Soldier Crooker </h1>
        <h1 class="font-weight-bold margincontainer" style="margin-top: 30px; color: #96B7D6;"> Rp30000 </h1>
        <p style="font-size: 22px; color: #96B7D6;" class="margincontainer">50-500 gr/ ekor</p>
        <h4 class="font-weight-bold margincontainer" style="margin-top: 30px;"> Penjual : </h4>
        <img src="{{URL::asset('/images/udbarokah.png')}}" width="44%" class="margincontainer" style="margin-top: 10px">
    </div>
    <div class="col-sm-7">
        <img src="{{URL::asset('/images/kualitas.png')}}" width="90%" class="float-right">
    </div>
</div>
<div class="row d-flex justify-content-center" style="margin-top: 50px">
    <div class="col-2 divdetail text-center">
        <p>Nama Latin</p>
        <i class="fa fa-fish fa-lg" style="margin-top: 15px"></i><br><br>
        <p class="font-weight-bold" style="font-size: 18px; display:inline"> Thunnus albacares </p>
    </div>
    <div class="col-2 divdetail text-center">
        <p>Kategori Ikan</p>
        <i class="fa fa-list fa-lg" style="margin-top: 15px"></i><br><br>
        <p class="font-weight-bold" style="font-size: 18px; display:inline"> Ikan Pelagis </p>
    </div>
    <div class="col-2 divdetail text-center">
        <p>Habitat</p>
        <i class="fa fa-water fa-lg" style="margin-top: 15px"></i><br><br>
        <p class="font-weight-bold" style="font-size: 18px; display:inline"> Air Laut </p>
    </div>
    <div class="col-2 divdetail text-center">
        <p>Tipe Proses</p>
        <i class="fa fa-fish fa-lg" style="margin-top: 15px"></i><br><br>
        <p class="font-weight-bold" style="font-size: 18px; display:inline"> Whole Round </p>
    </div>
</div>
<div class="text-center">
    <h2 class="font-weight-bold" style="margin-top: 100px;"> Standar Penyimpanan </h2>
    <a style="color: black; font-size:20px" href="/">[Edit]</a>
    <div class="row d-flex justify-content-center mt-4">
        <div class="col-2 text-center">
            <img src="{{URL::asset('/images/fridge.png')}}" width="24%" style="margin-top: 15px"><br><br>
            <p style="font-size: 23px; display:inline"> Simpan dalam suhu -20 </p>
        </div>
        <div class="col-1"></div>
        <div class="col-2 text-center">
            <img src="{{URL::asset('/images/stopwatch.png')}}" width="35%" style="margin-top: 15px"><br><br>
            <p style="font-size: 23px; display:inline"> Tahan Hingga 30 Hari </p>
        </div>
    </div>
    <h2 class="font-weight-bold" style="margin-top: 100px;"> Informasi Ikan </h2>
    <div class="row d-flex justify-content-center mt-5">
        <div class="col-3 my-auto">
            <h4 class="font-weight-bold text-left"> Tekstur Daging </h4>
        </div>
        <div class="col-1"></div>
        <div class="col-1 divinformasi {{-- {{ ($title === "Home") ? 'active' : '' }} --}}">
            <h5 style="display:inline">Kenyal</h5>
        </div>
        <div class="col-1 divactive {{-- {{ ($title === "Home") ? 'active' : '' }} --}}">
            <h5 style="display:inline">Lembut</h5>
        </div>
        <div class="col-1 divinformasi {{-- {{ ($title === "Home") ? 'active' : '' }} --}}">
            <h5 style="display:inline">Padat</h5>
        </div>
    </div>
    <div class="row d-flex justify-content-center mt-4">
        <div class="col-3 my-auto">
            <h4 class="font-weight-bold text-left"> Rasa Olahan </h4>
        </div>
        <div class="col-1"></div>
        <div class="col-1 divinformasi {{-- {{ ($title === "Home") ? 'active' : '' }} --}}">
            <h5 style="display:inline">Manis</h5>
        </div>
        <div class="col-1 divactive {{-- {{ ($title === "Home") ? 'active' : '' }} --}}">
            <h5 style="display:inline">Gurih</h5>
        </div>
        <div class="col-1 divinformasi {{-- {{ ($title === "Home") ? 'active' : '' }} --}}" style="background-color:  #ece9e9">
        </div>
    </div>
    <div class="row d-flex justify-content-center mt-4">
        <div class="col-1"></div>
        <div class="col-3 my-auto">
            <h4 class="font-weight-bold text-left">  </h4>
        </div>
        <div class="col-1"></div>
        <div class="col-1 divinformasi {{-- {{ ($title === "Home") ? 'active' : '' }} --}}">
            <h5 style="display:inline">Sedikit</h5>
        </div>
        <div class="col-1 divinformasi {{-- {{ ($title === "Home") ? 'active' : '' }} --}}">
            <h5 style="display:inline">Banyak</h5>
        </div>
        <div class="col-2 divactive {{-- {{ ($title === "Home") ? 'active' : '' }} --}}">
            <h5 style="display:inline">Tidak Ada</h5>
        </div>
    </div>
    <div class="row d-flex justify-content-center mt-4">
        <div class="col-3 my-auto">
            <h4 class="font-weight-bold text-left"> Kemudahan Pengolahan </h4>
        </div>
        <div class="col-1"></div>
        <div class="col-1 divactive {{-- {{ ($title === "Home") ? 'active' : '' }} --}}">
            <h5 style="display:inline">Easy</h5>
        </div>
        <div class="col-1 divinformasi {{-- {{ ($title === "Home") ? 'active' : '' }} --}}">
            <h5 style="display:inline">Medium</h5>
        </div>
        <div class="col-1 divinformasi {{-- {{ ($title === "Home") ? 'active' : '' }} --}}">
            <h5 style="display:inline">Hard</h5>
        </div>
    </div>
    <div class="row d-flex justify-content-center mt-4">
        <div class="col-3 my-auto">
            <h4 class="font-weight-bold text-left">  </h4>
        </div>
        <div class="col-1"></div>
        <div class="col-1 divactive {{-- {{ ($title === "Home") ? 'active' : '' }} --}}">
            <h5 style="display:inline">Ya</h5>
        </div>
        <div class="col-1 divinformasi {{-- {{ ($title === "Home") ? 'active' : '' }} --}}">
            <h5 style="display:inline">Tidak</h5>
        </div>
        <div class="col-1 divinformasi {{-- {{ ($title === "Home") ? 'active' : '' }} --}}" style="background-color:  #ece9e9">
        </div>
    </div>
    <div class="row d-flex justify-content-center mt-4">
        <div class="col-3 my-auto">
            <h4 class="font-weight-bold text-left"> </h4>
        </div>
        <div class="col-1"></div>
        <div class="col-1 divinformasi {{-- {{ ($title === "Home") ? 'active' : '' }} --}}">
            <h5 style="display:inline">Ya</h5>
        </div>
        <div class="col-1 divactive {{-- {{ ($title === "Home") ? 'active' : '' }} --}}">
            <h5 style="display:inline">Tidak</h5>
        </div>
        <div class="col-1 divinformasi {{-- {{ ($title === "Home") ? 'active' : '' }} --}}" style="background-color:  #ece9e9">
        </div>
    </div>
</div>
<div class="container" style="background-color: #E6F5F8; border-radius:20px; padding: 50px; margin-top:80px">
    <div class="row">
        <div class="col-sm-7">
            <h1 class="font-weight-bold display-5 " > Manfaat Sisa-sisa dari Ikan Tuna Sirip Kuning </h1>
            <p style="font-size: 22px; margin-top:20px">Bingung cara memanfaatkan sisa ikan yang tidak dikonsumsi? Disini pengunjung bisa mengetahui fakta dari sisa ikan yang memiliki berbagai manfaat</p>
            <button class="button buttonmasuk buttonradius mt-4">Lihat Selengkapnya</button>
        </div>
        <div class="col-sm-5 my-auto">
            <img src="{{URL::asset('/images/detailproduct.png')}}" width="75%" class="float-right">
        </div>
    </div>
</div>
<h2 class="font-weight-bold text-center" style="margin-top: 100px;"> Rekomendasi Resep </h2>
{{-- <div class="row">
    <div class="col-sm-11" style="margin-left:25px">
    <div class="achievement section-padding mt-3">
          <div class="owl-carousel owl-carousels achievement-carousel">
            @foreach ($sepalopoda as $s)
            <div class="achievement-item bayangan">
                <div class="ach-1 mb-3" style="aspect-ratio: 3/2;"><img src="{{$s->url_gambar}}" alt="ach-1" style="object-fit: contain" class="w-100 h-100 card-img"></div>
                  <div class="item-text">
                    <h6>{{$s->nama_ikan}}</h6>
                    <p>{{$s->harga}}</p>
                  </div>
              </div>
            @endforeach
          </div>
    </div>
    </div>
</div> --}}
<div class="row">
    <div class="col-sm-10"></div>
    <div class="col-sm-2" style="margin-top: 15px; margin-left:-60px">
        <a href = "kualitas/listproduct" style="font-size:17px;" class="text-secondary">Lihat Selengkapnya</a>
    </div>
</div>
<h2 class="font-weight-bold text-center" style="margin-top: 100px;"> Tambah Ulasan </h2>
<div class="container mt-5">
    <span style="background-color:#1FCD10; color: white;border-radius: 5px 0px 0px 5px; padding: 5px 17px; height:34px; display:inline-block">x20</span>
    <span class="font-weight-bold" style="background-color:white; color: #253368;padding: 5px 17px;margin-left: -5px;height:34px; display:inline-block;">Mudah Pengelohaan</span>
    <span class="button font-weight-bold" onclick="/" style="background-color:#253368;color: white;border-radius: 0px 5px 5px 0px; padding: 5px 17px;margin-left: -5px;">+</span>
</div>
<div class="container mt-5">
    <span style="background-color:#1FCD10; color: white;border-radius: 5px 0px 0px 5px; padding: 5px 17px; height:34px; display:inline-block">x20</span>
    <span class="font-weight-bold" style="background-color:white; color: #253368; padding: 5px 17px;margin-left: -5px;height:34px; display:inline-block;">Tekstur Lembut</span>
    <span class="button font-weight-bold" onclick="/" style="background-color:#253368;color: white;border-radius: 0px 5px 5px 0px; padding: 5px 17px;margin-left: -5px;">+</span>
</div>
<div class="container mt-5">
    <span style="background-color:#1FCD10; color: white;border-radius: 5px 0px 0px 5px; padding: 5px 17px; height:34px; display:inline-block">x20</span>
    <span class="font-weight-bold" style="background-color:white;color: #253368; padding: 5px 17px;margin-left: -5px;height:34px; display:inline-block;">Duri Sedikit</span>
    <span class="button font-weight-bold" onclick="/" style="background-color:#253368;color: white;border-radius: 0px 5px 5px 0px; padding: 5px 17px;margin-left: -5px;">+</span>
</div>
<form>
    <div class="container">
        <p class="mt-5" style="font-size:21px">Apakah ada hal yang ingin dibagikan terkait pemanfaatan sisa atau cara pengolahan?</p>
        <div class="form-group">
            <textarea style="border: none; outline: none; font-size:12px" class="form-control" id="exampleFormControlTextarea1" rows="7"></textarea>
        </div>
        <button type="submit" class="button buttonmasuk float-right mt-2" style="width: 130px">Kirim</button>
    </div>
</form>
<div class="container" style="margin-top: 150px; margin-bottom:130px">
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
        <div class="mt-4">
            <p style="font-size:14px">Djonny</p>
            <p style="font-size:14px">16 Februari 2022</p>
            <span class="font-weight-bold" style="background-color:white;color: #253368; padding: 5px 17px;margin-left: -5px;height:34px; display:inline-block; border-radius:5px">Mudah Pengelohaan</span>
            <hr style="color = black;" class="mt-4">
            <p style="font-size:14px">Djonny</p>
            <p style="font-size:14px">16 Februari 2022</p>
            <span class="font-weight-bold" style="background-color:white;color: #253368; padding: 5px 17px;margin-left: -5px;height:34px; display:inline-block; border-radius:5px">Mudah Pengelohaan</span>
            <hr style="color = black;" class="mt-4">
        </div>
</div>

@endsection

@section('kualitasactive')
class='navbar navbar-brand active'
@endsection
