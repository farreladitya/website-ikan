<?php

namespace App\Http\Controllers;

use App\Models\HargaIkan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Ikan;

class IkanController extends Controller
{
    public function index(){
        $ikan = DB::table('ikan')->join('harga_ikan', 'harga_ikan.ikan_id', '=', 'ikan.ikan_id')->join('foto_ikan', 'foto_ikan.ikan_id', '=', 'ikan.ikan_id')->get();
        $persebaranikan = DB::table('persebaran')->join('foto_ikan', 'foto_ikan.ikan_id','=', 'persebaran.ikan_id')->join('ikan', 'ikan.ikan_id','=', 'persebaran.ikan_id')->whereNotNull('persebaran')->get()->keyBy('ikan_id');

        return view('beranda', ['ikan'=> $ikan, 'persebaran'=> $persebaranikan]);
    }

    public function indexKualitas(){
        $sepalopoda = DB::table('ikan')->join('harga_ikan', 'harga_ikan.ikan_id', '=', 'ikan.ikan_id')->join('foto_ikan', 'foto_ikan.ikan_id', '=', 'ikan.ikan_id')->where('jenis_ikan', '=', 'Cephalopod')->get();
        $demersal = DB::table('ikan')->join('harga_ikan', 'harga_ikan.ikan_id', '=', 'ikan.ikan_id')->join('foto_ikan', 'foto_ikan.ikan_id', '=', 'ikan.ikan_id')->where('jenis_ikan', '=', 'Demersal')->get();
        $pelagis = DB::table('ikan')->join('harga_ikan', 'harga_ikan.ikan_id', '=', 'ikan.ikan_id')->join('foto_ikan', 'foto_ikan.ikan_id', '=', 'ikan.ikan_id')->where('jenis_ikan', '=', 'Pelagic')->get();
        $under100 = DB::table('ikan')->join('harga_ikan', 'harga_ikan.ikan_id', '=', 'ikan.ikan_id')->join('foto_ikan', 'foto_ikan.ikan_id', '=', 'ikan.ikan_id')->where('harga', '<', 100000)->get();
        $upper100 = DB::table('ikan')->join('harga_ikan', 'harga_ikan.ikan_id', '=', 'ikan.ikan_id')->join('foto_ikan', 'foto_ikan.ikan_id', '=', 'ikan.ikan_id')->where('harga', '>', 100000)->get();
        return view('kualitas.product')->with([
            'sepalopoda'=> $sepalopoda,
            'demersal'=> $demersal,
            'pelagis'=> $pelagis,
            'under100'=> $under100,
            'upper100'=>$upper100,
        ]);
    }

    public function indexGizi(){
        $sepalopoda = DB::table('ikan')->join('harga_ikan', 'harga_ikan.ikan_id', '=', 'ikan.ikan_id')->join('foto_ikan', 'foto_ikan.ikan_id', '=', 'ikan.ikan_id')->where('jenis_ikan', '=', 'Cephalopod')->get();
        $demersal = DB::table('ikan')->join('harga_ikan', 'harga_ikan.ikan_id', '=', 'ikan.ikan_id')->join('foto_ikan', 'foto_ikan.ikan_id', '=', 'ikan.ikan_id')->where('jenis_ikan', '=', 'Demersal')->get();
        $pelagis = DB::table('ikan')->join('harga_ikan', 'harga_ikan.ikan_id', '=', 'ikan.ikan_id')->join('foto_ikan', 'foto_ikan.ikan_id', '=', 'ikan.ikan_id')->where('jenis_ikan', '=', 'Pelagic')->get();
        $under100 = DB::table('ikan')->join('harga_ikan', 'harga_ikan.ikan_id', '=', 'ikan.ikan_id')->join('foto_ikan', 'foto_ikan.ikan_id', '=', 'ikan.ikan_id')->where('harga', '<', 100000)->get();
        $upper100 = DB::table('ikan')->join('harga_ikan', 'harga_ikan.ikan_id', '=', 'ikan.ikan_id')->join('foto_ikan', 'foto_ikan.ikan_id', '=', 'ikan.ikan_id')->where('harga', '>', 100000)->get();
        return view('gizi.product')->with([
            'sepalopoda'=> $sepalopoda,
            'demersal'=> $demersal,
            'pelagis'=> $pelagis,
            'under100'=> $under100,
            'upper100'=>$upper100,
        ]);
    }
    public function carigizi(Request $request)
    {
        $cari = $request->cari;
        $ikan = DB::table('foto_ikan')->join('harga_ikan', 'harga_ikan.ikan_id', '=', 'foto_ikan.ikan_id')->where('harga_ikan.nama_ikan', 'like', "%".$cari."%")->get();
        return view('gizi.listproduct', ['ikan'=> $ikan]);
    }

    public function carikualitas(Request $request)
    {
        $cari = $request->cari;
        $ikan = DB::table('ikan')->join('harga_ikan', 'harga_ikan.ikan_id', '=', 'ikan.ikan_id')->join('foto_ikan', 'foto_ikan.ikan_id', '=', 'ikan.ikan_id')->where('harga_ikan.nama_ikan', 'like', "%".$cari."%")->get();
        return view('kualitas.listproduct', ['ikan'=> $ikan]);
    }

