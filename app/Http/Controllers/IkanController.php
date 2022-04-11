<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IkanController extends Controller
{
    public function index(){
        $ikan = DB::table('foto_ikan')->join('harga_ikan', 'harga_ikan.ikan_id', '=', 'foto_ikan.ikan_id')->paginate(10);
        $persebaranikan = DB::table('persebaran')->whereNotNull('Persebaran')->get();

        return view('beranda', ['ikan'=> $ikan, 'persebaran'=> $persebaranikan]);
    }

    public function indexKualitas(){
        $sepalopoda = DB::table('foto_ikan')->join('harga_ikan', 'harga_ikan.ikan_id', '=', 'foto_ikan.ikan_id')->where('jenis_ikan', '=', 'Cephalopod')->get();
        $demersal = DB::table('foto_ikan')->join('harga_ikan', 'harga_ikan.ikan_id', '=', 'foto_ikan.ikan_id')->where('jenis_ikan', '=', 'Demesal')->get();
        $pelagis = DB::table('foto_ikan')->join('harga_ikan', 'harga_ikan.ikan_id', '=', 'foto_ikan.ikan_id')->where('jenis_ikan', '=', 'Pelagic')->get();
        $under100 = DB::table('foto_ikan')->join('harga_ikan', 'harga_ikan.ikan_id', '=', 'foto_ikan.ikan_id')->where('harga', '<=', 100000)->get();
        $upper100 = DB::table('foto_ikan')->join('harga_ikan', 'harga_ikan.ikan_id', '=', 'foto_ikan.ikan_id')->where('harga', '>', 100000)->get();
        return view('kualitas.product')->with(['sepalopoda'=> $sepalopoda, 'demersal'=> $demersal, 'pelagis'=> $pelagis, 'under100'=> $under100, 'upper100'=>$upper100]);
    }

    public function indexGizi(){
        $sepalopoda = DB::table('foto_ikan')->join('harga_ikan', 'harga_ikan.ikan_id', '=', 'foto_ikan.ikan_id')->where('jenis_ikan', '=', 'Cephalopod')->get();
        $demersal = DB::table('foto_ikan')->join('harga_ikan', 'harga_ikan.ikan_id', '=', 'foto_ikan.ikan_id')->where('jenis_ikan', '=', 'Demesal')->get();
        $pelagis = DB::table('foto_ikan')->join('harga_ikan', 'harga_ikan.ikan_id', '=', 'foto_ikan.ikan_id')->where('jenis_ikan', '=', 'Pelagic')->get();
        $under100 = DB::table('foto_ikan')->join('harga_ikan', 'harga_ikan.ikan_id', '=', 'foto_ikan.ikan_id')->where('harga', '<', 100000)->get();
        $upper100 = DB::table('foto_ikan')->join('harga_ikan', 'harga_ikan.ikan_id', '=', 'foto_ikan.ikan_id')->where('harga', '>', 100000)->get();
        return view('gizi.product')->with([
            'sepalopoda'=> $sepalopoda,
            'demersal'=> $demersal,
            'pelagis'=> $pelagis,
            'under100'=> $under100,
            'upper100'=>$upper100,
        ]);
    }
    public function cari(Request $request)
	{
		$cari = $request->cari;
        $ikan = DB::table('ikan')->where('nama_ikan', 'like',"%".$request->search."%")->paginate();
		return view('index',[
            'ikan' => $ikan
        ]);

	}
}
