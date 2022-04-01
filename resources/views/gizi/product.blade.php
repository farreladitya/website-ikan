@extends('layout.layout')
@section('title', 'Product')
@section('isikonten')

<div class="row">
    <div class="col-5 ">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mt-1" style="margin-left: 47px">
              <li class="breadcrumb-item"><a class="text-secondary" href="/">Beranda</a></li>
              <li class="breadcrumb-item active text-dark" aria-current="page">Gizi</li>
            </ol>
        </nav>
        <h1 class="font-weight-bold display-4 margincontainer" style="margin-top: 115px"> Cari hasil laut apa hari ini? </h1>
        <div class="row mt-4">
            <div class="col-9">
                <div class="form-group has-search center float-right" style="width: 87%">
                    <span class="fa fa-search form-control-feedback"></span>
                    <input type="text" class="form-control buttonradius" placeholder="Cari">
                </div>
            </div>
            <div class="col-3">
                    <button class="button buttonmasuk buttonradius" style="margin-top: 9px; margin-left:-20px">Cari</button>
            </div>
        </div>
    </div>
    <div class="col-7">
        <img src="{{URL::asset('/images/gambarproduct.png')}}" width="85%" class="float-right">
    </div>
</div>
<div class="margincontainer">
    <div class="row" style="margin-top: 85px">
        <div class="col-10">
            <h1 class="font-weight-bold" style="font-size:35px; margin-left:35px"> Ikan Sepalopoda</h1>
        </div>
        <div class="col-2" style="margin-top: 15px; margin-left:-60px">
            <a href = "/listgiziproduct" style="font-size:17px;" class="text-secondary">Lihat Selengkapnya</a>
        </div>
    </div>
    <div class="row">
        <div class="col-11" style="margin-left:25px">
        <div class="achievement section-padding mt-3">
              <div class="owl-carousel owl-carousels achievement-carousel">
                <div class="achievement-item bayangan">
                  <div class="ach-1 mb-3"><img src="https://imgsrv2.voi.id/eu28c9uuwn_dWbgDPsFBhZ_Yv0VeVW46xtJYlXL8osI/auto/1200/675/sm/1/bG9jYWw6Ly8vcHVibGlzaGVycy8zNjYyOC8yMDIxMDMwMjE5MDItbWFpbi5jcm9wcGVkXzE2MTQ3MDk4ODcuanBn.jpg" alt="ach-1"></div>
                    <div class="item-text">
                      <h6>Ikan Lele</h6>
                      <p>15.000</p>
                    </div>
                </div>
                <div class="achievement-item bayangan">
                  <div class="ach-1 mb-3"><img src="https://imgsrv2.voi.id/eu28c9uuwn_dWbgDPsFBhZ_Yv0VeVW46xtJYlXL8osI/auto/1200/675/sm/1/bG9jYWw6Ly8vcHVibGlzaGVycy8zNjYyOC8yMDIxMDMwMjE5MDItbWFpbi5jcm9wcGVkXzE2MTQ3MDk4ODcuanBn.jpg" alt="ach-1"></div>
                    <div class="item-text">
                      <h6>Ikan Bandeng</h6>
                      <p>15.000</p>
                    </div>
                </div>
                <div class="achievement-item bayangan">
                  <div class="ach-1 mb-3"><img src="https://imgsrv2.voi.id/eu28c9uuwn_dWbgDPsFBhZ_Yv0VeVW46xtJYlXL8osI/auto/1200/675/sm/1/bG9jYWw6Ly8vcHVibGlzaGVycy8zNjYyOC8yMDIxMDMwMjE5MDItbWFpbi5jcm9wcGVkXzE2MTQ3MDk4ODcuanBn.jpg" alt="ach-1"></div>
                    <div class="item-text">
                      <h6>Ikan Mas</h6>
                      <p>15.000</p>
                    </div>
                </div>
                <div class="achievement-item bayangan">
                  <div class="ach-1 mb-3"><img src="https://imgsrv2.voi.id/eu28c9uuwn_dWbgDPsFBhZ_Yv0VeVW46xtJYlXL8osI/auto/1200/675/sm/1/bG9jYWw6Ly8vcHVibGlzaGVycy8zNjYyOC8yMDIxMDMwMjE5MDItbWFpbi5jcm9wcGVkXzE2MTQ3MDk4ODcuanBn.jpg" alt="ach-1"></div>
                    <div class="item-text">
                      <h6>Ikan Mujair</h6>
                      <p>15.000</p>
                    </div>
                </div>
                <div class="achievement-item bayangan">
                    <div class="ach-1 mb-3"><img src="https://imgsrv2.voi.id/eu28c9uuwn_dWbgDPsFBhZ_Yv0VeVW46xtJYlXL8osI/auto/1200/675/sm/1/bG9jYWw6Ly8vcHVibGlzaGVycy8zNjYyOC8yMDIxMDMwMjE5MDItbWFpbi5jcm9wcGVkXzE2MTQ3MDk4ODcuanBn.jpg" alt="ach-1"></div>
                      <div class="item-text">
                        <h6>Ikan Nila</h6>
                        <p>15.000</p>
                      </div>
                </div>
                <div class="achievement-item bayangan">
                    <div class="ach-1 mb-3"><img src="https://imgsrv2.voi.id/eu28c9uuwn_dWbgDPsFBhZ_Yv0VeVW46xtJYlXL8osI/auto/1200/675/sm/1/bG9jYWw6Ly8vcHVibGlzaGVycy8zNjYyOC8yMDIxMDMwMjE5MDItbWFpbi5jcm9wcGVkXzE2MTQ3MDk4ODcuanBn.jpg" alt="ach-1"></div>
                      <div class="item-text">
                        <h6>Ikan Pari</h6>
                        <p>15.000</p>
                      </div>
                </div>
              </div>
        </div>
        </div>
    </div>
