@extends("../layouts.plantillaIndex")
<style>
               table{
                   padding: 0;
                   text-align: center;
               }   
    
</style>

@section("cabecera")






@endsection



@section("contenido")

<h1>LISTA DE CLIENTES</h1>

<table border="1" class="table table-responsive-sm">
    @csrf
 <thead>
    <tr>
        <th>ID</th>  
        <th>CLIENTE</th>
        <th>EMPRESA</th>
        <th>CONTACTO</th>
        <th>EMAIL</th>
        <th>FOTO</th>
        
    </tr>
@foreach($clientes as $cliente)
<tr>
    <td><a href="{{route('Clientes.edit',$cliente->id)}}">{{$cliente->id}}</a></td>
    <td><p>{{$cliente->nombre}}</p></td>
    <td><p>{{$cliente->empresa}}</p></td>
    <td><p>{{$cliente->contacto}}</p></td>
    <td><p>{{$cliente->email}}</p></td>
    <td><img src="/images/clientes/{{$cliente->fotoINE ? $cliente->fotoINE :  'ine.png'}}" width="50"/></td>
   
 @endforeach 
</table>
 
 





    

@endsection
 


@section("pie")
    

   
@endsection