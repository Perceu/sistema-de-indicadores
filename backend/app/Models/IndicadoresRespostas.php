<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class IndicadoresRespostas extends Model
{
    protected $table = 'indicadores_respostas';
    protected $primaryKey = 'id';

    public function indicador()
    {
        return $this->hasOne(Indicadores::class, 'id', 'id_indicador');
    }

    public function secao()
    {
        return $this->hasOne(IndicadoresSecoesItens::class, 'id', 'id_secao_item');
    }

}
