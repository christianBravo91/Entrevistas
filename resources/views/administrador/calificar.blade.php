@extends('layouts.app')

@section('content')
    <h2>Calificar a: {{$post->name}} {{$post->apellido}} </h2>

    <div class="formulario">
        <form  method="post" action="{{route('administrador.update', $post->id)}}" enctype="multipart/form-data" id="formRegistro">
            @if (session()->has('status'))
            <div class="alert alert-success">{{session('status')}}</div>
            @endif
      {{csrf_field()}}

<label>Examen Teorico</label>
        <br>
        <select name="examenTeorico" id="examenTeorico" class="form-control" >

            <option value=""></option>
            <option value=1>1</option>
            <option value =2 >2</option>
            <option value =3 >3</option>
            <option value =4 >4</option>
            <option value =5 >5</option>
            <option value =6 >6</option>
            <option value =7 >7</option>
            <option value =8 >8</option>
            <option value =9 >9</option>
            <option value =10 >10</option>
        </select>
        <span class="help-block">{{$errors->first('examenTeorico')}}</span>
        <br>
        <br>





  <label>Examen Grupal</label>
        <br>
        <select name="entrevistaGrupal" id="entrevistaGrupal" class="form-control" >

            <option value=""></option>
            <option value=1>1</option>
            <option value =2 >2</option>
            <option value =3 >3</option>
            <option value =4 >4</option>
            <option value =5 >5</option>
            <option value =6 >6</option>
            <option value =7 >7</option>
            <option value =8 >8</option>
            <option value =9 >9</option>
            <option value =10 >10</option>
        </select>

        <span class="help-block">{{$errors->first('entrevistaGrupal')}}</span>
        <br>
        <br>





  <label>Examen Individual</label>
        <br>
        <select name="entrevistaIndividual" id="entrevistaIndividual" class="form-control" >

            <option value=""></option>
            <option value=1>1</option>
            <option value =2 >2</option>
            <option value =3 >3</option>
            <option value =4 >4</option>
            <option value =5 >5</option>
            <option value =6 >6</option>
            <option value =7 >7</option>
            <option value =8 >8</option>
            <option value =9 >9</option>
            <option value =10 >10</option>



        </select>
        <span class="help-block">{{$errors->first('entrevistaGrupal')}}</span>
        <br>
        <br>


    {{method_field('PUT')}}

      <button type="submit" id="botonEnviar">Enviar</button>

  </form>
<br>
    <a href="{{route('admin.dashboard')}}" id="botonVolver">Volver a Lista de aplicantes</a>

@endsection
