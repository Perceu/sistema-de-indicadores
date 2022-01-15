<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class IndicadorTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_maps()
    {
        $response = $this->get('/api/indicador/maps');
        $indicador = $response->decodeResponseJson()['0']['0'];
        $response->assertStatus(200);
    }

    public function test_indicador_exists()
    {
        $this->assertDatabaseHas('indicadores', [ 'id' => '12975' ]);
        $this->assertDatabaseHas('indicadores', [ 'id' => '299833' ]);
    }

    public function test_db_dump_alimented()
    {
        $response = $this->get('/api/indicador/maps');

        $capacitacao = $response->decodeResponseJson()['1']['0'];
        $indicador = $response->decodeResponseJson()['0']['0'];

        $this->assertEquals('Capacitação TESTE', $capacitacao);
        $this->assertEquals('Instituição TESTE', $indicador);
    }
}