</div>
<div class="margincontainer">
    <div class="row" style="margin-top: 85px">
        <div class="col-10">
            <h1 class="font-weight-bold" style="font-size:35px; margin-left:35px"> Ikan Demersal</h1>
        </div>
        <div class="col-2" style="margin-top: 15px; margin-left:-60px">
            <a href = "#" style="font-size:17px;" class="text-secondary">Lihat Selengkapnya</a>
        </div>
    </div>
    <div class="row">
        <div class="col-11" style="margin-left:25px">
        <div class="achievement section-padding mt-3">
              <div class="owl-carousel owl-carousels achievement-carousel">
                <div class="achievement-item bayangan">
                  <div class="ach-1 mb-3"><img src="https://imgsrv2.voi.id/eu28c9uuwn_dWbgDPsFBhZ_Yv0VeVW46xtJYlXL8osI/auto/1200/675/sm/1/bG9jYWw6Ly8vcHVibGlzaGVycy8zNjYyOC8yMDIxMDMwMjE5MDItbWFpbi5jcm9wcGVkXzE2MTQ3MDk4ODcuanBn.jpg" alt="ach-1"></div>
                    <div class="item-text">
                      <h6>Ikan Lele</h6>
                      <p>15.000</p>
                    </div>
                </div>
                <div class="achievement-item bayangan">
                  <div class="ach-1 mb-3"><img src="https://imgsrv2.voi.id/eu28c9uuwn_dWbgDPsFBhZ_Yv0VeVW46xtJYlXL8osI/auto/1200/675/sm/1/bG9jYWw6Ly8vcHVibGlzaGVycy8zNjYyOC8yMDIxMDMwMjE5MDItbWFpbi5jcm9wcGVkXzE2MTQ3MDk4ODcuanBn.jpg" alt="ach-1"></div>
                    <div class="item-text">
                      <h6>Ikan Bandeng</h6>
                      <p>15.000</p>
                    </div>
                </div>
                <div class="achievement-item bayangan">
                  <div class="ach-1 mb-3"><img src="https://imgsrv2.voi.id/eu28c9uuwn_dWbgDPsFBhZ_Yv0VeVW46xtJYlXL8osI/auto/1200/675/sm/1/bG9jYWw6Ly8vcHVibGlzaGVycy8zNjYyOC8yMDIxMDMwMjE5MDItbWFpbi5jcm9wcGVkXzE2MTQ3MDk4ODcuanBn.jpg" alt="ach-1"></div>
                    <div class="item-text">
                      <h6>Ikan Mas</h6>
                      <p>15.000</p>
                    </div>
                </div>
                <div class="achievement-item bayangan">
                  <div class="ach-1 mb-3"><img src="https://imgsrv2.voi.id/eu28c9uuwn_dWbgDPsFBhZ_Yv0VeVW46xtJYlXL8osI/auto/1200/675/sm/1/bG9jYWw6Ly8vcHVibGlzaGVycy8zNjYyOC8yMDIxMDMwMjE5MDItbWFpbi5jcm9wcGVkXzE2MTQ3MDk4ODcuanBn.jpg" alt="ach-1"></div>
                    <div class="item-text">
                      <h6>Ikan Mujair</h6>
                      <p>15.000</p>
                    </div>
                </div>
                <div class="achievement-item bayangan">
                    <div class="ach-1 mb-3"><img src="https://imgsrv2.voi.id/eu28c9uuwn_dWbgDPsFBhZ_Yv0VeVW46xtJYlXL8osI/auto/1200/675/sm/1/bG9jYWw6Ly8vcHVibGlzaGVycy8zNjYyOC8yMDIxMDMwMjE5MDItbWFpbi5jcm9wcGVkXzE2MTQ3MDk4ODcuanBn.jpg" alt="ach-1"></div>
                      <div class="item-text">
                        <h6>Ikan Nila</h6>
                        <p>15.000</p>
                      </div>
                </div>
                <div class="achievement-item bayangan">
                    <div class="ach-1 mb-3"><img src="https://imgsrv2.voi.id/eu28c9uuwn_dWbgDPsFBhZ_Yv0VeVW46xtJYlXL8osI/auto/1200/675/sm/1/bG9jYWw6Ly8vcHVibGlzaGVycy8zNjYyOC8yMDIxMDMwMjE5MDItbWFpbi5jcm9wcGVkXzE2MTQ3MDk4ODcuanBn.jpg" alt="ach-1"></div>
                      <div class="item-text">
                        <h6>Ikan Pari</h6>
                        <p>15.000</p>
                      </div>
                </div>
              </div>
        </div>
        </div>
    </div>
