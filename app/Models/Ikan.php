<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\HargaIkan;

class Ikan extends Model
{
    use HasFactory;

    public function foto(){
        return $this->hasOne(FotoIkan::class, 'ikan_id');
    }

    public function harga(){
        return $this->hasOne(HargaIkan::class, 'ikan_id');
    }

    public function comment(){
        return $this->hasMany(HargaIkan::class, 'ikan_id');
    }
}
