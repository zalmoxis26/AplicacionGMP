


<table>
    
      <tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr> 
    <thead>
    <tr>
        <th>REM</th>  
        <th>FEC REM</th>
        <th>DEV</th>
        <th>FEC DEV</th>
        <th>CLIENTE</th>
        <th>EQUIPO</th>
        <th>PRECIO</th>
        <th>PIEZAS</th>
        <th>DIAS</th>
        <th>IMPORTE</th>
        <th>OBRA</th>
        <th>PAGO?</th>
    </tr>
    </thead>
    <tbody>
    @foreach($pedidos as $pedido)
        <tr>
    <td>{{$pedido->rem}}</td>
    <td>{{\Carbon\Carbon::parse($pedido->fechaRem)->format('d/M/y')}}</td>
    <td>{{$pedido->dev}}</td>
    <td>{{\Carbon\Carbon::parse($pedido->fechaDev)->format('d/M/y')}}</td>
    <td>{{$pedido->cliente_id}}&nbsp;</td>
    <td>{{$pedido->equipo_id}}&nbsp;</td>
    <td>{{number_format($pedido->precio_id,2)}}&nbsp;</td>
    <td>{{$pedido->piezas}}</td>
    <td>{{$pedido->dias}}&nbsp;</td>
    <td>{{number_format($pedido->importe,2)}}</td>
    <td>{{$pedido->obra}}&nbsp;</td>
    <td>{{$pedido->pagado}}</td>
        </tr>
    @endforeach
    </tbody>
</table>