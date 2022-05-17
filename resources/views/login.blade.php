@extends("layout.loginlayout")
@section("isikonten")
<main class="form-signin">

    <form>
      <img class="mb-4" src="{{URL::asset('/images/SeekPng3.png')}}" alt="" width="72" height="57">
      <h1 class="h3 mb-3 fw-normal">Masuk</h1>

    @if(session()->has('status'))
    <div class="alert alert-success" role="alert">
    {{ session()->get('status') }}
    </div>
    @endif

      <div class="form-floating">
        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
        <label for="floatingInput">Alamat Email</label>
      </div>
      <div class="form-floating">
        <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
        <label for="floatingPassword">Kata Sandi</label>
      </div>

      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Ingat Saya
        </label>
      </div>
      <button class="w-100 btn btn-lg btn-primary mb-3" type="submit">Masuk</button>
      <small>Belum memiliki akun? <a href="/register">Daftar Sekarang</a></small>
      <p class="mt-5 mb-3 text-muted">&copy; 2021 Bisnis Digital | All Rights Reserved</p>
    </form>
  </main>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script>
</body>
</html>
@endsection

