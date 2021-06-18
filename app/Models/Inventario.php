<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventario extends Model
{
    use HasFactory;
    
    public function scopeEquipo($query, $equipo){
        if($equipo){
            return $query->where('nombre', 'LIKE', "%$equipo%" )->orWhere('id_producto', 'LIKE', "%$equipo%");
        }
    }
}
