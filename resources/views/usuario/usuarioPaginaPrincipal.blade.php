@extends('layouts.appB')
<!DOCTYPE html>
@section('content')


<h2>Bienvenido {{$usuarios->name}} los resultados de tus examenes son los siguientes </h2>

<table class="table table-bordered">

    <tr>

        <th>Examen Teorico</th>
        <th>Examen Grupal</th>
        <th>Examen Individual</th>
        <th>Estado de Evaluación</th>
  </tr>



  <tr>

      <td>{{$usuarios->examenTeorico}}</td>
      <td>{{$usuarios->entrevistaGrupal}}</td>
      <td>{{$usuarios->entrevistaIndividual}}</td>
      <td>{{$usuarios->CondicionAplicante}}</td>

  </tr>



</table>


  <?php
 $promedio=((($usuarios->examenTeorico)+($usuarios->entrevistaIndividual)+($usuarios->entrevistaIndividual))/3);
    if(($usuarios->CondicionAplicante!='Pendiente')&&($promedio>7)){

          echo "Tus evaluciones han sido satisfactorias nuestro
                  departamento de recursos humanos se comunicara con vos";
            }

            if(($usuarios->CondicionAplicante!='Pendiente')&&($promedio<7)){

                  echo "Lamentablemente no has sido seleccionado en esta oportunidad";
                }


?>
@endsection
