@extends('layouts.app')
<!DOCTYPE html>
@section('content')
<h2>Lista de aplicantes</h2>
@if (session()->has('status'))
<div class="alert alert-success">{{session('status')}}</div>
@endif
<table class="table table-bordered">

    <tr>
        <th>Id</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Email</th>
        <th>Examen Teorico</th>
        <th>Examen Grupal</th>
        <th>Examen Individual</th>
        <th>Estado de Evaluación</th>
        <th>Acciones</th>



    </tr>


    @foreach($posts as $post)
    <tr>
        <td>{{$post->id}}   </td>
        <td>{{$post->name}}   </td>
        <td>{{$post->apellido}}</td>
        <td>{{$post->email}}</td>
        <td>{{$post->examenTeorico}}</td>
        <td>{{$post->entrevistaGrupal}}</td>
        <td>{{$post->entrevistaIndividual}}</td>
        <td>{{$post->CondicionAplicante}}</td>

        <td>
           <a href="{{route('administrador.edit',$post->id)}}">Calificar</a>
           
           <form action="{{route('administrador.destroy',$post->id)}}" method="POST">
               <input type="submit" value="Eliminar Usuario" class="btn btn-primary">

               {{method_field('DELETE')}}
               {{csrf_field()}}

            </form>

        </td>




        </tr>
    @endforeach

    </table>
@endsection
