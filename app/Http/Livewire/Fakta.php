<?php

namespace App\Http\Livewire;

use App\Models\CommentModel;
use Livewire\Component;

class Fakta extends Component
{
    public $sorting;
    public $idikan;

    public function mount($ikan){
        $this->sorting = "default";
        $this->idikan = $ikan->ikan_id;
    }


    public function render()
    {
        if($this->sorting == "ASC"){
            $comment = CommentModel::orderBy("created_at", "ASC")->where('ikan_id',  $this->idikan)->get();
        }else if($this->sorting == "DESC"){
            $comment = CommentModel::orderBy("created_at", "DESC")->where('ikan_id',  $this->idikan)->get();
        }else{
            $comment = CommentModel::where('ikan_id', $this->idikan)->get();
        }
        return view('livewire.fakta', ['comment'=>$comment]);
    }
}
