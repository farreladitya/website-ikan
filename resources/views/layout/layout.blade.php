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
        border-top: 1px solid white;
    }
    .margincontainer {
        margin-left: 60px;
    }
    .achievement {
    border-radius: 0 0 200px 0;
    }
    .section-padding {
    padding: 80px 0;
    }
    .section-title {
    margin-bottom: 60px;
    }
    .section-title img {
    object-position: 0 30px;
    }
    .section-title h1 {
    text-align: center;
    }
    .section-title h1 span {
    color: var(--main-color);
    }

    .owl-carousel .owl-dots {
    padding: 0 15px;
    text-align: center;
    }
    .owl-carousel button.owl-dot {
    height: 6px;
    width: 24px;
    background-color: #dddddd;
    display: inline-block;
    margin: 0 4px;
    border-radius: 5px;
    }
    .owl-carousel button.owl-dot.active {
    background-color: var(--main-color);
    }
    .achievement .achievement-item {
    box-shadow: var(--shadow-black-300);
    margin: 15px;
    padding: 50px;
    border-radius: 10px;
    text-align: justify;
    height: 450px;
    position: relative;
    z-index: 1;
    overflow: hidden;
    }
    .achievement .achievement-item::before,
    .achievement .achievement-item::after {
    content: '';
    position: absolute;
    z-index: -1;
    border-radius: 50%;
    transition: all 0.5s ease;
    opacity: 0;
    }
    .achievement .achievement-item::before {
    height: 20px;
    width: 20px;
    background-color: var(--main-color);
    left: -30px;
    top: 10%;
    }
    .achievement .achievement-item:hover::before {
    left: 5%;
    opacity: 1;
    }
    .achievement .achievement-item::after {
    height: 30px;
    width: 30px;
    background-color: var(--color-2);
    right: -30%;
    bottom: 10%;
    }
    .achievement .achievement-item:hover::after {
    opacity: 1;
    right: 10px;
    }
</style>
</body>
<nav class="navbar navbar-expand-sm fixed-top">
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
            <a class="navbar navbar-brand" href="/beranda">Beranda</a>
            <a class="navbar navbar-brand" href="#">Produk</a>
            <a class="navbar navbar-brand" href="#">Resep</a>
            <a class="navbar navbar-brand" href="#">Manfaat</a>
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
                        <p><a class="text-white">Produk</a></p>
                        <p><a class="text-white">Resep</a></p>
                        <p><a class="text-white">Manfaat</a></p>
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
</body>
</html>
