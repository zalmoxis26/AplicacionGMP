@extends("../Cotizaciones.plantillaIndex1")
<style>
   
   

</style>

@section("cabecera")






@endsection



@section("contenido")

<h1>ELABORAR NUEVA COTIZACION</h1>

{!!Form::open(['method' => 'post' ,  'action' => 'CotizacionesController@store' , 'files' => true])!!}

<div class='container' style='width:50%;  border:1px solid black; margin-bottom: 10px; max-width:900px; min-width:550px; '>
     
    <div class="row">
        <div class="container col col-lg-3" style='padding:0'><img style='padding-top: 5px;' src="../images/logo.png" width="150"/></div>
        <div class="col col-lg-9" style='padding:0px'>
            <div class='container' style="height:50px;font-size: 2.5em; border:1px solid black;-webkit-text-fill-color:#008000; 
  -webkit-text-stroke-width: 1px; -webkit-text-stroke-color: black; text-shadow:2px 0 0 black;">
                RENTAS GMP
            </div>
            <div class='container' style="height:68.36PX; border:1px solid black; font-size: .85em;">
              RENTA DE ANDAMIOS DE SEGURIDAD Y EQUIPO MENOR DE CONSTRUCCION. LOPEZ MATEOS #37 
               COL. GUADALUPE VICTORIA. C.P 22426. TIJUANA B.C. 
              TEL Y FAX 664-624-17-51. CEL 664-161-69-03. 
              E-MAIL: POLO_ROLDAN@YAHOO.COM. 
            </div>
        </div>
  </div>
   
    <div class="row" style='height:117px;'>
        <div class="container col col-lg-7" style="border:1px solid black; font-size: 1em; padding: 4px;">
            ATENDIENDO A LA SOLICITUD QUE AMABLEMENTE NOS REALIZO, ME PERMITO PONER A SU CONSIDERACION LA SIGUIENTE COTIZACION Y REQUISITOS PARA RENTA DE MATERIAL DESMONTABLE:
        </div>
        <div class="col col-lg-5" style="padding:0;">
            <div class='container' style='height: 50%; border:1px solid black'>
                INICIO DE RENTA <input name="fechaRem" type="date" style="font-size:1.2em;text-align:right;">
            </div>
            <div class='container' style='height: 50%; border:1px solid black'>
               TERMINO DE RENTA <input  name="fechaDev" type="date" style="font-size:1.2em; text-align:right;">
            </div>    
        </div>   
  </div>
    
    
    <div class="row">
        <div class="container col col-lg-2" style="font-size: 1.3em; height: 39px; border:1px solid black;">
       CLIENTE      
        </div>
        <div class="col col-lg-10" style='border:1px solid black; padding:0;'>
            <input name='cliente' list="clientes" type="text" class="form-control" id="cliente" required="true" style='height: 37px; font-size: 1.2em'>
               <datalist id='clientes'>    
                @foreach($clientes as $cliente)
                <option>{{$cliente->nombre}}</option>
                @endforeach
            </datalist>  
        </div>
  </div>
    
    
    <div class="row" >
        <div class="container col col-md-2" style="font-size: 1.2em;border:1px solid black; padding:0;">
       EMAIL      
        </div>
        <div class="col col-md-5" style='border:1px solid black; padding: 0;'>
       <input name='mail' list='email' type="email" class="form-control" id="cliente" style='height:30px; padding:0 0 0 15px; font-size: 1.3em;'>
       <datalist id='email'> 
       <option value=''>E-MAIL</option>
       @foreach($clientes as $cliente)
        <option>{{$cliente->email}}</option>
        @endforeach
     </datalist>
        </div>
        
      <div class="col col-md-2" style="font-size: 1.2em; border:1px solid black;">
         TEL/CEL:
        </div>
        <div class="col col-md-3" style='border:1px solid black;padding:0;'>
            <input type="text" name='contacto' list="cel" class="form-control"style='height:30px; font-size: 1.3em; text-align: center;'>
        <datalist id='cel'>
            @foreach($clientes as $cliente)
           <option>{{$cliente->contacto}}</option>
           @endforeach
    </datalist>
        </div> 
  </div>
    
    <div class="row" >
        <div class="container col col-lg-2" style="font-size: 1.3em;  border:1px solid black;">
       OBRA    
        </div>
        <div class="col col-lg-5" style='border:1px solid black;padding:0;'>
    <input name='obra' list='obra' type="text" class="form-control" id="obra" style='height:30px; font-size: 1.2em; padding:0 0 0 15px;'>
       <datalist id='obra'> 
       @foreach($pedidos as $pedido)
        <option>{{$pedido->obra}}</option>
        @endforeach
       </datalist>
        </div>
        
      <div class="col col-lg-3" style="font-size: 1.1em;border:1px solid black;">
        DIAS DE RENTA
        </div>
        <div class="col col-lg-2" style='border:1px solid black;padding:0;'>
            <input name="dias" type="number" class="form-control" style='height:30px; font-size: 1.5em; text-align: center;'>
        </div> 
  </div>
    
     <div class="row" >
        <div class="container col col-lg-1" style="font-size: 1.1em; border: 1PX solid black">
       PZA    
        </div>
        <div class="col col-lg-5" style="font-size: 1.1em; border: 1PX solid black" >
           DESCRIPCION
        </div>
         <div class="col col-lg-2" style="font-size: 1.1em; border: 1PX solid black" >
           P.U.
        </div>
      <div class="col col-lg-1" style="font-size: 1.1em; border: 1PX solid black">
        JOR
        </div>
        <div class="col col-lg-3" style="font-size: 1.1em; border: 1PX solid black">
            IMPORTE
        </div> 
  </div>
    
    <!----------------------FILA 1----------------------->
    
    <div class="row" style='height: 38px;' >
        <div class="container col col-lg-1" style=" height: 38px; border: 1PX solid black; padding:0;">
            <input name="pie1" value="1" type="number" class="form-control" style=" height:36PX; font-size: 1.3em; padding:0 0 0 20px;" >   
        </div>
        <div class="col col-lg-5" style="height: 38px; border: 1PX solid black;padding:0;" >
           <select name='equip1' type="text" class="form-control" id="equipo1" style="height:36PX;font-size: 1.2em; padding: 0 0 0 20px;">
        <option value="">SELECCIONA EQUIPO</option>
       @foreach($equipos as $equipo)
        <option>{{$equipo->nombre}}</option>
        @endforeach
    </select>
        </div> 
      <div class="col col-lg-2" style=" height: 38px; border: 1PX solid black; padding:0;">
          <select name='pre1' type="number" step="any" class="form-control" style=" height: 36px; font-size: 1.4em; padding:0 0 0 15px;">
       @foreach($equipos as $equipo)
        <option>{{$equipo->precio}}</option>
        @endforeach
    </select>
      </div>
     
     
      <div class="col col-lg-1" style="height: 38px; border: 1PX solid black ; padding:0;">
          <input name='dia1' value="1" type="number" class="form-control" style=" height: 36px; font-size: 1.3em;padding:0 0 0 15px;">
        </div>
        <div class="col col-lg-3" style=" height: 38px; border: 1PX solid black ; padding:0;">
            <input name='imp1' type="number" step="any" class="form-control" style=" height: 36px; font-size: 1.5em; padding:0; text-align: center;">
        </div> 
  </div>
  
    <!----------------------FILA 2----------------------->
    
    <div class="row"  style='height: 38px;'>
        <div class="container col col-lg-1" style="height: 38px; border: 1PX solid black; padding:0;">
            <input name="pie2" type="number" class="form-control" style=" height: 36px; font-size: 1.3em; padding:0 0 0 20px;">   
        </div>
        <div class="col col-lg-5" style=" height: 38px; border: 1PX solid black; padding:0;" >
           <select name='equip2' type="text" class="form-control" id="equipo1" style=" height: 36px; font-size: 1.2em; padding: 0 0 0 20px;">
        <option value=""></option>
       @foreach($equipos as $equipo)
        <option>{{$equipo->nombre}}</option>
        @endforeach
    </select>
        </div> 
        <div class="col col-lg-2" style="height: 38px; border: 1PX solid black; padding:0;">
            <select name='pre2' type="number" step="any" class="form-control" style=" height: 36px; font-size: 1.4em; padding:0 0 0 15px; ">
        <option value=""></option>    
        @foreach($equipos as $equipo)
        <option>{{$equipo->precio}}</option>
        @endforeach
    </select>
        </div>  
      <div class="col col-lg-1" style="height: 38px; border: 1PX solid black; padding:0;">
          <input name='dia2' type="number"  class="form-control" style="  height: 36px;font-size: 1.3em;padding:0 0 0 15px;">
        </div>
        <div class="col col-lg-3" style="height: 38px; border: 1PX solid black; padding:0;">
            <input name='imp2'type="number" step="any" class="form-control" style=" height: 36px; font-size: 1.5em; padding:0; text-align: center;">
        </div> 
  </div>
    
    <!----------------------FILA 3----------------------->
    
    <div class="row" style='height: 38px;' >
        <div class="container col col-lg-1" style="height: 38px; border: 1PX solid black; padding:0;">
            <input name="pie3" type="number" class="form-control" style=" height: 36px; font-size: 1.3em; padding:0 0 0 20px;">   
        </div>
        <div class="col col-lg-5" style="height: 38px; border: 1PX solid black; padding:0;" >
           <select name='equip3' type="text" class="form-control" id="equipo1" style=" height: 36px; font-size: 1.2em; padding: 0 0 0 20px;">
        <option value=""></option>
       @foreach($equipos as $equipo)
        <option>{{$equipo->nombre}}</option>
        @endforeach
    </select>
        </div>
        <div class="col col-lg-2" style="height: 38px; border: 1PX solid black; padding:0;">
        <select name='pre3' type="number" step="any" class="form-control" style=" height: 36px; font-size: 1.4em; padding:0 0 0 10px;">
        <option value=""></option>
        @foreach($equipos as $equipo)
        <option>{{$equipo->precio}}</option>
        @endforeach
    </select>
        </div>  
      <div class="col col-lg-1" style="height: 38px; border: 1PX solid black; padding:0;">
          <input name='dia3' type="number" class="form-control" style=" height: 36px;font-size: 1.3em; padding:0 0 0 15px;">
        </div>
        <div class="col col-lg-3" style="height: 38px; border: 1PX solid black; padding:0;">
            <input name='imp3'type="number" step="any" class="form-control" style=" height: 36px;font-size: 1.5em; padding:0; text-align: center;">
        </div> 
  </div>
    
    <!----------------------FILA 4----------------------->
    
    <div class="row" style='height: 38px;'  >
        <div class="container col col-lg-1" style="height: 38px; border: 1PX solid black; padding:0;">
            <input name="pie4" type="number" class="form-control" style=" height: 36px; font-size: 1.2em; padding:0 0 0 20px;">   
        </div>
        <div class="col col-lg-5" style="height: 38px; border: 1PX solid black; padding:0;" >
           <select name='equip4' type="text" class="form-control" id="equipo1" style=" height: 36px; font-size: 1.2em; padding: 0 0 0 20px;">
        <option value=""></option>
       @foreach($equipos as $equipo)
        <option>{{$equipo->nombre}}</option>
        @endforeach
    </select>
        </div> 
        <div class="col col-lg-2" style="height: 38px; border: 1PX solid black; padding:0;">
        <select name='pre4' type="number" step="any" class="form-control"style="  height: 36px;font-size: 1.4em;padding:0 0 0 10px;">
        <option value=""></option>
        @foreach($equipos as $equipo)
        <option>{{$equipo->precio}}</option>
        @endforeach
    </select>
        </div> 
      <div class="col col-lg-1" style="height: 38px; border: 1PX solid black; padding:0;">
          <input name='dia4' type="number" class="form-control" style="  height: 36px;font-size: 1.3em; padding:0 0 0 15px;">
        </div> 
        <div class="col col-lg-3" style="height: 38px; border: 1PX solid black; padding:0;">
           <input name='imp4'type="number" step="any" class="form-control" style=" height: 36px; font-size: 1.5em; padding:0; text-align: center;">
        </div> 
  </div>
    
    <!----------------------FILA 5----------------------->
    
    <div class="row" style='height: 38px;'>
        <div class="container col col-lg-1" style="height: 38px; border: 1PX solid black; padding:0;">
            <input name="pie5" type="number" class="form-control" style=" height: 36px; font-size: 1.3em; padding:0 0 0 20px;">   
        </div>
        <div class="col col-lg-5" style="height: 38px; border: 1PX solid black; padding:0;" >
           <select name='equip5' type="text" class="form-control" id="equipo1" style="height: 36px; font-size: 1.2em; padding: 0 0 0 20px;">
        <option value=""></option>
       @foreach($equipos as $equipo)
        <option>{{$equipo->nombre}}</option>
        @endforeach
    </select>
        </div> 
        <div class="col col-lg-2" style=" height: 38px; border: 1PX solid black; padding:0;">
            <select name='pre5' type="number" step="any" class="form-control" style=" height: 36px; font-size: 1.4em; padding:0 0 0 15px;">
        <option value=""></option>
        @foreach($equipos as $equipo)
        <option>{{$equipo->precio}}</option>
        @endforeach
    </select>
        </div>
      <div class="col col-lg-1" style=" height: 38px; border: 1PX solid black; padding:0;">
          <input name='dia5' type="number" class="form-control" style="height: 36px; font-size: 1.3em; padding:0 0 0 15px;">
        </div>
        <div class="col col-lg-3" style=" height: 38px; border: 1PX solid black; padding:0;">
            <input name='imp5'type="number" step="any" class="form-control" style=" height: 36px;font-size: 1.5em; padding:0; text-align: center;">
        </div> 
  </div>
  <!----------------------FILA 6-----------------------> 
  
  
        <div class="row">      
                <img src="../images/banner.jpg" height="5px" width="100%"/>
       </div>
    
         <div class="row" >
        <div class="col col-lg-1" style=" border: 1PX solid black; padding:0; height:32px;">
            <input name='pie6' value="1" type="number" class="form-control"style='height:30px; font-size: 1.2em; padding:0 0 0 20px;'>
        </div>
        <div class="col col-lg-5" style=" border: 1PX solid black;height:32px;">
            <label style="margin-top:5px; height:30px;"> SERVICIO DE FLETE </label>
        </div>
       <div class="col col-lg-2" style=" border: 1PX solid black; padding:0; height:32px;">
        <input name='pre6'  value="300.00" type="number" step="any" class="form-control" style='height:30px; font-size: 1.2em; padding:0; text-align: center;'>
        </div>       
      <div class="col col-lg-1" style=" border: 1PX solid black; padding:0; height:32px;">
        <input name='dia6' value="1" type="number" class="form-control" style='height:30px;font-size: 1.2em; padding:0 0 0 15px; '>
        </div>      
        <div class="col col-lg-3" style="border: 1PX solid black; padding:0;height:32px;">
            <input name='imp6'  type="number" step="any" class="form-control" style='height:30px;font-size: 1.5em; padding:0; text-align: center;'>
        </div> 
  </div>
        
  <!----------------------FILA TOTALES----------------------->
  
    <div class="row" style='margin-bottom:5px;'>
        
        <div class="col col-md-7"  style='font-size: .9em;border:1px solid black;height:99px;'>
            <strong>*REQUISITOS INDISPENSABLES</strong><br>
            <span><strong>A)</strong>PAGO POR ADELANTADO</span>
            <span><strong>B)</strong>INE,CONSTANCIA SITUACION FISCAL,COMPROBANTE DE DOMICILIO.</span>
            <span><strong>C)</strong>FLETE SUCEPTIBLE A CAMBIOS POR DISTANCIA</span>
            <span><strong>D)</strong>DEPOSITO EN GARANTIA</span>
        </div>
           
    <div class="col col-md-5">                
      <div class="form-group row" style="margin-bottom: 1px; height: 30px;">
      <label for="subtotal"  class="col-sm-5 col-form-label" style='border:1px solid black;height: 30px;'>SUBTOTAL</label>
      <div class="col-sm-7" style='border:1px solid black;; padding:0; '>
          <input type="number" name="subtotal" class="form-control" id="subtotal" style=' height:28px;font-size: 1.5em; padding:0; text-align: center;'/></div></div>
             
            <div class="form-group row" style=";margin-bottom: 1px; ;height:30px;">
      <label for="iva" class="col-sm-5 col-form-label" style='border:1px solid black;height:30px;'>IVA</label>
      <div class="col-sm-7" style='border:1px solid black;; padding:0; height:30px;'>
          <select name='iva' type="text" class="form-control" id="iva" style='height:28px; font-size: 1.3em; padding:0 0 0 50px;'>
    <option value="">IVA</option>
        <option>8%</option>
        <option>16%</option>
    </select></div></div>
            
            <div class="form-group row" style=" margin-bottom: 1px; height:38px; ">
      <label for="total" class="col-sm-5 col-form-label" style='border:1px solid black;height: 37px;'>TOTAL</label>
      <div class="col-sm-7" style='border:1px solid black; padding:0; height: 37px;'>
          <input name='total' type="number" class="form-control" id="total" style="height: 35px; font-size: 1.5em; padding:0; text-align: center;"/></div></div>    
    </div>
        
    </div>
    <div style='margin-bottom:5px;'>
        <button type="submit" class="btn btn-primary btn-lg ">GENERAR COTIZACION</button>
        <button type="reset" class="btn btn-danger btn-lg">VACIAR CAMPOS</button>
     </div>
  </div>     
     



   {!! Form::close() !!} 

@endsection
 


@section("pie")
    

   
@endsection