<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class InputMitra extends Model
{
    protected $table = "input_mitra_tables";

    protected $fillable = ['nama','ikan','nama_mitra', 'tipeikan', 'harga', 'berat', 'gambar', 'user_id'];

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id', 'id');
    }
}
