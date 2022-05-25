<?php

namespace App\Http\Livewire;

use Livewire\Component;

class IkanFilter extends Component
{
    public array $kategori = [];
    public array $habitat = [];
    public array $harga = [];
    public array $berat = [];

    public function render()
    {
        return view('livewire.ikan-filter');
    }
}
