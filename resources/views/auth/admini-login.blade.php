@extends('layouts.index')
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/style.css">

    <title>Ingresar a Siu Libre</title>
  </head>

  <body>
@section('content')
<div class="transparencia">
    <div class="headcont">
      @if (session()->has('status'))
          <h3>El administrador se ha registrado con exito podes Ingresar</h3>
      @else
            <h3>Ingresar como administrador</h3>
      @endif
    </div>

    <form class="usuario" action="{{ route('admini.login.submit') }}" method="post" id="formulario">
          {{csrf_field()}}

  <div class="container">
    <label><b>Direccion de Email:</b></label>
      <input type="text" placeholder="" name="email" value="{{old('email')}}" id="email">
      <br>
      <span id="errormail"></span>
      @if ($errors->has('email'))
          <span class="invalid-feedback" role="alert">
              <strong>{{ $errors->first('email') }}</strong>
          </span>
      @endif
            <br>
    <label><b>Contraseña:</b></label>
    <input type="password" placeholder="" name="password" id="password">

    @if ($errors->has('password'))
        <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('password') }}</strong>
        </span>
    @endif

    <button type="submit">Cargar</button>

  </div>

  </form>

</div>
    @endsection
  </body>
</html>
