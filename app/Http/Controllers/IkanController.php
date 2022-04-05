<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IkanController extends Controller
{
    public function index(){
        $ikan = DB::table('foto_ikan')->join('harga_ikan', 'harga_ikan.ikan_id', '=', 'foto_ikan.ikan_id')->paginate(10);

        return view('beranda', ['ikan'=> $ikan]);
    }
}
