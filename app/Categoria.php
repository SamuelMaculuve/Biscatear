<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table='categorias';
    public function area_trabalho(){
        return $this->belongsTo(AreaTrabalho::class,'area_trabalho_id','id');

    }
}
