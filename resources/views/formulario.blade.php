@extends('templade_formulario')
@section('formulario_de_cadastros')
<center>
  <form name="form" action="{{route('cadastrado.db_cadastrado')}}" method="post">
  @csrf 
  
     Marca do Carro <input type="text" name="marca">

      <br><br>
        Modelo do Carro: <input type="text" name="modelo">

         <br><br>
        Valor do Carro: <input type="text" name="valor">

         <br><br>

          <input type="submit" name="up" value="Cadastrar">

   </form>
    <br><br>
     
       <a href="{{route('ver_dados.ver_cadastros')}}">Ver_Cadastros</a>
     
     </center>
@endsection