<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AreaTrabalho extends Model
{
    //A area do trabalho eh tabela raiz, e possui categorias
    //Uma area de trabalho tem n categorias
    protected $table='area_trabalhos';
    public function categorias(){
        return $this->hasMany(Categoria::class,'area_trabalho_id','id');

    }
}
