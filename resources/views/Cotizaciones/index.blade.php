@extends("../Cotizaciones.plantillaIndex")
<style>
h1{
      -webkit-text-fill-color: white; 
  -webkit-text-stroke-width: 1px; -webkit-text-stroke-color: black; text-shadow:2px 0 0 navy;  
    }
    
    
    
</style>
@section("cabecera")






@endsection



@section("contenido")

<h1>LISTA DE COTIZACIONES</h1>

<table border="1" class="table table-responsive-sm ">
    @csrf
 <thead >
    <tr>
       
        <th>ID</th>  
        <th>CLIENTE</th>
        <th>FECHA</th>
        <th>DIAS</th>
        <th>EQUIPO1</th>
        <th>SUBTOTAL</th>
        <th>TEL</th>
        <th>MAIL</th>
        
    </tr>
@foreach($cotizaciones as $cotizacion)
<tr>
    <td><a href="{{route('Cotizaciones.edit',$cotizacion->id)}}">{{$cotizacion->id}}</a></td>
    <td><a href="{{route('CotizacionPDF',$cotizacion->id )}}">{{$cotizacion->cliente}}&nbsp;</a></td>
    <td>{{$cotizacion->fechaRem}}</td>
    <td>{{$cotizacion->dias}}</td>
    <td>{{$cotizacion->equip1}}&nbsp;</td>
    <td>{{$cotizacion->subtotal}}&nbsp;</td>
    <td>{{$cotizacion->celular}}&nbsp;</td>
    <td>{{$cotizacion->mail}}&nbsp;</td>

    
</tr>
@endforeach
</table>


    

@endsection
 


@section("pie")
    <div class="container" style="display: flex; justify-content: center;">{!! $cotizaciones->render()!!}</div>

   
@endsection