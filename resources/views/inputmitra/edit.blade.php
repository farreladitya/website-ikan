@extends("layout.dashlayout")
@section("isikonten")
<div class="container-fluid">
    <div class="row">
      <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
        <div class="position-sticky pt-3">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="/dashboard">
                <span data-feather="home"></span>
                Dashboard
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="#">
                <span data-feather="shopping-cart"></span>
                Products
              </a>
            </li>
          </ul>
      </nav>

<main class="mt-4 col-md-9 ms-sm-auto col-lg-10 px-md-4">
  <h2>Data Produk</h2>
  <a href="/dashboard/index" class="btn btn-success mb-3">Kembali</a>

  @foreach($input_mitra_tables as $i)
  <form action="/dashboard/index/update" method="post">
    {{ csrf_field() }}
    <div class="form-group mb-3">
        <input type="hidden" class="form-control"  name="id" value="{{$i->id}}">
        </div>
        <div class="form-group mb-3">
        <label class="form-label">Ikan</label>
        @foreach ($ikan as $k)
            @if ($i->ikan == $k->ikan_id)
            <input type="text" disabled class="form-control"  name="ikan" value="{{$k->nama_ikan}}">
            @endif
        @endforeach
        </div>
        <div class="form-group mb-3">
        <label class="form-label">Harga</label>
        <input type="text"  class="form-control" name="harga" value="{{$i->harga}}">
        </div>
        <div class="form-group mb-3">
        <label class="form-label">Berat</label>
        <input type="text" class="form-control"  name="berat" value="{{$i->berat}}">
        </div>
        <div class="form-group mb-3">
        <label for="formFile" class="form-label">Gambar</label>
        <input class="form-control" type="file" id="formFile" name="gambar" value="{{$i->gambar}}">
        <img src="/gambar_ikan/{{$i->gambar}}" width="300px">
      </div>
        <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endforeach
</main>
@endsection
