<?php

namespace App\Http\Controllers;

use App\Models\InputMitra;
use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function landing(){
        return view('dashboard');
    }

    public function index()
    {
        // mengambil data dari table pegawai
        $inputmitra = DB::table('input_mitra_tables')->join('ikan', 'ikan.ikan_id', '=', 'input_mitra_tables.ikan')->where('nama_mitra', auth()->user()->name)->get();
        // mengirim data pegawai ke view index
        return view('inputmitra.index',['input_mitra_tables' => $inputmitra]);

    }
    // method untuk menampilkan view form tambah pegawai
    public function tambah()
    {
        // mengambil data pegawai berdasarkan id yang dipilih

        $ikan = DB::table('ikan')->get();
        $tipeikan = DB::table('tipeikan')->get();
        $user = DB::table('users')->where('id', Auth::id())->first();

        return view('inputmitra.tambah',['ikan' => $ikan,'tipeikan' => $tipeikan, 'user'=>$user]);

    }
    public function store(Request $request)
    {

        // menyimpan data file yang diupload ke variabel $file
        $users = User::with('inputMitra')->get();
        $input_mitra = InputMitra::with('user')->get();
        $file = $request->file('gambar');


        $nama_file = time()."_".$file->getClientOriginalName();

        // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'gambar_ikan';
        $file->move($tujuan_upload,$nama_file);

        $ikan = DB::table('ikan')->where('nama_ikan', $request->ikan)->first();

        InputMitra::create([
            'user_id' => auth()->user()->id,
            'ikan' => $ikan->ikan_id,
            'nama_mitra' => auth()->user()->name,
            'tipeikan' => $request->tipeikan,
            'harga' => $request->harga,
            'berat' => $request->berat,
            'gambar' => $nama_file
        ]);


        // alihkan halaman ke halaman pegawai
        return redirect('/dashboard/index');

    }
    public function edit($id)
    {
        // mengambil data pegawai berdasarkan id yang dipilih
        $inputmitra = DB::table('input_mitra_tables')->where('id',$id)->get();
        $ikan= DB::table('ikan')->get();
        // passing data pegawai yang didapat ke view edit.blade.php
        return view('inputmitra.edit',['input_mitra_tables' => $inputmitra, 'ikan'=>$ikan]);

    }
    // update data pegawai
    public function update(Request $request)
    {
        $file = $request->file('gambar');


        $nama_file = time()."_".$file->getClientOriginalName();

        // update data pegawai
        DB::table('input_mitra_tables')->where('id',$request->id)->update([
            'ikan' => $request->ikan,
            'harga' => $request->harga,
            'berat' => $request->berat,
            'gambar' => $nama_file
        ]);


        // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'gambar_ikan';
        $file->move($tujuan_upload,$nama_file);
        // alihkan halaman ke halaman pegawai
        return redirect('/dashboard/index');
    }
    // method untuk hapus data pegawai
    public function hapus($id)
    {
        // menghapus data pegawai berdasarkan id yang dipilih
        DB::table('input_mitra_tables')->where('id',$id)->delete();

        // alihkan halaman ke halaman pegawai
        return redirect('/dashboard/index');
    }

    public function tentangkami(){
        return view('tentangkami');
    }

}
