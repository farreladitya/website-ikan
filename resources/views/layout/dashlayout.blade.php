<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Dashboard</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/dashboard/">



    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    {{-- Harga Format --}}
   <script src="~/Scripts/autoNumeric/autoNumeric.min.js" type="text/javascript"></script>
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>


    <!-- Custom styles for this template -->
    <link href="{{asset('css/dashboard.css')}}" rel="stylesheet">



  </head>
  <body>

<header class="navbar navbar-dark navbar-color sticky-top flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">Maritim Ikan</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
    <div class="navbar-nav">
        @auth
        <a class="nav-link dropdown-toggle button buttonmasuk" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        Welcome {{ Auth::user()->name }}
      </a>
      <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a href="/" class="a:link a:hover"><button type="button" class="dropdown-item">Main Menu</button></a>
        <form action="/logout" method="POST">
            @csrf
            <li><button type="submit" class="dropdown-item">Logout</button></li>
        </form>
      </ul>
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
</header>

    @section("isikonten")
    @show
                    <footer>
                    <div class="container text-center p-3">
                        <hr/>
                        <p>© 2021 Bisnis Digital | All Rights Reserved</p>
                        <br>
                    </div>
                </footer>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
                <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
                <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script>
               <script src="{{asset('css/dashboard.js')}}"></script>
          </body>
        </html>
