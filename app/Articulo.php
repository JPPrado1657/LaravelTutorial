<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Articulo extends Model
{
    protected $fillable = ['idcategoria', 'descripcion', 'condicion','codigo','precio_venta','stock','nombre'];
    
    public function categoria(){
        return $this->belongsTo('App\Categoria');
    }
}
