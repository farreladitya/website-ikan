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

    public function indexKualitas(){
        $sepalopoda = DB::table('foto_ikan')->join('harga_ikan', 'harga_ikan.ikan_id', '=', 'foto_ikan.ikan_id')->where('jenis_ikan', '=', 'Cephalopod')->get();
        $demersal = DB::table('foto_ikan')->join('harga_ikan', 'harga_ikan.ikan_id', '=', 'foto_ikan.ikan_id')->where('jenis_ikan', '=', 'Demesal')->get();
        $pelagis = DB::table('foto_ikan')->join('harga_ikan', 'harga_ikan.ikan_id', '=', 'foto_ikan.ikan_id')->where('jenis_ikan', '=', 'Pelagic')->get();
        return view('kualitas.product')->with(['sepalopoda'=> $sepalopoda, 'demersal'=> $demersal, 'pelagis'=> $pelagis]);
    }

    public function indexGizi(){
        $sepalopoda = DB::table('foto_ikan')->join('harga_ikan', 'harga_ikan.ikan_id', '=', 'foto_ikan.ikan_id')->where('jenis_ikan', '=', 'Cephalopod')->get();
        $demersal = DB::table('foto_ikan')->join('harga_ikan', 'harga_ikan.ikan_id', '=', 'foto_ikan.ikan_id')->where('jenis_ikan', '=', 'Demesal')->get();
        $pelagis = DB::table('foto_ikan')->join('harga_ikan', 'harga_ikan.ikan_id', '=', 'foto_ikan.ikan_id')->where('jenis_ikan', '=', 'Pelagic')->get();
        return view('gizi.product')->with(['sepalopoda'=> $sepalopoda, 'demersal'=> $demersal, 'pelagis'=> $pelagis]);
    }
}
