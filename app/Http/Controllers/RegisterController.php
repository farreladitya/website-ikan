<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index(){
        return view('register');
    }

    public function store(Request $request){
        // insert data ke table pegawai
	// DB::table('users')->insert([
	// 	'name' => $request->name,
	// 	'email' => $request->email,
	// 	'password' => $request->password
	// ]);

    $validated = $request->validate([
        'name' => 'required|max:255',
        'email' => 'required|unique:users|max:255|email:dns',
        'password' => 'required|min:8|max:255'
    ]);

    $validated['password'] = Hash::make($validated['password']);

    User::create($validated);

    $request->session()->flash('status', 'Registrasi berhasil, Silahkan Masuk!');
    return redirect('/login');
    }
    }

