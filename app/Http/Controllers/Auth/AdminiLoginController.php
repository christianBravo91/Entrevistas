<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class AdminiLoginController extends Controller
{


public function __construct()
{
  $this->middleware('guest:admin', ['except'=>['logout']]);
  $this->middleware('guest:usuario');
}

public function showLoginForm(){
  return view ('auth.admini-login');
 }



public function loginAdministrador(Request $request)
  {
        $this->validate($request,[
        'email'=>'required|email',
        'password'=>'required'
      ],

      [
        'email.required' => 'El campo email es obligatorio',
        'email.email' => 'Por favor, complete con un mail valido',
        'password.required' => 'El campo contraseña es obligatorio',
      ]);


  if (Auth::guard('admin')->attempt(['email'=> $request->email, 'password'=> $request->password],$request->remember)){

        return redirect()->intended(route('admin.dashboard'));

      }
  return redirect()->back()->withInput($request->only('email','remember'))->withErrors(['email'=>'Verificar los datos por favor']);


      }

public function logout(){
 Auth::guard('admin')->logout();
 return redirect('/');
      }
}
