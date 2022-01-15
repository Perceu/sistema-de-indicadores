<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class IndicadorRespostaTest extends TestCase
{
    public function test_db_dump_alimented()
    {
        $this->assertDatabaseHas('indicadores_respostas', [ 'resposta_text' => 'Instituição TESTE' ]);
    }
}
