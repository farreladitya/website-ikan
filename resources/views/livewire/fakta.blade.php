<div>
    <div class="container" style="margin-top: 70px; margin-bottom:130px">

        {{-- <button class="btn button buttonmasuk dropdown-toggle" type="button" id="dropdownMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" wire:model="sorting">
            Urutkan Berdasarkan
        </button> --}}
        <div class="row">
            <span>Urutkan Berdasarkan :</span>
            <select id="sort-ulasan" aria-labelledby="dropdownMenu" wire:model="sorting" class="ml-3">
                <option value="default" selected="selected">Default Sorting</option>
                <option value="ASC" >Tanggal post terbaru</option>
                <option value="DESC">Tanggal post terdahulu</option>
            </select>
        </div>
        <div class="mt-4">
            @if (!$comment->first())
            <h3>Belum ada tips manfaat untuk ikan ini</h3>
            @else
            @foreach ($comment as $c)
            <h3 style="font-size:14px">{{$c->name}}</h3>
            @php
            $tanggalcomment = date('d M Y ', strtotime($c->created_at));
            @endphp
            <p style="font-size:14px">{{$tanggalcomment}}</p>
            <p>{!! $c->isicomment !!}</p>
            <hr style="color = black;" class="mt-4">
            @endforeach
            @endif
        </div>
    </div>
</div>
