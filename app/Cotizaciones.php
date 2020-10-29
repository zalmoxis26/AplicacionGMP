<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cotizaciones extends Model
{
    use SoftDeletes;
    
     protected $fillable = [
        
    'cliente', 'empresa','obra','celular','dias','fechaRem','fechaDev','mail', 'subtotal','iva', 'total',
    'pie1' , 'pie2' , 'pie3' , 'pie4' , 'pie5' ,'pie6',
     'pre1' , 'pre2' , 'pre3' , 'pre4' , 'pre5' ,'pre6', 
     'dia1' , 'dia2' , 'dia3' , 'dia4' , 'dia5' ,'dia6',   
     'equip1' , 'equip2' , 'equip3' , 'equip4' , 'equip5' ,'equip6',
      'imp1' , 'imp2' , 'imp3' , 'imp4' , 'imp5' ,'imp6',
         ];
     
     public function ScopeCotizacion($query, $cliente ){
         
         if($cliente){
             
             return $query->Where('cliente', 'LIKE', "$cliente%");
         }
     }
     
}


