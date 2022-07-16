<?php

namespace App\Http\Livewire;

use App\Models\CommentModel;
use Livewire\Component;

class Fakta extends Component
{
    public $sorting;

    public function mount(){
        $this->sorting = "default";
    }


    public function render()
    {
        if($this->sorting == "ASC"){
            $comment = CommentModel::orderBy("created_at", "ASC")->get();
        }else if($this->sorting == "DESC"){
            $comment = CommentModel::orderBy("created_at", "DESC")->get();
        }else{
            $comment = CommentModel::all();
        }
        return view('livewire.fakta', ['comment'=>$comment]);
    }
}
