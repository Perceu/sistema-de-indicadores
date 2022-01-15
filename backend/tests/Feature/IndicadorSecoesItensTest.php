<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class IndicadorSecoesItensTest extends TestCase
{
    public function test_db_dump_alimented()
    {
        $this->assertDatabaseHas('indicadores_secoes_itens', [ 'titulo' => 'Latitude' ]);
    }
}
