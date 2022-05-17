@extends("layout.registerlayout")
@section("isikonten")
<main class="form-registration justify-content-center">
    <form action="/register" method="POST">
        @csrf
      <img class="mb-4" src="{{URL::asset('/images/SeekPng3.png')}}" alt="" width="72" height="57">
      <h1 class="h3 mb-3 fw-normal">Registrasi Akun</h1>

      <div class="form-floating">
        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email">
        <label for="floatingInput">Alamat Email</label>
      </div>
      <div class="form-floating">
        <input type="text" class="form-control" id="floatingInput" placeholder="name" name="name">
        <label for="floatingInput">Nama</label>
      </div>
      <div class="form-floating">
        <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
        <label for="floatingPassword">Kata Sandi</label>
      </div>

      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Ingat Saya
        </label>
      </div>
      <button class="w-100 btn btn-lg btn-primary mb-3" type="submit">Daftar</button>
      <small>Sudah memiliki akun? <a href="/login">Masuk</a></small>
      <p class="mt-5 mb-3 text-muted">&copy; 2021 Bisnis Digital | All Rights Reserved</p>
    </form>
  </main>
@endsection
