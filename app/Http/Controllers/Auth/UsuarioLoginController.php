<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\Usuario;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class UsuarioLoginController extends Controller
{


public function __construct()
{
  $this->middleware('guest:usuario', ['except'=>['usuarioLogout']]);


}

    public function showLoginForm()
   {

         //return view ('auth.admin-login');
        return view ('auth.usuario-login');



   }



public function login(Request $request)
  {
      //validar los datos del mostrarFormulario

      $this->validate($request,[
        'email'=>'required|email',
        'password'=>'required'
      ],

      [
        'email.required' => 'El campo email es obligatorio',
        'email.email' => 'Por favor, complete con un mail valido',
        'password.required' => 'El campo contraseña es obligatorio',
      ]);

      //intentar iniciar session de usuario



  if (Auth::guard('usuario')->attempt(['email'=> $request->email, 'password'=> $request->password],$request->remember)){

      //$usuario=Usuario::select('name')->where('email','=',$request->email)->first();

      $email= $request->email;


      //return view('usuario.usuarioPaginaPrincipal3',compact('usuario'));
      //return redirect()->intended(route('usuario.dashboard',compact('usuario')));
      return redirect()->route('usuario.dashboard',['email'=>$email]);

}


    return redirect()->back()->withInput($request->only('email','remember'))->withErrors(['email'=>'Verificar los datos por favor']);;
      //si es exitoso redirigir a su locacion determinada

      //si no es exitoso, entonces dirigir al formulario de login

      }

      public function usuarioLogout()
      {
          Auth::guard('usuario')->logout();

          return redirect('/');
      }
}
