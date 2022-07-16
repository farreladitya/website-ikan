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
                @if (!$ulasan->first())
                <h3>Belum ada ulasan. Beri ulasan untuk produk ini...</h3>
                @else
                @foreach ($ulasan as $u)
                <h3 style="font-size:14px">{{$u->name}}</h3>
                @php
                    $tanggalpost = date('d M Y ', strtotime($u->created_at));
                @endphp
                <p style="font-size:14px">{{$tanggalpost}}</p>
                @if ($u->tags)
                @php
                    $tag = implode(';', $u->tags);
                @endphp
                    @foreach ($tag as $t)
                    <span class="font-weight-bold" style="background-color:white;color: #253368; padding: 5px 17px;margin-left: -5px;height:34px; display:inline-block; border-radius:5px">{{$t}}</span>
                    @endforeach
                @endif
                <p>{{$u->comment}}</p>
                <hr style="color = black;" class="mt-4">
                @endforeach
                @endif
            </div>

</div>
