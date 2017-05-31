<?php

<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

use App\Http\Requests;


    

class EsadosCuentaController extends Controller
{
    public function SolicitudViaje()
    {
        if (empty(Auth::user()->name))
        {
            return view('login');
        }
        else
        {
            return view('estadosCuenta');
        } 
    }
}