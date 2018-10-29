<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Articulo;
use App\Categoria;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ArticuloTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_crea_articulo()
    {
        $categoria = factory(Categoria::class)->make();
        $articulo = factory(Articulo::class)->make();
        $art_array = [
            'idcategoria' => $categoria->id,
            'nombre' => $articulo->nombre,
            'descripcion' => $articulo->descripcion,
            'precio_venta' => $articulo->precio_venta,
            'stock' => $articulo->stock,
            'condicion' => $articulo->condicion
        ];

        $response = $this->json('POST', '/articulo/registrar', $art_array);
        $response->assertStatus(302);
    }
}
