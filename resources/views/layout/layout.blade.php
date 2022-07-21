<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name=”viewport” content=”width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    @section('head')
    @show
     {{-- Harga Format --}}
   <script src="~/Scripts/autoNumeric/autoNumeric.min.js" type="text/javascript"></script>
</head>
<style>
    body{
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        color: black;
        margin-top: 54px;
        background-color: #ece9e9;
        padding:0;
        overflow-x:hidden;
    }
    .navbar {
        background-color: #0a142f;
        color: white;
        display: inline-block;
        text-align: center;
        font-size: 16px;
    }
    .button{
        font-size: 16px;
        padding: 5px 25px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        border-radius: 8px;
    }
    .buttonmasuk {
        background-color: #0a142f;
        border: 2px solid white;
        color: white;
    }
    .button:hover {
        box-shadow: 0 9px 12px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
        color: white;
    }
    .buttondaftar {
        background-color: white;
        color: black;
        border: 2px solid white;
    }
    footer {
        background-color: #0a142f;
    }
    hr {
        margin-top: 1rem;
        margin-bottom: 1rem;
        border: 0;
        border-top: 1px solid;
    }
    .margincontainer {
        margin-left: 60px;
    }
    .active{
        font-weight: bold;
    }
    .bayangan{
        box-shadow: 0px 0px 9px 0px rgba(176,175,175,0.75);
        -webkit-box-shadow: 0px 0px 9px 0px rgba(176,175,175,0.75);
        -moz-box-shadow: 0px 0px 9px 0px rgba(176,175,175,0.75);
    }
    .buttonradius{
        border-radius: 35px;
    }
    [type='radio'] {
        display: none;
    }
    .center {
    width: 40%;
    padding: 10px;
    }
    .has-search .form-control {
    padding-left: 2.375rem;
    }
    .has-search .form-control-feedback {
        position: absolute;
        z-index: 2;
        display: block;
        width: 2.375rem;
        height: 2.375rem;
        line-height: 2.375rem;
        text-align: center;
        pointer-events: none;
        color: grey;
    }
    .breadcrumb{
        background-color: #ece9e9;
    }
    .breadcrumb-item + .breadcrumb-item::before {
        content: ">";
    }
    .carousel-captions {
        top: 0;
        bottom: auto;
    }
    .custom-control-label:before{
        background-color:#dcdada;
        border: 2px solid black;
    }
    .custom-checkbox .custom-control-input:checked~.custom-control-label::before{
        background-color:black;
    }
    .custom-checkbox .custom-control-input:checked~.custom-control-label::after{
        background-image:url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3E%3Cpath fill='%23dcdada' d='M6.564.75l-3.59 3.612-1.538-1.55L0 4.26 2.974 7.25 8 2.193z'/%3E%3C/svg%3E");
    }
    .card:hover {
        transform: scale(1.1);
        transition: all 0.5s ease-in-out;
        cursor: pointer;
    }
    .cards{
        box-shadow: 0px 0px 10px 0px rgba(136,136,136,0.75);
        -webkit-box-shadow: 0px 0px 10px 0px rgba(136,136,136,0.75);
        -moz-box-shadow: 0px 0px 10px 0px rgba(136,136,136,0.75);
        background-color: #eee8e8;
        border-radius: 10px;
        padding: 60px 10px 60px 10px;
    }
    .cards:hover {
        transform: scale(1.1);
        transition: all 0.5s ease-in-out;
        cursor: pointer;
    }
    .cardss:hover {
        transform: scale(1.03);
        transition: all 0.5s ease-in-out;
        cursor: pointer;
    }
    .card-body {
        padding: 0.5rem;
    }

    .card-body .description {
        font-size: 0.78rem;
        padding-bottom: 8px
    }
    .responsive-container {
	position: relative;
	padding-bottom: 420px; /* 16:9 */
	padding-top: 0px;
	height: 0;
	overflow: hidden;
    }
    .responsive-container iframe,
    .responsive-container object,
    .responsive-container embed,
    .responsive-container video
    {
        position: absolute;
        margin-left: auto;
        margin-right: auto;
        right: 0;
        text-align: center;
        top: 0;
        left: 0;
        width: 50%;
    }
    .divdetail{
    width: 100px;
    height: 206px;
    background: linear-gradient(163.31deg, #C6DADA -0.92%, rgba(255, 160, 0, 0) 194.15%);
    filter: drop-shadow(0px 4px 4px rgba(0, 0, 0, 0.25));
    border-radius: 20px;
    padding: 25px;
    padding-left: 30px;
    padding-right: 30px;
    margin: 10px;
    }
    .divinformasi{
    background: #E6F5F8;
    border-radius: 20px;
    padding: 15px;
    margin: 10px;
    }
    .divactive{
    background: #0081FE;
    border-radius: 20px;
    padding: 15px;
    margin: 10px;
    color: white
    }
    .dot {
    height: 25px;
    width: 25px;
    border-radius: 50%;
    display: inline-block;
    }
    .rectangle {
    height: 25px;
    width: 25px;
    display: inline-block;
    }
    textarea::placeholder {
    font-size: 18px;
    }
    input[type="file"] {
    display: none;
    }
    .custom-file-upload {
        display: inline-block;
        padding: 10px 0px 0px 15px;
        cursor: pointer;
    }
    .jumbotronn {
    background-color: #253368;
    color: white;
    }
</style>
</body>
<nav class="navbar navbar-expand-sm fixed-top">
    <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-7">
            <a @yield('berandaactive') class="navbar navbar-brand" href="/">Beranda</a>
            <a @yield('giziactive') class="navbar navbar-brand" href="/gizi">Gizi</a>
            <a @yield('kualitasactive') class="navbar navbar-brand" href="/kualitas">Kualitas</a>
            <a @yield('faktaactive') class="navbar navbar-brand" href="/faktaikan">Fakta</a>
            <a @yield('mitraactive') class="navbar navbar-brand" href="/mitra">Mitra</a>
            <a @yield('tentangkamiactive') class="navbar navbar-brand" href="/tentangkami">Tentang Kami</a>
        </div>

        <div class="col-sm-3">
        @auth
        <div class="dropdown">
            <button class="btn button buttonmasuk dropdown-toggle" type="button" id="dropdownnavbar" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Welcome {{ Auth::user()->name }}
            </button>
            <div class="dropdown-menu" id="navbarlogin" aria-labelledby="dropdownnavbar" style="background-color: #0a142f;  border: 2px solid white;">
                <a href="/dashboard" class="a:link a:hover"><button style="color:white" type="button" class="dropdown-item">Dashboard</button></a>
                <form action="/logout" method="POST">
                    @csrf
                <button class="dropdown-item" style="color: white; " role="button"> Logout </button>
            </form>
                {{-- @foreach ($persebaran as $p)
                <option class="dropdown-item jenis-ikan" value="{{$p->persebaran}};{{$p->url_gambar}};{{$p->nama_biasa}}" >{{$p->nama_biasa}}</option>
                @endforeach --}}
            </div>
        </div>
            {{-- <a class="nav-link dropdown-toggle button buttonmasuk" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Welcome {{ Auth::user()->name }}
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="#">Logout</a></li>
          </ul> --}}
            {{-- <a class="button buttonmasuk"> Welcome {{ Auth::user()->name }} </a>

            <form action="/logout" method="POST">
                @csrf
                <button  class="button buttonmasuk" type="submit">Logout</button>
            </form> --}}
        @else
            <a class="button buttonmasuk" href="/login">Masuk</a>
            <a class="button buttondaftar" href="/register">Daftar</a>
        @endauth
        </div>

</nav>
    <div id="main">
        @section('isikonten')
        @show
    </div>
    <div>
        <footer class="text-lg-start text-white mt-5">
            <br><br><div class="container p-4 pb-0">
            <section class="">
                <div class="row">
                    <div class="col-sm-3 mt-3">
                        <img src="">
                    </div>
                    <hr class="w-100 clearfix d-md-none" />
                    <div class="col-sm-2 mt-3">
                        <h6 class="text-uppercase mb-4 font-weight-bold">Explore</h6>
                        <p><a class="text-white">Beranda</a></p>
                        <p><a class="text-white">Gizi</a></p>
                        <p><a class="text-white">Kualitas</a></p>
                        <p><a class="text-white">Fakta</a></p>
                        <p><a class="text-white">Mitra</a></p>
                    </div>
                    <div class="col-sm-2 mt-3">
                        <h6 class="text-uppercase mb-4 font-weight-bold">Product</h6>
                        <p><a class="text-white">Sepalopoda</a></p>
                        <p><a class="text-white">Demersal</a></p>
                        <p><a class="text-white">Pelagis</a></p>
                    </div>
                    <div class="col-sm-3 mt-3">
                        <h6 class="text-uppercase mb-4 font-weight-bold">Contact Us</h6>
                        <p><i class="fas fa-phone-alt mr-3"></i>123-456-7890</p>
                        <p><i class="fas fa-envelope mr-3"></i>holaLiftmedia.com</p>
                    </div>
                    <div class="col-sm-2 mt-3">
                        <h6 class="text-uppercase mb-4 font-weight-bold">Social</h6>
                        <a class="btn-primary btn-floating" style="background-color: #0a142f"
                        href="#!" role="button"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn-primary btn-floating m-3" style="background-color: #0a142f"
                        href="#!" role="button"><i class="fab fa-instagram"></i></a>
                        <a class="btn-primary btn-floating m-1" style="background-color: #0a142f"
                        href="#!" role="button"><i class="fab fa-twitter"></i></a>
                    </div>
                </div>
            </section>
            </div>
            <div class="container text-center p-3">
                <hr/>
                <p>© 2021 Bisnis Digital | All Rights Reserved</p>
                <br>
            </div>
        </footer>
    </div>
    <script src="{{asset('js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('js/scrollIt.min.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
    <script>
        $('.owl-carousels').owlCarousel({
            autoplay:true,
            autoplayHoverPause:true,
            items:5,
            dots:true,
            loop:true,
        });
        $('.owl-carouselsss').owlCarousel({
            autoplay:true,
            autoplayHoverPause:true,
            items:8,
            dots:true,
            loop:true,
        });
        $('.owl-carouselss').owlCarousel({
            autoplay:true,
            autoplayHoverPause:true,
            items:4,
            dots:true,
            loop:true,
        });
    </script>
    <script>
    function showOffline() {
	    document.getElementById("onlineOut").style.display = "none";
        var x = document.getElementById("offlineOut");
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }
    }
    function showOnline() {
	    document.getElementById("offlineOut").style.display = "none";
        var x = document.getElementById("onlineOut");
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }
    }
    </script>
    @livewireScripts
</body>
</html>
