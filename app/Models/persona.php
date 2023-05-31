<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    use HasFactory;

    public function propuesta()
    {
        $this->hasOne('App\Models\'propuesta','id_persona','idPersona');
    }
}
