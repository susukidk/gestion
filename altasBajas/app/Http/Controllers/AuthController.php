<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function login (){
        
        if (Auth::check()) {
            return redirect()->route('inicio');
        }
        return view('login');
    }
    public function logear(Request $request){
       $credenciales = $request->only("name", "password");

       if (Auth::attempt($credenciales)) {
            return redirect()->route('inicio');

       }else{
        return back()->withInput($credenciales);
       }
        

    }
    public function logout(){
        Auth::logout();
        Session::flush();
        return redirect()->route('auth-login');
    }

    public function agregarUsuario(Request $request){
        $item = new User();
        $item->name = $request->name;
        $item->password = Hash::make($request->password);
        $item->save();
        return redirect()->route('auth-login');
    }


    public function registro(){
        return view('registro');
    }
}
