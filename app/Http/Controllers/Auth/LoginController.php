<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controlers\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    
 public function logout()
    {
        //Desconctamos al usuario
        Auth::logout();
        Session::flush();
        //Redireccionamos al inicio de la app con un mensaje
       
    }



    public function index()
    {
        return view('home');
    }
}
