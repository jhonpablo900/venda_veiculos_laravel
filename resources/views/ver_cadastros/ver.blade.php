@extends('templade_ver')
@section('ver')
  <form name="form_busca" action="{{route('achado.db_busca')}}" method="post">
  @csrf 
   Busca: <input type="text" name="criterio">
    <input type="submit" name="bt" value="buscar">

  </form>

  @foreach($ver_cadastros as $cadastros)
  
    Marca: {{$cadastros->marca}}<br>
    Modelo: {{$cadastros->modelo}}<br>
    Valor: {{$cadastros->valor}}<br>
     <br>
     
      <a href="{{route('ver_detalhes.db_detelhes',$cadastros->id)}}">Ver_detalhes</a>

 <form name="form" action="{{route('apagar.db_apagar',$cadastros->id)}}" method="post">

  @csrf 
  @method('DELETE')
   <input type="submit" name="up" value="Apagar">

 </form>
 <hr color='#000000'>
  @endforeach
@endsection