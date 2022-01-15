<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CidadeTest extends TestCase
{
    public function test_db_dump_alimented()
    {
        $this->assertDatabaseHas('cidades', [ 'nome' => 'Jaru' ]);
    }
}
