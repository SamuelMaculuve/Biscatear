<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Projecto extends Model
{
    protected $table='projectos';

    public function area_trabalho(){
        return $this->belongsTo(AreaTrabalho::class,'area_trabalho_id','id');
    }

}
