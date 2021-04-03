<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\model_sistema;
class Sistema_Vendas extends Controller
{
    public function cadastrar_form(){
        return view('formulario');

    }
    public function db_cadastrado(Request $request){

        $db_cadastra = $request->only('marca','modelo','valor');
        model_sistema::create($db_cadastra);
        return view('info_cadastro.cadastrado');
    
    }
    public function ver_cadastro(){

          $ver_cadastros = model_sistema::all();

          return view('ver_cadastros.ver',[
                'ver_cadastros'=>$ver_cadastros,

          ]);

    }
    public function db_detalhes($id){
        
        $model_sistema = model_sistema::find($id);
        return view('detalhes.detalhe_produto',[

            'model_sistema'=>$model_sistema,
        ]);
    }
    public function db_apagar($id){

        $model_sistema = model_sistema::find($id);
        $model_sistema->delete();
        return view('apagado_det.det_apagado');

    }


     public function db_busca(Request $request){

         $ver_cadastros = model_sistema::where('marca','LIKE','%'.$request->criterio.'%')->get();
        return view('ver_cadastros.ver',[

            'ver_cadastros'=>$ver_cadastros,
            'criterio'=>$request->criterio

        ]);

    


     }
}
