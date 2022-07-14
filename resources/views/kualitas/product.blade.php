@extends('layout.layout')
@section('title', 'Product')
@section('isikonten')

<div class="row">
    <div class="col-sm-5 ">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mt-1" style="margin-left: 47px">
                <li class="breadcrumb-item"><a class="text-secondary" href="/">Beranda</a></li>
                <li class="breadcrumb-item active text-dark" aria-current="page">Kualitas</li>
            </ol>
        </nav>
        <h1 class="font-weight-bold display-4 margincontainer" style="margin-top: 115px"> Cari hasil laut apa hari ini? </h1>
        <form action="/kualitas/cari" method="GET">
            <div class="row mt-4">
                <div class="col-sm-9">
                    <div class="form-group has-search center float-right" style="width: 87%">
                        <span class="fa fa-search form-control-feedback"></span>
                        <input type="text" class="form-control buttonradius" placeholder="Cari" name="cari" value="{{ old('cari') }}">
                    </div>
                </div>
                <div class="col-sm-3">
                    <button class="button buttonmasuk buttonradius" style="margin-top: 9px; margin-left:-20px" type="submit">Cari</button>
                </div>
            </div>
        </form>
    </div>
    <div class="col-sm-7">
        <img src="{{URL::asset('/images/gambarproduct.png')}}" width="85%" class="float-right">
    </div>
