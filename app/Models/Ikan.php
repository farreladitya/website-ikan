<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\HargaIkan;

class Ikan extends Model
{
    use HasFactory;

    protected $table = "ikan";

    public function fotos(){
        return $this->hasOne('App\Models\FotoIkan', 'ikan_id');
    }

    public function hargas(){
        return $this->hasOne(HargaIkan::class, 'ikan_id');
    }
}
