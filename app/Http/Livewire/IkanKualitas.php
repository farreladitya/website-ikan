<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class IkanKualitas extends Component
{
    public array $kategori = [];
    public array $habitat = [];
    public int $harga_min = 0;
    public int $harga_max = 0;
    public int $berat_min = 0;
    public int $berat_max = 0;

    public function render()
    {
        $this->setDefault();

        $ikan = DB::table('ikan')
        ->join('harga_ikan', 'harga_ikan.ikan_id', '=', 'ikan.ikan_id')
        ->join('foto_ikan', 'foto_ikan.ikan_id', '=', 'ikan.ikan_id')
        ->whereIn('ikan.jenis_ikan', $this->kategori)
        ->whereIn('ikan.habitat', $this->habitat)
        ->where('harga_ikan.harga', '>=', $this->harga_min)
        ->where('harga_ikan.harga', '<=', $this->harga_max)
        ->where('ikan.berat_minimal', '>=', $this->berat_min)
        ->where('ikan.berat_maksimal', '<=', $this->berat_max)
        ->get();

        return view('livewire.ikan-kualitas', [
            'ikan' => $ikan
        ]);
    }

    public function add($attr, $value){
        array_push($this->$attr, $value);
    }

    private function setDefault(){
        if ($this->kategori === []){
            $this->kategori = ['Cephalopod', 'Demersal', 'Pelagic'];
        }
        if($this->habitat === []){
            $this->habitat = ['Air Laut', "Air Tawar", 'Air Payau'];
        }
        if($this->harga_max === 0){
            $this->harga_max = 1000000;
        }
        if($this->berat_max === 0){
            $this->berat_max = 1000000;
        }
    }
}
