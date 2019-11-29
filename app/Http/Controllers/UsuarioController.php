<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;

class UsuarioController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:usuario');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(String $email)
    {

        $usuarios=Usuario::where('email','=',$email)->first();
        return view(('usuario.usuarioPaginaPrincipal'),compact('usuarios'));
        
    }
}
