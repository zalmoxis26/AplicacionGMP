@extends("../Equipos.plantillaIndex")

<style>
    
     table{
                   padding: 0;
                   text-align: center;
               } 
                           
        
               
</style>
@section("cabecera")






@endsection



@section("contenido")

<h1>LISTA DE EQUIPOS</h1>

<table border="1" class="table table-responsive-sm">
    @csrf
 <thead>
    <tr>
        <th>ID</th>  
        <th>EQUIPO</th>
        <th>NUMERO</th>
        <th>PIEZAS</th>
       <th>PRECIO</th>
        <th>FOTO</th>
        
    </tr>
@foreach($equipos as $equipo)
<tr>
    <td><a href="{{route('Equipos.edit',$equipo->id)}}">{{$equipo->id}}</a></td>
    <td>{{$equipo->nombre}}</td>
    <td>{{$equipo->numero}}</td>
    <td>{{$equipo->piezas}}&nbsp;</td>
    <td>{{$equipo->precio}}&nbsp;</td>
    <td><img src="images/{{$equipo->foto ? $equipo->foto : 'andamio.jpg'}}"  width="150" height="80" /></td>

</tr>
@endforeach
</table>


    

@endsection
 


@section("pie")
    

   
@endsection