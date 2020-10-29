<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Equipos extends Model
{
    
    use SoftDeletes;
    
    protected $fillable = [
        'nombre', 'numero', 'piezas','precio','foto'
    ];
    
    public function ScopeEquipo($query, $equipo){
        
        if($equipo){
            return $query->where('nombre', 'LIKE', "$equipo%");
        }
        
    }
}
