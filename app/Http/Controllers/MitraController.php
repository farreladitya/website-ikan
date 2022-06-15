<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

class MitraController extends Controller
{
    public function index() {
        return view('mitra.mitra');
    }

    public function productbarokah() {
        $input_mitra_tables = DB::table('input_mitra_tables')->where('user_id', '=', 2)->get();
        return view('mitra.udbarokah', compact('input_mitra_tables'));
    }
    public function productcvwijaya(){
        $input_mitra_tables = DB::table('input_mitra_tables')->where('user_id', '=', 3)->get();
        return view('mitra.cvwijaya', compact('input_mitra_tables'));
    }
}
