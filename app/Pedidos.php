<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pedidos extends Model
{ 
    use SoftDeletes;
     protected $fillable = [
        'rem', 'fechaRem', 'piezas','dev','fechaDev','cliente_id','equipo_id','dias','precio_id','obra','importe','pagado'
    ];
    
    public function ScopePedidos($query,$nom,$rem,$dev,$pago){
        
        
         if($nom && $pago && $dev) {
            
             return $query->where('pagado', 'LIKE', "$pago%")
                    ->Where('cliente_id', 'LIKE', "%$nom%")
                    ->where('dev', 'LIKE', "%$dev%");
       }
        

       if($dev && $nom) {
            
             return $query->Where('cliente_id', 'LIKE', "%$nom%")
                     ->where('dev', 'LIKE', "%$dev%");
       } 
       
       
       if($dev && $pago) {
            
             return $query->where('pagado', 'LIKE', "$pago%")
                     ->where('dev', 'LIKE', "%$dev%");
       } 
       
        if($nom && $pago) {
            
             return $query->where('pagado', 'LIKE', "$pago%")
                    ->Where('cliente_id', 'LIKE', "%$nom%");
       }  
       
      
       
        if($nom){
            return $query->Where('cliente_id', 'LIKE', "%$nom%");
        }
        
         if($rem){
            return $query->Where('rem', 'LIKE', "$rem%");
        }
       if($dev){
            return $query->Where('dev', 'LIKE', "%$dev%");
        }
        if($pago){
            return $query->Where('pagado', 'LIKE', "$pago%");
        } 
    }
     
}
