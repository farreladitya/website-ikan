<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Ikan;

class HargaIkan extends Model
{
    use HasFactory;

    protected $table = "harga_ikan";

    public function ikans(){
        return $this->belongsTo(Ikan::class, 'ikan_id');
    }
}
