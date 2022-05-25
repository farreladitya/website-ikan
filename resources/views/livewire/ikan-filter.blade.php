<div>
    <div>
        <p class="font-weight-bold" style="margin-top: 20px; font-size:16px">Kategori</p>
        <form>
            <div class="form-check mt-1 custom-control custom-checkbox">
                <input class="form-check-input custom-control-input" checked type="checkbox" value="Chepalopod" id="defaultCheck1" wire:model='kategori'>
                <label class="form-check-label custom-control-label" for="defaultCheck1">
                  Sepalopoda
                </label>
            </div>
            <div class="form-check mt-1 custom-control custom-checkbox">
                <input class="form-check-input custom-control-input" type="checkbox" value="Pelagic" id="defaultCheck2" wire:model='kategori'>
                <label class="form-check-label custom-control-label" for="defaultCheck2">
                  Ikan Pelagis
            </div>
            <div class="form-check mt-1 custom-control custom-checkbox">
                <input class="form-check-input custom-control-input" type="checkbox" value="Demersal" id="defaultCheck3" wire:model='kategori'>
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
        <input type="text" style="width: 45%" placeholder="Terendah" wire:model='harga'> - <input type="text"style="width: 45%" placeholder="Tertinggi" wire-model='harga'>
    </div>
    <div >
        <p class="font-weight-bold" style="font-size:16px">Berat Ikan</p>
        <input type="text" style="width: 45%" placeholder="Terendah" wire:model='berat'> - <input type="text"style="width: 45%" placeholder="Tertinggi" wire:model='berat'>
    </div>
</div>
