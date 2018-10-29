<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Categoria;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CategoriaTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_crear_categoria()
    {
        $categoria = factory(Categoria::class)->make();
        $cat_array = [
            'nombre' => $categoria->nombre,
            'descripcion' => $categoria->descripcion,
            'condicion' => $categoria->condicion
        ];

        $response = $this->json('POST', '/categoria/registrar', $cat_array);
        $response->assertStatus(302);
    }
}
