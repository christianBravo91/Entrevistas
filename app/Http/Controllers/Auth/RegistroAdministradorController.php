<?php

namespace App\Http\Controllers\Auth;

use App\Admini;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;

class RegistroAdministradorController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
        $this->middleware('guest:usuario');
    }


    public function showRegistrationForm()
  {

      return view('administrador.registrarteAdministrador');
  }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
      return Validator::make($data, [
          'name' => 'required|string|max:255',
          'email' => 'required|string|email|max:255|unique:adminis,email',
          'password' => 'required|string',
          'apellido' => 'required',


        ],
        [
          'name.required' => 'El campo nombre es obligtorio',
          'apellido.required' => 'El campo apellido es obligatorio',
          'email.required' => 'El campo email es obligatorio',
          'email.email' => 'Por favor, complete con un mail valido',
          'email.unique' => 'Por favor, ingrese otro mail',
          'password.required' => 'El campo contraseña es obligatorio',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
      return Admini::create([
          'name' => $data['name'],
          'email' => $data['email'],
          'password' => Hash::make($data['password']),
          'apellido' => $data['apellido'],
      ]);
    }

    public function register(Request $request)
  {
      $this->validator($request->all())->validate();

       $this->create($request->all());

    //return back()->with('status','El post ha sido creado con exito!');
    return redirect()->route('admini.login')->with('status','El post ha sido creado con exito!');


  }

  protected function registered(Request $request, $user)
  {
      //
  }
}
