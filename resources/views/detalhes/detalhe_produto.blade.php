@extends('templade_detalhes')
@section('detalhes_registro')
 Modelo: {{$model_sistema->modelo}}
  <hr color='#000000'>

   Marca: {{$model_sistema->marca}}
   <hr color='#000000'>
   Valor: {{$model_sistema->valor}}
    <hr color='#00000'>

    <form name="form" action="" method="post">
  @csrf 
   
    </form>
@endsection