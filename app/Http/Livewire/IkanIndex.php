<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class IkanIndex extends Component
{
    public array $kategori = [];
    public array $habitat = [];
    public array $harga = [];
    public array $berat = [];

    public function render()
    {
        if($this->kategori === [] && $this->habitat === [] && $this->harga === [] && $this->berat === []){
            $ikan = DB::table('ikan')
            ->join('harga_ikan', 'harga_ikan.ikan_id', '=', 'ikan.ikan_id')
            ->join('foto_ikan', 'foto_ikan.ikan_id', '=', 'ikan.ikan_id')
            ->get();
        }else{
            $ikan = DB::table('ikan')
            ->join('harga_ikan', 'harga_ikan.ikan_id', '=', 'ikan.ikan_id')
            ->join('foto_ikan', 'foto_ikan.ikan_id', '=', 'ikan.ikan_id')
            ->whereIn('ikan.jenis_ikan', $this->kategori)
            ->get();
        }

        return view('livewire.ikan-index', [
            'ikan' => $ikan
        ]);
    }

    public function add($attr, $value){
        array_push($this->$attr, $value);
    }
}
