<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Indicadores extends Model
{
    protected $table = 'indicadores';
    protected $primaryKey = 'id';

    public function respostas()
    {
        return $this->hasMany(IndicadoresRespostas::class, 'id_indicador', 'id');
    }
}
