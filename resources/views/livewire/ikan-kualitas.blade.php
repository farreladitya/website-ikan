<div>
    <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-2" style="background-color: #dcdada; border-radius: 25px; padding: 30px; font-size:14px">
            <div>
                <h4 class="font-weight-bold">Filter</h4>
            </div>
            <div>
                <p class="font-weight-bold" style="margin-top: 20px; font-size:16px">Kategori</p>
                <form>
                    <div class="form-check mt-1 custom-control custom-checkbox">
                        <input class="form-check-input custom-control-input" type="checkbox" value="Cephalopod" id="defaultCheck1" wire:model="kategori">
                        <label class="form-check-label custom-control-label" for="defaultCheck1">
                          Sepalopoda
                        </label>
                    </div>
                    <div class="form-check mt-1 custom-control custom-checkbox">
                        <input class="form-check-input custom-control-input" type="checkbox" value="Pelagic" id="defaultCheck2" wire:model="kategori">
                        <label class="form-check-label custom-control-label" for="defaultCheck2">
                          Ikan Pelagis
                    </div>
                    <div class="form-check mt-1 custom-control custom-checkbox">
                        <input class="form-check-input custom-control-input" type="checkbox" value="Demersal" id="defaultCheck3" wire:model="kategori">
                        <label class="form-check-label custom-control-label" for="defaultCheck3">
                          Ikan Demersal
                    </div>
                </form>
            </div>
            <div class="py-3">
                <p class="font-weight-bold" style="font-size:16px">Habitat Ikan</p>
                <form>
                    <div class="form-check mt-1 custom-control custom-checkbox">
                        <input class="form-check-input custom-control-input" checked type="checkbox" value="Air Laut" id="defaultCheck4" wire:model='habitat'>
                        <label class="form-check-label custom-control-label" for="defaultCheck4">
                          Air Laut
                        </label>
                    </div>
                    <div class="form-check mt-1 custom-control custom-checkbox">
                        <input class="form-check-input custom-control-input" type="checkbox" value="Air Tawar" id="defaultCheck5" wire:model='habitat'>
                        <label class="form-check-label custom-control-label" for="defaultCheck5">
                          Air Tawar
                    </div>
                    <div class="form-check mt-1 custom-control custom-checkbox">
                        <input class="form-check-input custom-control-input" type="checkbox" value="Air Payau" id="defaultCheck6" wire:model='habitat'>
                        <label class="form-check-label custom-control-label" for="defaultCheck6">
                          Air Payau
                    </div>
                </form>
            </div>
            <div class="py-4">
                <p class="font-weight-bold" style="font-size:16px">Harga per kg</p>
                <input type="text" style="width: 45%" placeholder="Terendah" wire:model='harga_min'> - <input type="text"style="width: 45%" placeholder="Tertinggi" wire:model='harga_max'>
            </div>
            <div >
                <p class="font-weight-bold" style="font-size:16px">Berat Ikan</p>
                <input type="text" style="width: 45%" placeholder="Terendah" wire:model='berat_min'> - <input type="text"style="width: 45%" placeholder="Tertinggi" wire:model='berat_max'>
            </div>
        </div>
            <div class="col-sm-8 container">
                <div class="row">
                    @foreach ($ikan as $i)
                    <div class="col-lg-4 col-md-6 col-sm-10 offset-md-0 offset-sm-1" onclick="location.href='/';">
                        <a href="/kualitas/product/{{$i->ikan_id}}">
                            <div class="card"> <div class="container-gambar" style="aspect-ratio: 3/2;"><img class="card-img-top w-100 h-100" style="object-fit: contain" src="{{$i->url_gambar}}"></div>
                            <div class="card-body">
                                <h6 class="font-weight-bold pt-1">{{$i->nama_biasa}}</h6>
                                <div class="text-muted description">Space for small product description</div>
                                    <div class="d-flex flex-column">
                                        <div class="h6 font-weight-bold">@if ($i->harga === 0)
                                            Harga Tidak Diketahui
                                            @else
                                            {{$i->harga}}
                                        @endif</div>
                                    </div>
                            </div>
                        </div>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
    </div>
</div>
