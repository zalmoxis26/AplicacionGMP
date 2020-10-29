







<h1>LISTA DE PEDIDOS</h1>

<table border="1" class="table table-responsive-sm">
    @csrf
 <thead>
    <tr>
        <th>REM</th>  
        <th>FECHA REM</th>
        <th>DEV</th>
        <th>FECHA DEV</th>
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
    <td>{{$pedido->rem}}</td>
    <td>{{$pedido->fechaRem}}</td>
    <td>{{$pedido->dev}}</td>
    <td>{{$pedido->fechaDev}}&nbsp;</td>
    <td>{{$pedido->cliente_id}}&nbsp;</td>
    <td>{{$pedido->equipo_id}}&nbsp;</td>
    <td>{{$pedido->piezas}}&nbsp;</td>
    <td>{{$pedido->dias}}&nbsp;</td>
    <td>{{$pedido->pagado}}&nbsp;</td>
    <td>{{$pedido->obra}}&nbsp;</td>
    <td>{{$pedido->importe}}&nbsp;</td>
    
</tr>
@endforeach
</table>


    


 