    public function listprodukgizi(){
        $ikan = DB::table('ikan')->join('harga_ikan', 'harga_ikan.ikan_id', '=', 'ikan.ikan_id')->join('foto_ikan', 'foto_ikan.ikan_id', '=', 'ikan.ikan_id')->get();

        return view('gizi.listproduct', ['ikan'=>$ikan]);
    }

    public function listprodukkualitas(){
        $ikan = DB::table('ikan')->join('harga_ikan', 'harga_ikan.ikan_id', '=', 'ikan.ikan_id')->join('foto_ikan', 'foto_ikan.ikan_id', '=', 'ikan.ikan_id')->get();
        return view('kualitas.listproduct', ['ikan'=>$ikan]);
    }

    public function detailIkan($id){
        $ikan = DB::table('ikan')->join('harga_ikan', 'harga_ikan.ikan_id', '=', 'ikan.ikan_id')->join('foto_ikan', 'foto_ikan.ikan_id', '=', 'ikan.ikan_id')->leftJoin('detail_ikan', 'detail_ikan.ikan_id', '=', 'ikan.ikan_id')->where('ikan.ikan_id', $id)->get();

        return view('kualitas.detailproduct', ['ikan'=>$ikan]);
    }

    public function kualitas($id){
        $ikan = DB::table('ikan')->join('harga_ikan', 'harga_ikan.ikan_id', '=', 'ikan.ikan_id')->join('foto_ikan', 'foto_ikan.ikan_id', '=', 'ikan.ikan_id')->where('ikan.ikan_id', $id)->get();

        return view('kualitas.kualitasikan', ['ikan'=>$ikan]);
    }

    public function giziIkan($id){
        $ikan = DB::table('ikan')->join('harga_ikan', 'harga_ikan.ikan_id', '=', 'ikan.ikan_id')->join('foto_ikan', 'foto_ikan.ikan_id', '=', 'ikan.ikan_id')->where('ikan.ikan_id', $id)->get();

        return view('gizi.giziIkan', ['ikan'=>$ikan]);
    }

    public function filterprodukkualitas(Request $request){
        if(!$request->kategori){
            $request->kategori = ['Cephalopod', 'Pelagic', 'Demersal'];
        }
        if(!$request->habitat){
            $request->habitat = ['Air Laut', 'Air Tawar', 'Air Payau'];
        }
        if(!$request->harga_min){
            $request->harga_min = 0;
        }
        if(!$request->harga_max){
            $request->harga_max = 999999;
        }
        if(!$request->berat_min){
            $request->berat_min = 0;
        }
        if(!$request->berat_max){
            $request->berat_max = 999999;
        }

        $ikan = DB::table('ikan')
        ->join('harga_ikan', 'harga_ikan.ikan_id', '=', 'ikan.ikan_id')
        ->join('foto_ikan', 'foto_ikan.ikan_id', '=', 'ikan.ikan_id')
        ->whereIn('ikan.jenis_ikan', $request->kategori)
        ->whereIn('ikan.habitat', $request->habitat)
        ->where('harga_ikan.harga', '>=', $request->harga_min)
        ->where('harga_ikan.harga', '<=', $request->harga_max)
        ->where('ikan.berat_minimal', '>=', $request->berat_min)
        ->where('ikan.berat_maksimal', '<=', $request->berat_max)
        ->get();

        return view('kualitas.listproduct', ['ikan'=>$ikan]);
    }

    public function filterprodukgizi(Request $request){
        if(!$request->kategori){
            $request->kategori = ['Cephalopod', 'Pelagic', 'Demersal'];
        }
        if(!$request->habitat){
            $request->habitat = ['Air Laut', 'Air Tawar', 'Air Payau'];
        }
        if(!$request->harga_min){
            $request->harga_min = 0;
        }
        if(!$request->harga_max){
            $request->harga_max = 999999;
        }
        if(!$request->berat_min){
            $request->berat_min = 0;
        }
        if(!$request->berat_max){
            $request->berat_max = 999999;
        }

        $ikan = DB::table('ikan')
        ->join('harga_ikan', 'harga_ikan.ikan_id', '=', 'ikan.ikan_id')
        ->join('foto_ikan', 'foto_ikan.ikan_id', '=', 'ikan.ikan_id')
        ->whereIn('ikan.jenis_ikan', $request->kategori)
        ->whereIn('ikan.habitat', $request->habitat)
        ->where('harga_ikan.harga', '>=', $request->harga_min)
        ->where('harga_ikan.harga', '<=', $request->harga_max)
        ->where('ikan.berat_minimal', '>=', $request->berat_min)
        ->where('ikan.berat_maksimal', '<=', $request->berat_max)
        ->get();

        return view('gizi.listproduct', ['ikan'=>$ikan]);
    }
};
