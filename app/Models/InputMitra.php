<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InputMitra extends Model
{
    protected $table = "input_mitra_tables";

    protected $fillable = ['nama','ikan', 'tipeikan', 'harga', 'berat', 'gambar'];
}
