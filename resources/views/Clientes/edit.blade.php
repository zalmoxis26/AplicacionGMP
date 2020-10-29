@extends("../layouts.plantilla")
<style>
       body,footer,#barra{
             background-image:url("/images/fondo6.jpg"); 
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

<h1>EDITAR CLIENTES</h1>

{!!Form::model($cliente, ['method' => 'PATCH' ,  'action' => ['ClientesController@update', $cliente->id ] , 'files' => true])!!}


    
<div>
        <img class="rounded mx-auto d-block" src="/images/clientes/{{$cliente->fotoINE ? $cliente->fotoINE : 'ine.png'}}" width="250px"/>
    </div>

<div class="container">
     
    <div>
    <input name='fotoINE' type="file" id="foto" style="margin-bottom: 15px">
    </div> 
     
    <div class="form-row">    
<div class="form-group col-md-6">
    <label for="cliente">NOMBRE CLIENTE: </label>
    <input name='nombre' type="text" class="form-control" id="cliente" aria-describedby="emailHelp" required="true" value="{{$cliente->nombre}}">
    <small id="emailHelp" class="form-text text-muted">Hechele Ganas Mijo.</small>
  </div>
     
      <div class="form-group col-md-6">
    <label for="empresa">EMPRESA: </label>
    <input name='empresa' type="text" class="form-control" id="empresa" value="{{$cliente->empresa}}">
  </div>
  </div> 
    <div class="form-row">  
<div class="form-group col-md-6 ">
    <label for="contacto">TELEFONO: </label>
    <input name='contacto' type="tel" class="form-control" id="contacto"  placeholder="(664)333-22-11" value="{{$cliente->contacto}}">
  </div>
     
<div class="form-group col-md-6">
    <label for="email">CORREO ELECTRONICO: </label>
    <input name='email' type="email" class="form-control" id="email" placeholder="example@mail.com" value="{{$cliente->email}}">
  </div>
    </div>
       
    <nav class='navbar' style='align-content:center;'>
        <button type="submit" class="btn btn-primary">EDITAR CLIENTE</button>
  
   
        <button type="reset" class="btn btn-secondary">VACIAR CAMPOS</button>     
      
        
{!! Form::close() !!}

    {!!Form::model($cliente, ['method' => 'DELETE' ,  'action' => ['ClientesController@destroy', $cliente->id ] , 'files' => true])!!}
        <button  id="Eliminar" type="submit" class="btn btn-danger ">BORRAR CLIENTE</button>
    </nav>

</div>
    
</div>
</div>
{!! Form::close() !!}



@endsection



@section("pie")

   
@endsection