<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
<<<<<<< HEAD
use Illuminate\Support\Facades\Auth;

=======
>>>>>>> parent of 10071d0 (Revert "Setting Login & Register")

class LoginController extends Controller
{
    public function index(){
        return view('login');
    }
<<<<<<< HEAD

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email:dns'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('dashboard');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }
}

=======
}
>>>>>>> parent of 10071d0 (Revert "Setting Login & Register")
