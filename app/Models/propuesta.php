<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Propuesta extends Model
{
    use HasFactory;

    public function categoria()
    {
        return $this->belongsTo('App\Models\Categoria','id_Categoria','idCategoria');
    }

    public function persona()
    {
        return $this->belongsTo('App\Models\Categoria','id_persona','idPersona');
    }
}
