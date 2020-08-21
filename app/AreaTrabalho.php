<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AreaTrabalho extends Model
{
    protected $table='area_trabalhos';
    public function projecto(){
        return $this->hasMany(Projecto::class,'area_trabalho_id','id');
    }
}