</div>
<div class="margincontainer">
    <div class="row" style="margin-top: 85px">
        <div class="col-sm-10">
            <h1 class="font-weight-bold" style="font-size:35px; margin-left:35px"> Ikan Sepalopoda</h1>
        </div>
        <div class="col-sm-2" style="margin-top: 15px; margin-left:-60px">
            <a href = "kualitas/listproduct" style="font-size:17px;" class="text-secondary">Lihat Selengkapnya</a>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-11" style="margin-left:25px">
            <div class="achievement section-padding mt-3">
                <div class="owl-carousel owl-carousels achievement-carousel">
                    @foreach ($sepalopoda as $s)
                    <div class="achievement-item bayangan" onclick="location.href='kualitas/product/{{$s->ikan_id}}';">
                        <div class="ach-1 mb-3" style="aspect-ratio: 3/2;"><img src="{{$s->url_gambar}}" alt="ach-1" style="object-fit: contain" class="w-100 h-100 card-img"></div>
                        <div class="pl-lg-2 item-text">
                            <h6>{{$s->nama_ikan}}</h6>
                            {{-- <p>@if ($s->harga === 0)
                                Harga Tidak Diketahui
                                @else
                                {{$s->harga}}
                                @endif</p> --}}
                            </div>
                        </div>
                    </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<div class="margincontainer">
    <div class="row" style="margin-top: 85px">
        <div class="col-sm-10">
            <h1 class="font-weight-bold" style="font-size:35px; margin-left:35px"> Ikan Demersal</h1>
        </div>
        <div class="col-sm-2" style="margin-top: 15px; margin-left:-60px">
            <a href = "kualitas/listproduct" style="font-size:17px;" class="text-secondary">Lihat Selengkapnya</a>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-11" style="margin-left:25px">
            <div class="achievement section-padding mt-3">
                <div class="owl-carousel owl-carousels achievement-carousel">
                    @foreach ($demersal as $d)
                    <div class="achievement-item bayangan" onclick="location.href='kualitas/product/{{$d->ikan_id}}';" >
                        <div class="ach-1 mb-3" style="aspect-ratio: 3/2;"><img src="{{$d->url_gambar}}" style="object-fit: contain" class="w-100 h-100 card-img" alt="ach-1"></div>
                        <div class="pl-lg-2 item-text">
                            <h6>{{$d->nama_ikan}}</h6>
                            {{-- <p>@if ($d->harga === 0)
                                Harga Tidak Diketahui
                                @else
                                {{$d->harga}}
                                @endif</p> --}}
                            </div>
                        </div>
                    </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<div class="margincontainer">
    <div class="row" style="margin-top: 85px">
        <div class="col-sm-10">
            <h1 class="font-weight-bold" style="font-size:35px; margin-left:35px"> Ikan Pelagis</h1>
        </div>
        <div class="col-sm-2" style="margin-top: 15px; margin-left:-60px">
            <a href = "kualitas/listproduct" style="font-size:17px;" class="text-secondary">Lihat Selengkapnya</a>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-11" style="margin-left:25px">
            <div class="achievement section-padding mt-3">
                <div class="owl-carousel owl-carousels achievement-carousel">
                    @foreach ($pelagis as $p)
                    <div class="achievement-item bayangan" onclick="location.href='kualitas/product/{{$p->ikan_id}}';">
                        <div class="ach-1 mb-3" style="aspect-ratio: 3/2;"><img src="{{$p->url_gambar}}" style="object-fit: contain" class="w-100 h-100 card-img" alt="ach-1"></div>
                        <div class="pl-lg-2 item-text">
                            <h6>{{$p->nama_ikan}}</h6>
                            {{-- <p>@if ($p->harga === 0)
                                Harga Tidak Diketahui
                                @else
                                {{$p->harga}}
                                @endif</p> --}}
                            </div>
                        </div>
                    </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<div class="margincontainer">
    <div class="row" style="margin-top: 85px">
        <div class="col-sm-10">
            <h1 class="font-weight-bold" style="font-size:35px; margin-left:35px"> Ikan Di Bawah 100.000/kg</h1>
        </div>
        <div class="col-sm-2" style="margin-top: 15px; margin-left:-60px">
            <a href = "kualitas/listproduct" style="font-size:17px;" class="text-secondary">Lihat Selengkapnya</a>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-11" style="margin-left:25px">
            <div class="achievement section-padding mt-3">
                <div class="owl-carousel owl-carousels achievement-carousel">
                    @foreach ($under100 as $under)
                    <div class="achievement-item bayangan" onclick="location.href='kualitas/product/{{$under->ikan_id}}';">
                        <div class="ach-1 mb-3" style="aspect-ratio: 3/2;"><img src="{{$under->url_gambar}}" style="object-fit: contain" class="w-100 h-100 card-img" alt="ach-1"></div>
                        <div class="pl-lg-2 item-text">
                            <h6>{{$under->nama_ikan}}</h6>
                            {{-- <p>@if ($under->harga === 0)
                                Harga Tidak Diketahui
                                @else
                                {{$under->harga}}
                                @endif</p> --}}
                            </div>
                        </div>
                    </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<div class="margincontainer">
    <div class="row" style="margin-top: 85px">
        <div class="col-sm-10">
            <h1 class="font-weight-bold" style="font-size:35px; margin-left:35px"> Ikan Di Atas 100.000/kg</h1>
        </div>
        <div class="col-sm-2" style="margin-top: 15px; margin-left:-60px">
            <a href = "kualitas/listproduct" style="font-size:17px;" class="text-secondary">Lihat Selengkapnya</a>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-11" style="margin-left:25px">
            <div class="achievement section-padding mt-3">
                <div class="owl-carousel owl-carousels achievement-carousel">
                    @foreach ($upper100 as $upper)
                    <div class="achievement-item bayangan" onclick="location.href='kualitas/product/{{$upper->ikan_id}}';">
                        <div class="ach-1 mb-3" style="aspect-ratio: 3/2;"><img src="{{$upper->url_gambar}}" style="object-fit: contain" class="w-100 h-100 card-img" alt="ach-1"></div>
                        <div class="pl-lg-2 item-text">
                            <h6>{{$upper->nama_ikan}}</h6>
                            {{-- <p>@if ($upper->harga === 0)
                                Harga Tidak Diketahui
                                @else
                                {{$upper->harga}}
                                @endif</p> --}}
                            </div>
                        </div>
                    </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('kualitasactive')
class='navbar navbar-brand active'
@endsection
