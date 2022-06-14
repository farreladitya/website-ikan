<?php

namespace App\Http\Controllers;

use App\Models\InputMitra;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
public function landing(){
        return view('dashboard');
    }

public function index()
    {
    	// mengambil data dari table pegawai
    	$inputmitra = DB::table('input_mitra_tables')->get();

    	// mengirim data pegawai ke view index
    	return view('inputmitra.index',['input_mitra_tables' => $inputmitra]);

    }
    // method untuk menampilkan view form tambah pegawai
public function tambah()
    {
        // mengambil data pegawai berdasarkan id yang dipilih
        $inputmitra = InputMitra::get();
	    $ikan = DB::table('ikan')->get();
	    $tipeikan = DB::table('tipeikan')->get();
        return view('inputmitra.tambah',['ikan' => $ikan],['tipeikan' => $tipeikan],['input_mitra_tables' => $inputmitra] );

    }
public function store(Request $request)
    {

  // menyimpan data file yang diupload ke variabel $file
  $file = $request->file('gambar');
  

  $nama_file = time()."_".$file->getClientOriginalName();

            // isi dengan nama folder tempat kemana file diupload
  $tujuan_upload = 'gambar_ikan';
  $file->move($tujuan_upload,$nama_file);

  InputMitra::create([
    'nama' => $request->nama,
    'ikan' => $request->ikan,
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
	// passing data pegawai yang didapat ke view edit.blade.php
	return view('inputmitra.edit',['input_mitra_tables' => $inputmitra]);

    }
// update data pegawai
public function update(Request $request)
    {
	// update data pegawai
	DB::table('input_mitra_tables')->where('id',$request->id)->update([
		'nama' => $request->nama,
		'ikan' => $request->ikan,
		'harga' => $request->harga,
		'berat' => $request->berat,
		'gambar' => $request->gambar
	]);
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
}
