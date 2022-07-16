<?php

namespace App\Http\Livewire;

use App\Models\Ulasan as ModelsUlasan;
use Livewire\Component;


class Ulasan extends Component
{
    public $sorting;

    public function mount(){
        $this->sorting = "default";
    }



    public function render()
    {
        if($this->sorting == "ASC"){
            $ulasan = ModelsUlasan::orderBy("created_at", "ASC")->get();
        }else if($this->sorting == "DESC"){
            $ulasan = ModelsUlasan::orderBy("created_at", "DESC")->get();
        }else{
            $ulasan = ModelsUlasan::all();
        }

        return view('livewire.ulasan', ['ulasan' => $ulasan]);
    }
}
