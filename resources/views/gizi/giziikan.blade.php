@extends('layout.layout')
@section('title', 'Gizi Ikan')
@section('isikonten')
<div class="row">
    <div class="col-sm-5 ">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mt-1" style="margin-left: 47px">
              <li class="breadcrumb-item"><a class="text-secondary" href="/">Beranda</a></li>
              <li class="breadcrumb-item active text-dark" aria-current="page">Gizi</li>
            </ol>
        </nav>
        @foreach ($ikan as $i)
        <h1 class="font-weight-bold display-4 margincontainer" style="margin-top: 115px"> Cek gizi Ikan {{$i->nama_ikan}} </h1>
        @endforeach
        <div class="row mt-4">
            <div class="col-sm-12">
                <div class="container ml-lg-5 font-weight-normal">
                    <p>
                        Peta gizi membantu <br> pengunjung untuk <br> mengetahui lebih detail <br> manfaat dan efek samping dari ikan
                    </p>
                    @foreach ($ikan as $i)
                    <a href = "/gizi/product/detail/{{$i->ikan_id}}" style="font-size:17px;" class="text-secondary">Lihat Selengkapnya</a>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-7">
        <img src="{{URL::asset('/images/gambarproduct.png')}}" width="85%" class="float-right">
    </div>
</div>

@endsection
