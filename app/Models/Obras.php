<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Obras extends Model
{
    use HasFactory;
    public function scopeObra($query, $obra){
        if($obra){
            return $query->where('nombre_de_la_obra', 'LIKE', "%$obra%" )->orWhere('id_obra', 'LIKE', "%$obra%");
        }
    }
}
