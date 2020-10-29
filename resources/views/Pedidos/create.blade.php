@extends("../Pedidos.plantilla")
<style>
    #principal{
    margin:auto;
        width: 80%; 
        min-width: 500px;
    } 
    
    #secundario,#terciario{
        margin: 10px auto;
    }
   
    
    
     body,footer,#barra{
             background-image:url("/images/fondo15.jpg"); 
             background-size: 100%;
             background-repeat: no-repeat;
        }
        label{
          color:white;
            font-size: 1.2em;
        }
</style>

@section("cabecera")






@endsection



@section("contenido")

<h1>AGREGAR PEDIDO</h1>

 
 
    
{!!Form::open(['method' => 'post' ,  'action' => 'PedidosController@store' , 'files' => true])!!}
@csrf
<div class="row" id="principal">

<div class="container col col-lg-7" id="secundario">
    <div class="form-group">
    <label for="precio">CLIENTE: </label>
    <select name='cliente_id' type="text" class="form-control" id="email">
        <option value="">SELECCIONE CLIENTE</option>
        @foreach($cliente as $clientes)
        <option>{{$clientes->nombre}}</option>
        @endforeach
    </select>  
    <div class="float-right">
    <input type="image"  id="mail" src="../images/play.png"  width="30">
    <input type="image" id="fin3" src="../images/stop.png"  width="30">
    </div>
    </div>
</div>
   <div class="container col col-lg-2" id="secundario">
    <div class="form-group">
    <label for="pagado">PAGO: </label>
    <select name='pagado' type="text" class="form-control">
        <option>NO</option>
        <option>SI</option>
        <option>PARCIAL</option>
    </select>   
</div>
</div>
</div>    

<div class="row" style="width:80%;margin-left: 10%; " >

<div class="container col col-lg-7">
      
    
<div class="form-group">
    <label for="equipo">REMISION: </label>
    <input name='rem' type="text" class="form-control" id="cliente" aria-describedby="emailHelp" required="true">
    <div class="float-right">
        <input type="image" id="nom" src="../images/play.png"  width="30">
    <input type="image" id="fin0" src="../images/stop.png"  width="30">
    </div>
    <small id="emailHelp" class="form-text text-muted">Hechele Ganas Mijo.</small>
</div>
    
<div class="form-group">
    <label for="piezas">DEVOLUCION: </label>
    <input name='dev' type="text" class="form-control" id="contacto" value="EN OBRA">
    <div class="float-right">
    <input type="image" id="tel" src="../images/play.png"  width="30">
    <input type="image" id="fin2" src="../images/stop.png"  width="30">
    </div>
  </div>
      
<div class="form-group">
    <label for="precio">EQUIPO: </label>
    <select name='equipo_id' type="text" class="form-control dynamic" id="equipo" data-dependent='precio'>
       <option value=''> SELECCCIONE EQUIPO</option>
       @foreach($equipos as $equipo)
        <option value='{{$equipo->nombre}}'>{{$equipo->nombre}}</option>
        @endforeach
    </select>
    <div class="float-right">
    <input type="image"  id="mail" src="../images/play.png"  width="30">
    <input type="image" id="fin3" src="../images/stop.png"  width="30">
    </div>
  </div> 
    
    <div class="form-group">
    <label for="precio">OBRA: </label>
    <input name='obra' type="text" class="form-control" id="email" >
    <div class="float-right">
    <input type="image"  id="mail" src="../images/play.png"  width="30">
    <input type="image" id="fin3" src="../images/stop.png"  width="30">
    </div>
  </div>
    
    
</div>
    
    
    
 <!----------SEGUNDA COLUMNA------------------------------------------->
    
    <div class="container col col-lg-5" style=' margin: 0;'> 
       
    <div class="form-group">
    <label for="numero">FECHA REMISION: </label>
    <input name='fechaRem' type="date" class="form-control" id="empresa" >
    <div class="float-right">
    <input type="image"  id="emp" src="../images/play.png"  width="30">
    <input type="image" id="fin1"src="../images/stop.png"  width="30">
    </div>
    <small id="emailHelp" class="form-text text-muted">Hechele Ganas Mijo.</small>
  </div>    
        
   <div class="form-group">
    <label for="precio">FECHA DEVOLUCION: </label>
    <input name='fechaDev' type="date" class="form-control" id="email" placeholder="100.00">
    <div class="float-right">
    <input type="image"  id="mail" src="../images/play.png"  width="30">
    <input type="image" id="fin3" src="../images/stop.png"  width="30">
    </div>
  </div>     
        
  
    <div class="form-group">
    <label for="precio">PRECIO: </label>
    <select name='precio_id' type="number" class="form-control dynamic" id="precio" data-dependent='equipo'>
        <option value="">PRECIO</option>
       @foreach($precios as $precio)
        <option>{{$precio->precio}}</option>
        @endforeach
    </select>
  </div> 
    {{csrf_field()}}
   
    
    <div class="form-group">
    <label for="precio">PIEZAS: </label>
    <input name='piezas' step="0.5" type="number" class="form-control" id="email" >
    <div class="float-right">
    <input type="image"  id="mail" src="../images/play.png"  width="30">
    <input type="image" id="fin3" src="../images/stop.png"  width="30">
    </div>
  </div> 
    
    
    </div>  
    
 <div id="terciario">
        <button type="submit" class="btn btn-primary btn-lg ">AGREGAR PEDIDO</button>
        <button type="reset" class="btn btn-secondary btn-lg">VACIAR CAMPOS</button>
        </div>
      </div> 
  
</div>

{!! Form::close() !!}


   


@endsection


   


@section("pie")








  <script>
             
        var nom=document.getElementById("nom")
        var emp=document.getElementById("emp");
        var tel=document.getElementById("tel");
        var mail=document.getElementById("mail");
        
        var fin0=document.getElementById("fin0");
        var fin1=document.getElementById("fin1");
        var fin2=document.getElementById("fin2");
        var fin3=document.getElementById("fin3");
        
        var cliente=document.getElementById("cliente");
        var empresa=document.getElementById("empresa");
        var contacto=document.getElementById("contacto");
        var email=document.getElementById("email");
        
         let rec = new webkitSpeechRecognition();
    	rec.lang = "es-MX";
    	rec.continuous = true;
    	rec.interimResults =false;
        
 nom.addEventListener("click", function(){
    rec.start(); 
    	rec.onresult = function (e){
            var hablado= e.results;
            var frase= hablado[hablado.length -1][0].transcript;
            cliente.value+=frase;
        };
        
    });
        
        emp.addEventListener("click", function(){
    rec.start(); 
    	rec.onresult = function (e){
            var hablado= e.results;
            var frase= hablado[hablado.length -1][0].transcript;
            empresa.value+=frase;
        };
    });     
           
        tel.addEventListener("click", function(){
    rec.start(); 
    	rec.onresult = function (e){
            var hablado= e.results;
            var frase= hablado[hablado.length -1][0].transcript;
            contacto.value+=frase;
        };
      }); 
        
        mail.addEventListener("click", function(){
    rec.start(); 
    	rec.onresult = function (e){
            var hablado= e.results;
            var frase= hablado[hablado.length -1][0].transcript;
            email.value+=frase;
        };
  
 });
 
 fin0.addEventListener("click", function(){
     rec.abort();
 });
 fin1.addEventListener("click", function(){
     rec.abort();
 }); 
 fin2.addEventListener("click", function(){
     rec.abort();
 }); 
 fin3.addEventListener("click", function(){
     rec.abort();
 }); 
 
 
 
 
 
 
            </script> 
@endsection