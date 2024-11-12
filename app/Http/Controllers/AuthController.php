<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $hashedPassword = Hash::make('plain-text-password');

        $request ->validate([
            'email'=>'required|email',
            'password'=>'required'
        ]);
            $credentials = $request->only("email", "password");

        if(Auth::attempt($credentials))
        {
            if(Auth::user()->is_admin == 1) {
                session()->regenerate();
                return redirect('dashboard')->with(['success'=>'Амжилттай нэвтэрлээ.']);
            } else {
                session()->regenerate();
                return redirect('computers')->with(['success'=>'Амжилттай нэвтэрлээ.']);
            }
        }
        else{

            return back()->withErrors(['error'=>'Нууц үг эсвэл и-мэйл хаяг буруу байна.']);
        }
    }
    
    public function destroy()
    {

        Auth::logout();

        return redirect('/login')->with(['success'=>'You\'ve been logged out.']);
    }
}
