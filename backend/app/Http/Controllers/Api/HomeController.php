<?php

namespace App\Http\Controllers\Api;
use App\Models\Indicadores;


class HomeController extends Controller
{
    public function index(){
        $response = [
            route('indicador'),
            route('indicadorFull'),
            route('indicadorMaps'),
        ];
        
        return $response;
    }
}