</div>
<div class="margincontainer">
    <div class="row" style="margin-top: 85px">
        <div class="col-10">
            <h1 class="font-weight-bold" style="font-size:35px; margin-left:35px"> Ikan Pelagis</h1>
        </div>
        <div class="col-2" style="margin-top: 15px; margin-left:-60px">
            <a href = "#" style="font-size:17px;" class="text-secondary">Lihat Selengkapnya</a>
        </div>
    </div>
    <div class="row">
        <div class="col-11" style="margin-left:25px">
        <div class="achievement section-padding mt-3">
              <div class="owl-carousel owl-carousels achievement-carousel">
                <div class="achievement-item bayangan">
                  <div class="ach-1 mb-3"><img src="https://imgsrv2.voi.id/eu28c9uuwn_dWbgDPsFBhZ_Yv0VeVW46xtJYlXL8osI/auto/1200/675/sm/1/bG9jYWw6Ly8vcHVibGlzaGVycy8zNjYyOC8yMDIxMDMwMjE5MDItbWFpbi5jcm9wcGVkXzE2MTQ3MDk4ODcuanBn.jpg" alt="ach-1"></div>
                    <div class="item-text">
                      <h6>Ikan Lele</h6>
                      <p>15.000</p>
                    </div>
                </div>
                <div class="achievement-item bayangan">
                  <div class="ach-1 mb-3"><img src="https://imgsrv2.voi.id/eu28c9uuwn_dWbgDPsFBhZ_Yv0VeVW46xtJYlXL8osI/auto/1200/675/sm/1/bG9jYWw6Ly8vcHVibGlzaGVycy8zNjYyOC8yMDIxMDMwMjE5MDItbWFpbi5jcm9wcGVkXzE2MTQ3MDk4ODcuanBn.jpg" alt="ach-1"></div>
                    <div class="item-text">
                      <h6>Ikan Bandeng</h6>
                      <p>15.000</p>
                    </div>
                </div>
                <div class="achievement-item bayangan">
                  <div class="ach-1 mb-3"><img src="https://imgsrv2.voi.id/eu28c9uuwn_dWbgDPsFBhZ_Yv0VeVW46xtJYlXL8osI/auto/1200/675/sm/1/bG9jYWw6Ly8vcHVibGlzaGVycy8zNjYyOC8yMDIxMDMwMjE5MDItbWFpbi5jcm9wcGVkXzE2MTQ3MDk4ODcuanBn.jpg" alt="ach-1"></div>
                    <div class="item-text">
                      <h6>Ikan Mas</h6>
                      <p>15.000</p>
                    </div>
                </div>
                <div class="achievement-item bayangan">
                  <div class="ach-1 mb-3"><img src="https://imgsrv2.voi.id/eu28c9uuwn_dWbgDPsFBhZ_Yv0VeVW46xtJYlXL8osI/auto/1200/675/sm/1/bG9jYWw6Ly8vcHVibGlzaGVycy8zNjYyOC8yMDIxMDMwMjE5MDItbWFpbi5jcm9wcGVkXzE2MTQ3MDk4ODcuanBn.jpg" alt="ach-1"></div>
                    <div class="item-text">
                      <h6>Ikan Mujair</h6>
                      <p>15.000</p>
                    </div>
                </div>
                <div class="achievement-item bayangan">
                    <div class="ach-1 mb-3"><img src="https://imgsrv2.voi.id/eu28c9uuwn_dWbgDPsFBhZ_Yv0VeVW46xtJYlXL8osI/auto/1200/675/sm/1/bG9jYWw6Ly8vcHVibGlzaGVycy8zNjYyOC8yMDIxMDMwMjE5MDItbWFpbi5jcm9wcGVkXzE2MTQ3MDk4ODcuanBn.jpg" alt="ach-1"></div>
                      <div class="item-text">
                        <h6>Ikan Nila</h6>
                        <p>15.000</p>
                      </div>
                </div>
                <div class="achievement-item bayangan">
                    <div class="ach-1 mb-3"><img src="https://imgsrv2.voi.id/eu28c9uuwn_dWbgDPsFBhZ_Yv0VeVW46xtJYlXL8osI/auto/1200/675/sm/1/bG9jYWw6Ly8vcHVibGlzaGVycy8zNjYyOC8yMDIxMDMwMjE5MDItbWFpbi5jcm9wcGVkXzE2MTQ3MDk4ODcuanBn.jpg" alt="ach-1"></div>
                      <div class="item-text">
                        <h6>Ikan Pari</h6>
                        <p>15.000</p>
                      </div>
                </div>
              </div>
        </div>
        </div>
    </div>
