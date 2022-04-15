<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FotoIkan extends Model
{
    use HasFactory;

    protected $table = "foto_ikan";

    public function ikans(){
        return $this->belongsTo('App\Models\Ikan', 'ikan_id')->withDefault([
            'harga' => 'Tidak diketahui',
        ]);
    }
}
