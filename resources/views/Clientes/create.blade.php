@extends("../layouts.plantilla")
<style>
       body,footer,#barra{
             background-image:url("../images/fondo6.jpg"); 
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

<h1>AGREGAR CLIENTES</h1>

 
 
    
{!!Form::open(['method' => 'post' ,  'action' => 'ClientesController@store' , 'files' => true])!!}
@csrf
<div class="container" style='width:50%;'>
      
    
<div class="form-group">
    <label for="cliente">NOMBRE CLIENTE: </label>
    <input name='nombre' type="text" class="form-control" id="cliente" aria-describedby="emailHelp" required="true">
    <div class="float-right">
        <input type="image" id="nom" src="../images/play.png"  width="30">
    <input type="image" id="fin0" src="../images/stop.png"  width="30">
    </div>
    <small id="emailHelp" class="form-text text-muted">Hechele Ganas Mijo.</small>
</div>
  <div class="form-group">
    <label for="empresa">EMPRESA: </label>
    <input name='empresa' type="text" class="form-control" id="empresa">
    <div class="float-right">
    <input type="image"  id="emp" src="../images/play.png"  width="30">
    <input type="image" id="fin1"src="../images/stop.png"  width="30">
    </div>
  </div>
<div class="form-group">
    <label for="contacto">TELEFONO: </label>
    <input name='contacto' type="tel" class="form-control" id="contacto"  placeholder="(664)333-22-11">
    <div class="float-right">
    <input type="image" id="tel" src="../images/play.png"  width="30">
    <input type="image" id="fin2" src="../images/stop.png"  width="30">
    </div>
  </div>
<div class="form-group">
    <label for="email">CORREO ELECTRONICO: </label>
    <input name='email' type="email" class="form-control" id="email" placeholder="example@mail.com">
    <div class="float-right">
    <input type="image"  id="mail" src="../images/play.png"  width="30">
    <input type="image" id="fin3" src="../images/stop.png"  width="30">
    </div>
  </div>
<div>
    <input name='fotoINE' type="file" id="foto" style="margin-bottom: 15px">
</div>
<div>
        <button type="submit" class="btn btn-primary btn-lg btn-block">AGREGAR CLIENTE</button>
        <button type="reset" class="btn btn-secondary btn-lg btn-block">VACIAR CAMPOS</button>
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