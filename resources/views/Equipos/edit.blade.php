@extends("../Equipos.plantilla")

<style>
  body,footer,#barra{
             background-image:url("/images/fondo17.jpg"); 
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

<h1>EDITAR EQUIPOS</h1>

{!!Form::model($equipo, ['method' => 'PATCH' ,  'action' => ['EquiposController@update', $equipo->id ] , 'files' => true])!!}


    
<div>
        <img class="rounded mx-auto d-block" src="/images/{{$equipo->foto ? $equipo->foto : 'andamio.jpg'}}" width="250px"/>
    </div>

<div class="container">
     
    <div>
    <input name='foto' type="file" id="foto" style="margin-bottom: 15px">
    </div> 
     
    <div class="form-row">    
<div class="form-group col-md-6">
    <label for="cliente">NOMBRE EQUIPO: </label>
    <input name='nombre' type="text" class="form-control" id="cliente" aria-describedby="emailHelp" required="true" value="{{$equipo->nombre}}">
    <small id="emailHelp" class="form-text text-muted">Hechele Ganas Mijo.</small>
  </div>
     
      <div class="form-group col-md-6">
    <label for="empresa">NUMERO DE EQUIPO : </label>
    <input name='numero' type="text" class="form-control" id="empresa" value="{{$equipo->numero}}">
  </div>
  </div> 
    <div class="form-row">  
<div class="form-group col-md-6 ">
    <label for="contacto">PIEZAS: </label>
    <input name='piezas' type="text" class="form-control" id="contacto"  placeholder="(664)333-22-11" value="{{$equipo->piezas}}">
  </div>
     
<div class="form-group col-md-6">
    <label for="email">PRECIO: </label>
    <input name='precio' type="number" class="form-control" id="email" placeholder="example@mail.com" value="{{$equipo->precio}}">
  </div>
    </div>
       
    <nav class='navbar' style='align-content:center;'>
        <button type="submit" class="btn btn-primary">EDITAR EQUIPO</button>
  
   
        <button type="reset" class="btn btn-secondary">VACIAR CAMPOS</button>     
      
        
{!! Form::close() !!}

    {!!Form::model($equipo, ['method' => 'DELETE' ,  'action' => ['ClientesController@destroy', $equipo->id ] , 'files' => true])!!}
        <button  id="Eliminar" type="submit" class="btn btn-danger ">BORRAR EQUIPO</button>
    </nav>

</div>
    
</div>
</div>
{!! Form::close() !!}



@endsection



@section("pie")

   
@endsection