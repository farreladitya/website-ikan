<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
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
}
</style>
</body>
<nav class="navbar navbar-expand-sm fixed-top">
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
            <a @yield('berandaactive') class="navbar navbar-brand" href="/">Beranda</a>
            <a @yield('productactive') class="navbar navbar-brand" href="/gizi">Gizi</a>
            <a class="navbar navbar-brand" href="#">Kualitas</a>
            <a class="navbar navbar-brand" href="#">Fakta</a>
            <a class="navbar navbar-brand" href="#">Mitra</a>
        </div>
        <div class="col-3">
            <button class="button buttonmasuk">Masuk</button>
            <button class="button buttondaftar">Daftar</button>
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
                    <div class="col-md-3 mt-3">
                        <img src="">
                    </div>
                    <hr class="w-100 clearfix d-md-none" />
                    <div class="col-md-2 mt-3">
                        <h6 class="text-uppercase mb-4 font-weight-bold">Explore</h6>
                        <p><a class="text-white">Beranda</a></p>
                        <p><a class="text-white">Gizi</a></p>
                        <p><a class="text-white">Kualitas</a></p>
                        <p><a class="text-white">Fakta</a></p>
                        <p><a class="text-white">Mitra</a></p>
                    </div>
                    <hr class="w-100 clearfix d-md-none" />
                    <hr class="w-100 clearfix d-md-none" />
                    <div class="col-md-2 mt-3">
                        <h6 class="text-uppercase mb-4 font-weight-bold">Product</h6>
                        <p><a class="text-white">Sepalopoda</a></p>
                        <p><a class="text-white">Demersal</a></p>
                        <p><a class="text-white">Pelagis</a></p>
                    </div>
                    <div class="col-md-3 mt-3">
                        <h6 class="text-uppercase mb-4 font-weight-bold">Contact Us</h6>
                        <p><i class="fas fa-phone-alt mr-3"></i>123-456-7890</p>
                        <p><i class="fas fa-envelope mr-3"></i>holaLiftmedia.com</p>
                    </div>
                    <div class="col-md-2 mt-3">
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
</body>
</html>
