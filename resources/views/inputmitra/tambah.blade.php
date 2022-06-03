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

  <form action="/dashboard/index/store" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="form-group mb-3">
        <label class="form-label">Nama</label>
        <input type="text" class="form-control"  name="nama" required="required">
        </div>
        <div class="form-group mb-3">
        <label class="form-label">Ikan</label>
        <select class="form-control" name="ikan" required="required">
          <option value="">--Pilih Ikan--</option>
          @foreach ($ikan as $i)
        <option value="{{$i->ikan_id}}">{{$i->nama_biasa}}</option>
        @endforeach
        </select>
      </div>
      <div class="form-group mb-3">
        <label class="form-label">Tipe Ikan</label>
        <select class="form-control" name="tipe_ikan" required="required">
          <option value="">--Pilih Tipe Ikan--</option>
          <option value="">Fresh</option>
          <option value="">Frozen</option>
        </select>
      </div>
        <div class="form-group mb-3">
        <label class="form-label">Harga</label>
        <input type="text"  class="form-control" name="harga" required="required">
        </div>
        <div class="form-group mb-3">
        <label class="form-label">Berat</label>
        <input type="text" class="form-control"  name="berat" required="required">
        </div>
        <div class="mb-3">
        <label for="formFile" class="form-label">Gambar</label>
        <input class="form-control" type="file" id="formFile" name="gambar" required="required">
      </div>
        <button type="submit" class="btn btn-primary">Submit</button>
</form>
</main>
@endsection
