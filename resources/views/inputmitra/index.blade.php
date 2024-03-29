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
                <a href="/dashboard/index/tambah" class="btn btn-primary"> + Tambah Produk Baru</a>
                <div class="table-responsive">
                    @if ($input_mitra_tables->count() != 0)
                    <table class="table table-striped table-sm">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Ikan</th>
                                <th scope="col">Tipe Ikan</th>
                                <th scope="col">Harga</th>
                                <th scope="col">Berat</th>
                                <th scope="col">Satuan Berat</th>
                                <th scope="col">Gambar</th>
                                <th scope="col">Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($input_mitra_tables as $i)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $i->nama_ikan }}</td>
                                <td>{{ $i->tipeikan }}</td>
                                <td>@php
                                    echo "Rp. " . number_format($i->harga,0,",",".",);
                                    @endphp</td>
                                    @if (!$i->berat)
                                        <td>-</td>
                                        @else
                                        <td>{{ $i->berat }}</td>
                                    @endif
                                    <td>
                                        {{ $i->satuan_berat }}
                                    </td>
                                    <td><img width="150px" src="{{ url('/gambar_ikan/'.$i->gambar) }}"></td>
                                    <td>
                                        <a href="/dashboard/index/edit/{{ $i->id }}" class="btn btn-warning" >Edit</a>
                                        |
                                        <a href="/dashboard/index/hapus/{{ $i->id }}" class="btn btn-danger" >Hapus</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        @else
                        <br>
                        <h3>Belum terdapat ikan yang dijual</h3>
                        @endif
                    </div>
                </main>
                @endsection
