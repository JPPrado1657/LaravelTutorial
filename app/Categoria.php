<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    //protected $table = 'categorias'; /*Se asume por default*/
    //protected $primaryKey='id' /*esta de más, se toma por defecto*/
    protected $fillable = ['nombre', 'descripcion', 'condicion']; //Se les asignaran valores en masa

    public function articulos(){
        return $this->hasMany('App\Articulo');
    }
}
