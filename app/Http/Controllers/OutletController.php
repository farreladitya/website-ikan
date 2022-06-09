<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OutletController extends Controller
{
    public function index($persebaran){
        // mengambil data dari table pegawai
        $outlet = DB::table('outlet')->where('persebaran', $persebaran)->get();

        // mengirim data pegawai ke view index
        return view('listpenjual',['outlet' => $outlet]);

    }
}
