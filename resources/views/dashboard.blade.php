@extends("layout.dashlayout")
@section("isikonten")

<div class="container-fluid">
    <div class="row">
      <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
        <div class="position-sticky pt-3">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="/dashboard">
                <span data-feather="home"></span>
                Dashboard
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/dashboard/index">
                <span data-feather="shopping-cart"></span>
                Products
              </a>
            </li>
          </ul>
      </nav>
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="row">
            <div class="col-sm-5">
                <h1 class="headline"> Welcome to Dashboard </h1>
            </div>
            <div class="col-sm-7">
                <img src="{{URL::asset('/images/gambarberanda.png')}}" width="700px" class="float-right">
            </div>
        </div>
      </div>
    </main>
  </div>
</div>
@endsection