</div>
<div class="margincontainer">
    <div class="row" style="margin-top: 85px">
        <div class="col-10">
            <h1 class="font-weight-bold" style="font-size:35px; margin-left:35px"> Ikan Di Bawah 100.000/kg</h1>
        </div>
        <div class="col-2" style="margin-top: 15px; margin-left:-60px">
            <a href = "#" style="font-size:17px;" class="text-secondary">Lihat Selengkapnya</a>
        </div>
    </div>
    <div class="row">
        <div class="col-11" style="margin-left:25px">
        <div class="achievement section-padding mt-3">
              <div class="owl-carousel owl-carousels achievement-carousel">
                <div class="achievement-item bayangan">
                  <div class="ach-1 mb-3"><img src="https://imgsrv2.voi.id/eu28c9uuwn_dWbgDPsFBhZ_Yv0VeVW46xtJYlXL8osI/auto/1200/675/sm/1/bG9jYWw6Ly8vcHVibGlzaGVycy8zNjYyOC8yMDIxMDMwMjE5MDItbWFpbi5jcm9wcGVkXzE2MTQ3MDk4ODcuanBn.jpg" alt="ach-1"></div>
                    <div class="item-text">
                      <h6>Ikan Lele</h6>
                      <p>15.000</p>
                    </div>
                </div>
                <div class="achievement-item bayangan">
                  <div class="ach-1 mb-3"><img src="https://imgsrv2.voi.id/eu28c9uuwn_dWbgDPsFBhZ_Yv0VeVW46xtJYlXL8osI/auto/1200/675/sm/1/bG9jYWw6Ly8vcHVibGlzaGVycy8zNjYyOC8yMDIxMDMwMjE5MDItbWFpbi5jcm9wcGVkXzE2MTQ3MDk4ODcuanBn.jpg" alt="ach-1"></div>
                    <div class="item-text">
                      <h6>Ikan Bandeng</h6>
                      <p>15.000</p>
                    </div>
                </div>
                <div class="achievement-item bayangan">
                  <div class="ach-1 mb-3"><img src="https://imgsrv2.voi.id/eu28c9uuwn_dWbgDPsFBhZ_Yv0VeVW46xtJYlXL8osI/auto/1200/675/sm/1/bG9jYWw6Ly8vcHVibGlzaGVycy8zNjYyOC8yMDIxMDMwMjE5MDItbWFpbi5jcm9wcGVkXzE2MTQ3MDk4ODcuanBn.jpg" alt="ach-1"></div>
                    <div class="item-text">
                      <h6>Ikan Mas</h6>
                      <p>15.000</p>
                    </div>
                </div>
                <div class="achievement-item bayangan">
                  <div class="ach-1 mb-3"><img src="https://imgsrv2.voi.id/eu28c9uuwn_dWbgDPsFBhZ_Yv0VeVW46xtJYlXL8osI/auto/1200/675/sm/1/bG9jYWw6Ly8vcHVibGlzaGVycy8zNjYyOC8yMDIxMDMwMjE5MDItbWFpbi5jcm9wcGVkXzE2MTQ3MDk4ODcuanBn.jpg" alt="ach-1"></div>
                    <div class="item-text">
                      <h6>Ikan Mujair</h6>
                      <p>15.000</p>
                    </div>
                </div>
                <div class="achievement-item bayangan">
                    <div class="ach-1 mb-3"><img src="https://imgsrv2.voi.id/eu28c9uuwn_dWbgDPsFBhZ_Yv0VeVW46xtJYlXL8osI/auto/1200/675/sm/1/bG9jYWw6Ly8vcHVibGlzaGVycy8zNjYyOC8yMDIxMDMwMjE5MDItbWFpbi5jcm9wcGVkXzE2MTQ3MDk4ODcuanBn.jpg" alt="ach-1"></div>
                      <div class="item-text">
                        <h6>Ikan Nila</h6>
                        <p>15.000</p>
                      </div>
                </div>
                <div class="achievement-item bayangan">
                    <div class="ach-1 mb-3"><img src="https://imgsrv2.voi.id/eu28c9uuwn_dWbgDPsFBhZ_Yv0VeVW46xtJYlXL8osI/auto/1200/675/sm/1/bG9jYWw6Ly8vcHVibGlzaGVycy8zNjYyOC8yMDIxMDMwMjE5MDItbWFpbi5jcm9wcGVkXzE2MTQ3MDk4ODcuanBn.jpg" alt="ach-1"></div>
                      <div class="item-text">
                        <h6>Ikan Pari</h6>
                        <p>15.000</p>
                      </div>
                </div>
              </div>
        </div>
        </div>
    </div>
