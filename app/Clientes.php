<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Clientes extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'nombre', 'contacto', 'empresa','fotoINE','email'
    ];
    
    
    public function ScopeClientes($query, $name,$emp,$mail){
        
        if($name){
        return $query->Where('nombre' , 'LIKE',  "$name%");    
        }
        else if($emp){
            return $query->Where('empresa' , 'LIKE',  "%$emp%");
        }
        else if($mail){
            return $query->Where('email' , 'LIKE',  "%$mail%");
        }
    }
    
}
