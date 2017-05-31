<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\DB;

    

class AutorizacionesController extends Controller
{

public function CreacionPSV()
    {
        if (empty(Auth::user()->name))
        {
            return view('login');
        }
        else
        {
            return view('creacionpsv');
        } 
    }

public function guardarProyecto(Request $request)
{

    $nombreProyecto=$request->input('nombreProyecto');
    $ResponsableProyecto=$request->input('ResponsableProyecto');

        DB::table('Proyectos')->insert(
    ['nombreProyecto' => $nombreProyecto, 'idResponsable' => $ResponsableProyecto, 'idResponsable' => 1]
);
    return 1;
}

    public function SolicitudViaje()
    {
        if (empty(Auth::user()->name))
        {
            return view('login');
        }
        else
        {
            return view('solicitudViaje');
        } 
    }
}