</div>
<div class="margincontainer">
    <div class="row" style="margin-top: 85px">
        <div class="col-10">
            <h1 class="font-weight-bold" style="font-size:35px; margin-left:35px"> Ikan Di Atas 100.000/kg</h1>
        </div>
        <div class="col-2" style="margin-top: 15px; margin-left:-60px">
            <a href = "#" style="font-size:17px;" class="text-secondary">Lihat Selengkapnya</a>
        </div>
    </div>
    <div class="row">
        <div class="col-11" style="margin-left:25px">
        <div class="achievement section-padding mt-3">
              <div class="owl-carousel owl-carousels achievement-carousel">
                <div class="achievement-item bayangan">
                  <div class="ach-1 mb-3"><img src="https://imgsrv2.voi.id/eu28c9uuwn_dWbgDPsFBhZ_Yv0VeVW46xtJYlXL8osI/auto/1200/675/sm/1/bG9jYWw6Ly8vcHVibGlzaGVycy8zNjYyOC8yMDIxMDMwMjE5MDItbWFpbi5jcm9wcGVkXzE2MTQ3MDk4ODcuanBn.jpg" alt="ach-1"></div>
                    <div class="item-text">
                      <h6>Ikan Lele</h6>
                      <p>15.000</p>
                    </div>
                </div>
                <div class="achievement-item bayangan">
                  <div class="ach-1 mb-3"><img src="https://imgsrv2.voi.id/eu28c9uuwn_dWbgDPsFBhZ_Yv0VeVW46xtJYlXL8osI/auto/1200/675/sm/1/bG9jYWw6Ly8vcHVibGlzaGVycy8zNjYyOC8yMDIxMDMwMjE5MDItbWFpbi5jcm9wcGVkXzE2MTQ3MDk4ODcuanBn.jpg" alt="ach-1"></div>
                    <div class="item-text">
                      <h6>Ikan Bandeng</h6>
                      <p>15.000</p>
                    </div>
                </div>
                <div class="achievement-item bayangan">
                  <div class="ach-1 mb-3"><img src="https://imgsrv2.voi.id/eu28c9uuwn_dWbgDPsFBhZ_Yv0VeVW46xtJYlXL8osI/auto/1200/675/sm/1/bG9jYWw6Ly8vcHVibGlzaGVycy8zNjYyOC8yMDIxMDMwMjE5MDItbWFpbi5jcm9wcGVkXzE2MTQ3MDk4ODcuanBn.jpg" alt="ach-1"></div>
                    <div class="item-text">
                      <h6>Ikan Mas</h6>
                      <p>15.000</p>
                    </div>
                </div>
                <div class="achievement-item bayangan">
                  <div class="ach-1 mb-3"><img src="https://imgsrv2.voi.id/eu28c9uuwn_dWbgDPsFBhZ_Yv0VeVW46xtJYlXL8osI/auto/1200/675/sm/1/bG9jYWw6Ly8vcHVibGlzaGVycy8zNjYyOC8yMDIxMDMwMjE5MDItbWFpbi5jcm9wcGVkXzE2MTQ3MDk4ODcuanBn.jpg" alt="ach-1"></div>
                    <div class="item-text">
                      <h6>Ikan Mujair</h6>
                      <p>15.000</p>
                    </div>
                </div>
                <div class="achievement-item bayangan">
                    <div class="ach-1 mb-3"><img src="https://imgsrv2.voi.id/eu28c9uuwn_dWbgDPsFBhZ_Yv0VeVW46xtJYlXL8osI/auto/1200/675/sm/1/bG9jYWw6Ly8vcHVibGlzaGVycy8zNjYyOC8yMDIxMDMwMjE5MDItbWFpbi5jcm9wcGVkXzE2MTQ3MDk4ODcuanBn.jpg" alt="ach-1"></div>
                      <div class="item-text">
                        <h6>Ikan Nila</h6>
                        <p>15.000</p>
                      </div>
                </div>
                <div class="achievement-item bayangan">
                    <div class="ach-1 mb-3"><img src="https://imgsrv2.voi.id/eu28c9uuwn_dWbgDPsFBhZ_Yv0VeVW46xtJYlXL8osI/auto/1200/675/sm/1/bG9jYWw6Ly8vcHVibGlzaGVycy8zNjYyOC8yMDIxMDMwMjE5MDItbWFpbi5jcm9wcGVkXzE2MTQ3MDk4ODcuanBn.jpg" alt="ach-1"></div>
                      <div class="item-text">
                        <h6>Ikan Pari</h6>
                        <p>15.000</p>
                      </div>
                </div>
              </div>
        </div>
        </div>
    </div>
</div>
@endsection

@section('giziactive')
class='navbar navbar-brand active'
@endsection
