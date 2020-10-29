


<table>
    
    
    <tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
     
    <tr>
        <td>CLIENTE</td>
        <td  colspan="3">{{$pedidos->first()->cliente_id}}</td> 
    </tr>
    <tr>
        <td>FECHA</td>
        <td  colspan="3">{{\Carbon\Carbon::now()->format('d  M  yy')}}</td> 
    </tr>
    
    <thead>
    <tr>
        <th>REM</th>  
        <th>FEC REM</th>
        <th>DEV</th>
        <th>FEC DEV</th>
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
    <td>{{$pedido->equipo_id}}&nbsp;</td>
    <td>{{number_format($pedido->precio_id,2)}}&nbsp;</td>
    <td>{{$pedido->piezas}}</td>
    <td>{{number_format($pedido->dias,0)}}&nbsp;</td>
    <td>{{$pedido->importe}}</td>
    <td>{{$pedido->obra}}&nbsp;</td>
    <td>{{$pedido->pagado}}</td>
        </tr>
    @endforeach
    </tbody>
    <tr><td></td><td></td><td></td><td></td><td></td><td></td>
        <td colspan="2">SUBTOTAL</td>
    </tr>
    <tr><td></td><td></td><td></td><td></td><td></td><td></td>
        <td colspan="2">IVA</td>
    </tr>
    <tr><td></td><td></td><td></td><td></td><td></td><td></td>
        <td colspan="2">TOTAL</td>
    </tr>
</table>