<?php

namespace App\Http\Controllers\Api;
use App\Models\Indicadores;
use App\Models\Cidades;


class IndicadorController extends Controller
{
    public function index(){
        return Indicadores::all();
    }

    public function maps(){

        $campos_titulo_pin = [40,62];
        $campos_cidade = [31,43,55,67,82];
        $campos_long_lat = [94,95];
        
        $response = [];
        foreach (Indicadores::all() as $indicador) {
            $respostas = [] ;
            $titulo_pin ='';
            $longitute ='';
            $latitude ='';

            foreach ($indicador->respostas as $resposta) {
                if (in_array($resposta->id_secao_item, $campos_titulo_pin)){
                    $titulo_pin = $resposta->resposta_text;
                }

                if (in_array($resposta->id_secao_item, $campos_cidade)){
                    $id_cidade = $resposta->resposta_text;
                    $cidade = Cidades::find($id_cidade);
                    $latitude = $cidade->latitude;
                    $longitude = $cidade->longitude;
                }

                if (in_array($resposta->id_secao_item, $campos_long_lat)){
                    $secao = $resposta->secao;
                    if (strtoupper($secao->titulo)=='LATITUDE'){
                        $latitude = $resposta->resposta_text;
                    }
                    if (strtoupper($secao->titulo)=='LONGITUDE'){
                        $latitude = $resposta->resposta_text;
                    }
                }
            }

            $response[] = [
                $titulo_pin,
                $longitude,
                $latitude,
            ];
        }

        return $response;
    }

    public function full(){
        $response = [];
        foreach (Indicadores::all() as $indicador) {
            $respostas = [] ;
            foreach ($indicador->respostas as $resposta) {
                $respostas[] = [
                    "resposta" => $resposta,
                    "tipo" => $resposta->secao
                ];
            }
            $response[] = [
                "id" => $indicador->id,
                "respostas" => $respostas,
            ];
        }
        return $response;
    }
}
