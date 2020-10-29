@extends("../Pedidos.plantilla")
<style>
#principal{
         
        width:80%; 
        
        padding: 20px;
        min-width: 500px;
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

<h1>EDITAR PEDIDOS</h1>

{!!Form::model($pedido, ['method' => 'PATCH' ,  'action' => ['PedidosController@update', $pedido->id ] , 'files' => true])!!}

<div class="container" id="principal">
  
    <div class="row">  
       <div class="container col col-lg-6"> 
          <div class="form-group">
            <label for="precio">CLIENTE: </label>
            <select name='cliente_id' type="text" class="form-control" id="email" required="true" value="{{$pedido->cliente_id}}">
                <option>{{$pedido->cliente_id}}</option>
            @foreach($cliente as $clientes)
                 <option>{{$clientes->nombre}}</option>
        @endforeach
            </select>  
        </div> 
    </div>
        
        <div class="container col col-lg-2" id="secundario">
    <div class="form-group">
    <label for="pagado">PAGO: </label>
    <select name='pagado' type="text" class="form-control" value="{{$pedido->pagado}}">
        <option>{{$pedido->pagado}}</option>
        <option>NO</option>
        <option>SI</option>
        <option>PARCIAL</option>
    </select>   
</div>
</div>    
     <div class="container col col-lg-4">
        <div class="form-group">
            <label for="precio">OBRA: </label>
            <input name='obra' type="text" class="form-control" id="email" value="{{$pedido->obra}}" >
        </div>
    </div>
</div>    
        
         
    
    <div class="row">
        <div class="container col col-lg-4">
            <div class="form-group">
            <label for="equipo">REMISION: </label>
                <input name='rem' type="text" class="form-control" id="cliente" aria-describedby="emailHelp" required="true" value="{{$pedido->rem}}">
                    <small id="emailHelp" class="form-text text-muted">Hechele Ganas Mijo.</small>
            </div>
        </div>    
    
        <div class="container col col-lg-4">   
            <div class="form-group">
            <label for="numero">FECHA REMISION: </label>
                <input name='fechaRem' type="date" class="form-control" id="empresa" value="{{$pedido->fechaRem}}">
            </div>
        </div>
    </div>    
           
        
    <div class="row">
        <div class="container col col-lg-4">
            <div class="form-group">
                <label for="piezas">DEVOLUCION: </label>
                <input name='dev' type="text" class="form-control" id="contacto" value="{{$pedido->dev}}">
            </div>
        </div>    
    
        <div class="container col col-lg-4">   
            <div class="form-group">
                <label for="precio">FECHA DEVOLUCION: </label>
                <input name='fechaDev' type="date" class="form-control" id="email" value="{{$pedido->fechaDev}}">
            </div>
        </div>
    </div>    
        
    <div class="row"> 
        
    <div class="container col col-lg-6">    
        <div class="form-group">
            <label for="precio">EQUIPO: </label>
            <select name='equipo_id' type="text" class="form-control dynamic" id="equipo" data-dependent='precio' value="{{$pedido->equipo_id}}">
                <option>{{$pedido->equipo_id}} </option>
                @foreach($equipos as $equipo)
                <option>{{$equipo->nombre}}</option>
        @endforeach
            </select>
        </div>
    </div>    
        
     <div class="container col col-lg-2">
        <div class="form-group">
            <label for="precio">PIEZAS: </label>
            <input name='piezas' step="0.5" type="number" class="form-control" id="email" value="{{$pedido->piezas}}">
        </div> 
    </div>   
        
    <div class="container col col-lg-2">
        <div class="form-group">
            <label for="precio">PRECIO: </label>
            <input name='precio_id' type="number" class="form-control" value="{{$pedido->precio_id}}">
        </div>
    </div>
        
    <div class="container col col-lg-2">
        <div class="form-group">
            <label for="precio">DIAS: </label>
            <input name='dias' type="number" class="form-control" id="email" value="{{$pedido->dias}}">
        </div>    
    </div>          
  </div>
    
    
        <nav class='navbar' style='align-content:center;'>
        <button type="submit" class="btn btn-primary">EDITAR EQUIPO</button>
  
   
        <button type="reset" class="btn btn-secondary">VACIAR CAMPOS</button>     
      
        
{!! Form::close() !!}

    {!!Form::model($pedido, ['method' => 'DELETE' ,  'action' => ['PedidosController@destroy', $pedido->id ] , 'files' => true])!!}
        <button  id="Eliminar" type="submit" class="btn btn-danger ">BORRAR EQUIPO</button>
    </nav>
    
    
</div>  

{!! Form::close() !!}



@endsection



@section("pie")

   
@endsection