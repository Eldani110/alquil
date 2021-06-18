<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    public function scopeCliente($query, $cliente){
        if($cliente){
            return $query->where('nombre', 'LIKE', "%$cliente%" )->orWhere('identifiacion', 'LIKE', "%$cliente%");
        }
    }
}

