<?php

namespace App\Http\Controllers;

use App\Models\HargaIkan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Ikan;
use DateTime;
use Illuminate\Support\Facades\Auth;

class IkanController extends Controller
{
    public function index(){
        $ikan = DB::table('ikan')->join('harga_ikan', 'harga_ikan.ikan_id', '=', 'ikan.ikan_id')->join('foto_ikan', 'foto_ikan.ikan_id', '=', 'ikan.ikan_id')->get();
        $persebaranikan = DB::table('persebaran')->join('foto_ikan', 'foto_ikan.ikan_id','=', 'persebaran.ikan_id')->join('ikan', 'ikan.ikan_id','=', 'persebaran.ikan_id')->whereNotNull('persebaran')->get()->keyBy('ikan_id');
        $outlet = DB::table('outlet')->get();
        return view('beranda', ['ikan'=> $ikan, 'persebaran'=> $persebaranikan, 'outlet' => $outlet]);
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

    public function detailIkan($idikan){
        $ikan = DB::table('ikan')->join('harga_ikan', 'harga_ikan.ikan_id', '=', 'ikan.ikan_id')->join('foto_ikan', 'foto_ikan.ikan_id', '=', 'ikan.ikan_id')->leftJoin('detail_ikan', 'detail_ikan.ikan_id', '=', 'ikan.ikan_id')->where('ikan.ikan_id', $idikan)->get();

        $ulasan = DB::table('ulasan')->select('ulasan.comment', 'users.name', 'ulasan.created_at', 'ulasan.tags')->join('users', 'users.id', '=', 'ulasan.user_id')
        ->where('ikan_id', $idikan)
        ->get();

        return view('kualitas.detailproduct', ['ikan'=>$ikan, 'ulasan' => $ulasan]);
    }

    public function kualitas($id){
        $ikan = DB::table('ikan')
        ->join('harga_ikan', 'harga_ikan.ikan_id', '=', 'ikan.ikan_id')
        ->join('foto_ikan', 'foto_ikan.ikan_id', '=', 'ikan.ikan_id')
        ->join('cek_kualitas', 'cek_kualitas.ikan_id', '=', 'ikan.ikan_id')
        ->where('ikan.ikan_id', $id)
        ->first();

        return view('kualitas.kualitasikan', ['ikan'=>$ikan]);
    }

    public function postulasan($idikan, Request $request){
        $today = new DateTime();
        DB::table('ulasan')->insert([
            'ikan_id' => $idikan,
            'user_id' => Auth::id(),
            'comment' => $request->comment,
            'created_at' => $today,
            'updated_at' => $today
        ]);

        $ikan = DB::table('ikan')->join('harga_ikan', 'harga_ikan.ikan_id', '=', 'ikan.ikan_id')->join('foto_ikan', 'foto_ikan.ikan_id', '=', 'ikan.ikan_id')->leftJoin('detail_ikan', 'detail_ikan.ikan_id', '=', 'ikan.ikan_id')->where('ikan.ikan_id', $idikan)->get();

        $ulasan = DB::table('ulasan')->select('ulasan.comment', 'users.name', 'ulasan.created_at', 'ulasan.tags')->join('users', 'users.id', '=', 'ulasan.user_id')
        ->where('ikan_id', $idikan)
        ->get();

        return view('kualitas.detailproduct', ['ikan'=>$ikan, 'ulasan' => $ulasan]);
    }

    public function giziIkan($id){
        $ikan = DB::table('ikan')->join('harga_ikan', 'harga_ikan.ikan_id', '=', 'ikan.ikan_id')->join('foto_ikan', 'foto_ikan.ikan_id', '=', 'ikan.ikan_id')->where('ikan.ikan_id', $id)->first();
        $gizi = DB::table('gizi')->where('ikan_id', $id)->first();
        $manfaat = DB::table('manfaat')->get();
        $listgizi = DB::table('list_gizi')->get();
        $efeksamping = DB::table('efek_samping')->get();
        $racun = DB::table('gizi')->get();
        $listracun = DB::table('racun')->get();

        return view('gizi.giziIkan', ['ikan'=>$ikan, 'gizi' => $gizi, 'manfaat' => $manfaat, 'listgizi' => $listgizi, 'efeksamping' => $efeksamping, 'racun'=>$racun, 'listracun'=>$listracun]);
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

    public function detailgizi($idgizi){
        $gizi = DB::table('list_gizi')->where('gizi_id', $idgizi)->first();
        $manfaat = DB::table('manfaat')->get();
        $efeksamping = DB::table('efek_samping')->where('efek_samping.ktrt_gizi', 'like', "%".$gizi->nama_gizi."%")->get();
        $ikan = DB::table('ikan')->join('gizi', 'ikan.ikan_id', '=', 'gizi.ikan_id')->join('foto_ikan', 'foto_ikan.ikan_id', '=', 'ikan.ikan_id')->join('harga_ikan', 'harga_ikan.ikan_id', '=', 'ikan.ikan_id')->where('gizi.gizi', 'like', "%".$gizi->nama_gizi."%")->get();
        return view('gizi.detailgizi', ['gizi' => $gizi, 'manfaat'=>$manfaat, 'efeksamping'=>$efeksamping, 'ikan'=>$ikan]);
    }

    public function detailracun($idracun){
        $racun = DB::table('racun')->where('racun_id', $idracun)->first();
        $efeksamping = DB::table('efek_samping')->where('efek_samping.ktrt_racun', 'like', "%".$racun->nama_racun."%")->get();
        $ikan = DB::table('gizi')->join('ikan', 'ikan.ikan_id', '=', 'gizi.ikan_id')->join('foto_ikan', 'foto_ikan.ikan_id', '=', 'ikan.ikan_id')->join('harga_ikan', 'harga_ikan.ikan_id', '=', 'ikan.ikan_id')->where('gizi.racun', 'like', "%".$racun->nama_racun."%")->get();

        return view('gizi.detailracun', ['racun' => $racun, 'efeksamping'=>$efeksamping, 'ikan'=>$ikan]);
    }

    public function detailManfaat($idmanfaat){
        $manfaat = DB::table('manfaat')->where('manfaat_id', $idmanfaat)->first();
        $ikan = DB::table('gizi')->join('ikan', 'ikan.ikan_id', '=', 'gizi.ikan_id')->join('foto_ikan', 'foto_ikan.ikan_id', '=', 'gizi.ikan_id')->get();
        $gizi = DB::table('list_gizi')->get();

        return view('gizi.manfaat', compact('manfaat', 'ikan', 'gizi'));
    }

    public function listpenjual($namaikan){
        $jumlahmitra = DB::table('input_mitra_tables')->where('ikan', $namaikan)->count();
        if($jumlahmitra == 0){
            return redirect('/mitra');
        }else if($jumlahmitra == 1){
            $mitra = DB::table('input_mitra_tables')->where('ikan', $namaikan)->first();

            return redirect('mitra/'.$mitra->nama_mitra);
        }else{
            return redirect('/mitra');
        }
    }
};
