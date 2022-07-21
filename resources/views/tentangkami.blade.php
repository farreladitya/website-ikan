@extends('layout.layout')
@section('title', 'Tentang Kami')
@section('isikonten')
<img src="{{URL::asset('/images/tentang.png')}}" width="100%">
<p style="font-size: 50px; color:black; margin-top:140px" class="carousel-caption carousel-captions"><b>Tentang Kami</b> <br></p>
<div class="row container mx-auto" style="margin-top: 80px">
    <div class="col-sm-4 text-center my-auto">
        <h3 class="font-weight-bold display-4">Misi Kami</h3>
    </div>
    <div class="col-sm-8">
        <ul class="py-3 text-justify" style="font-size: 20px">
            <li >Meningkatkan visibilitas produk produk yang ditawarkan oleh mitra badan usaha (UMKM) perikanan dengan informasi yang jelas dan komprehensif, sehingga dapat memperluas jangkauan pasar, memperoleh konsumen baru, serta meningkatkan penjualan mereka. </li>
            <li>Memfasilitasi penyebaran informasi yang komprehensif terkait produk ikan lokal yang dapat diakses oleh pelanggan kapan dan di mana saja, sehingga dapat mempermudah publik memperoleh informasi yang akurat, lengkap, dan efektif sebelum akhirnya membeli langsung ikan tersebut ke UMKM penjual.Untuk masyarakat umum: membangun kesadaran akan pentingnya mengkonsumsi ikan yang bergizi dan menginformasikan bagaimana masyarakat dapat memperoleh ikan tersebut.</li>
            <li>Membangun kesadaran akan pentingnya mengkonsumsi ikan yang bergizi dan menginformasikan bagaimana masyarakat dapat memperoleh ikan tersebut.</li>
        </ul>
    </div>
</div>
<div class="jumbotronn">
    <div class="row container mx-auto" style="margin-top: 80px;">
        <div class="col-sm-4 text-center my-auto">
            <h3 class="font-weight-bold display-4">Tim Kami</h3>
        </div>
        <div class="col-sm-8">
            <div class="row mx-2 my-4">
                <div class="col-2">
                    <img src="{{URL::asset('/images/foto1.jpg')}}" width="100%" >
                </div>
                <div class="col-2">
                    <img src="{{URL::asset('/images/foto2.jpg')}}" width="100%" >
                </div>
                <div class="col-2">
                    <img src="{{URL::asset('/images/foto3.jpg')}}" width="100%" >
                </div>
                <div class="col-2">
                    <img src="{{URL::asset('/images/foto4.jpg')}}" width="100%" >
                </div>
                <div class="col-2">
                    <img src="{{URL::asset('/images/foto5.jpg')}}" width="100%" >
                </div>
                <div class="col-2">
                    <img src="{{URL::asset('/images/foto6.jpg')}}" width="100%" >
                </div>
            </div>
            <div class="row mx-2 my-4">
                <div class="col-2">
                    <img src="{{URL::asset('/images/foto7.jpg')}}" width="100%" >
                </div>
                <div class="col-2">
                    <img src="{{URL::asset('/images/foto8.jpg')}}" width="100%" >
                </div>
                <div class="col-2">
                    <img src="{{URL::asset('/images/foto9.jpg')}}" width="100%" >
                </div>
                <div class="col-2">
                    <img src="{{URL::asset('/images/foto10.jpg')}}" width="100%" >
                </div>
                <div class="col-2">
                    <img src="{{URL::asset('/images/foto1.jpg')}}" width="100%" >
                </div>
                <div class="col-2">
                    <img src="{{URL::asset('/images/foto2.jpg')}}" width="100%" >
                </div>
            </div>
            <p class="text-center">Tim kami berasal dari mahasiswa Sistem informasi Institut Teknologi Nopember Surabaya</p>
        </div>
    </div>
</div>
<div>
    <h3 class="font-weight-bold container display-4 text-center mt-5">Sumber</h3>
    <p class="text-center mt-3" style="font-size: 20px">Kami mengkurasi data dari sumber yang kredibel yang telah dijadikan <br> patokan masyarakat dalam mencari informasi</p>
    <div class="row mx-auto" style="width: 70%">
        <div class="col-lg-4 col-md-6 col-sm-10 offset-md-0 offset-sm-1 my-3" onClick="location.href='https://nilaigizi.com/';">
            <div class="card"> <div class="container-gambar" ><img class="card-img-top w-100 h-100" style="object-fit: contain" src="{{URL::asset('/images/nilaigizi.png')}}"></div>
                <div class="card-body">
                    <p class="pt-1 text-center">Nilaigizi.com</p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-10 offset-md-0 offset-sm-1 my-3" onClick="location.href='https://hellosehat.com/';">
            <div class="card"> <div class="container-gambar" ><img class="card-img-top w-100 h-100" style="object-fit: contain" src="{{URL::asset('/images/hellosehat.png')}}"></div>
                <div class="card-body">
                    <p class="pt-1 text-center">Hellosehat.com</p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-10 offset-md-0 offset-sm-1 my-3" onClick="location.href='https://youtube.com/';">
            <div class="card"> <div class="container-gambar" ><img class="card-img-top w-100 h-100" style="object-fit: contain" src="{{URL::asset('/images/youtube.png')}}"></div>
                <div class="card-body">
                    <p class="pt-1 text-center">Youtube.com</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('tentangkamiactive')
class='navbar navbar-brand active'
@endsection
