@extends("../Pedidos.plantillaIndex")
<style>
  td a, a:link,a:visited, a:active{
        text-decoration: none;
        color: black; 
    }
    
    .botones{
        border:1px solid black;
        padding: 2px;
    }
    .botones:hover{
        background-color: blue;
    }
</style>

@section("cabecera")






@endsection



@section("contenido")

<h1>LISTA DE PEDIDOS</h1>

<table border="1" class="table table-responsive-sm">
    @csrf
 <thead>
    <tr>
        <th></th>
        <th>REM</th>  
        <th>FEC REM</th>
        <th>DEV</th>
        <th>FEC DEV</th>
        <th>CLIENTE</th>
        <th>EQUIPO</th>
        <th>PIEZAS</th>
        <th>DIAS</th>
        <th>PAGO</th>
        <th>OBRA</th>
        <th>IMPORTE</th>
        
    </tr>
@foreach($pedidos as $pedido)
<tr>
    <td><img class="botones" title="Exportar Todos Los Registros" type="button"  width='20' src="../images/excel.jpg" onClick="window.location='{{route('Xport_Todos')}}'"/>
        <img class="botones" title="Editar Registro" type="button"  width='20' src="../images/edit.png" onClick="window.location='{{route('Pedidos.edit',$pedido->id)}}'"/>
    <img class="botones" title="Exportar registros EN OBRA" type="button"  width='20' src="../images/enobra.png" onClick="window.location='{{route('Xport_EN OBRA')}}'"/>
    </td>
   
    <td><a href="{{route('Pedidos.edit',$pedido->id)}}" >{{$pedido->rem}}</a></td>
    <td><a title='PRESIONE PARA EXPORTAR POR ESTA FECHA' href="{{route('Xport_Fecha', $pedido->id)}}">{{\Carbon\Carbon::parse($pedido->fechaRem)->format('d/M/y')}}</a></td>
    <td>{{$pedido->dev}}</td>
    <td>{{\Carbon\Carbon::parse($pedido->fechaDev)->format('d/M/y')}}&nbsp;</td>
    <td><a title='PRESIONE PARA EXPORTAR POR ESTE CLIENTE' href="{{route('Xport_Cliente', $pedido->id)}}">{{$pedido->cliente_id}}</a></td>
    <td>{{$pedido->equipo_id}}&nbsp;</td>
    <td>{{$pedido->piezas}}&nbsp;</td>
    <td>{{$pedido->dias}}&nbsp;</td>
    <td>{{$pedido->pagado}}&nbsp;</td>
    <td>{{$pedido->obra}}&nbsp;</td>
    <td>{{$pedido->importe}}&nbsp;</td>
    
</tr>
@endforeach
</table>


    

@endsection
 


@section("pie")
    

   
@endsection