@extends('layouts.index')
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <link  href="css/login.css" rel="stylesheet">
		<link rel="stylesheet" href="css/style.css">
    <title>Resgistrate a Siu Libre</title>
  </head>
  <body>

@section('content')
<div class="transparencia">
  <div class="headcont">
<h3> Registrate </h3>
</div>
<div class="formulario">
        <form  method="post" action="{{route('registro.administradores')}}" enctype="multipart/form-data" id="formRegistro">
            @if (session()->has('status'))
            <div class="alert alert-success">{{session('status')}}</div>
            @endif
      {{csrf_field()}}
      <div class="container contform">
        <div class="forma">
      <label>Nombre  </label>
      <div class="">

      </div>
  <input type="text" name="name" id="name" value="{{old('name')}}"  >
  @if ($errors->has('name'))
      <span class="invalid-feedback" role="alert">
          <strong>{{ $errors->first('name') }}</strong>
      </span>
  @endif
    <br>
      <label>Apellido</label>
        <input type="text" name="apellido" id="apellido" value="{{old('apellido')}}" >

       @if ($errors->has('apellido'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('apellido') }}</strong>
            </span>
        @endif

</div>
<div class="formb">
<label>Correo Electronico</label>
  <input type="text" name="email" id="email" value="{{old('email')}}">
  <span id="emailOK" class="invalid-feedback" role="alert"></span>
  <span id="errormail" class="invalid-feedback" role="alert"></span>
   @if ($errors->has('email'))
      <span class="invalid-feedback" role="alert">
          <strong>{{ $errors->first('email') }}</strong>
      </span>
  @endif

<br>
  <label>Contraseña</label>
    <input type="password" name="password" id="password" value="">

    @if ($errors->has('password'))
        <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('password') }}</strong>
        </span>
    @endif

</div>
  <button type="submit" id="botonEnviar">Enviar</button>
</div>
  </form>
</div>
</div>
@endsection

</body>
</html>
