

<html>
    
    <head>
        <style>
           tr,td{border:solid 1px black;}
           #titulos{
               font-weight: bold;
           }
           
        </style>
    </head>
    
    
    
    <body>
        
        <table style='text-align: center; margin-left: 50px; ' width="90%"  cellpadding="1" >
            
            <tbody>
                <tr>
                    <td colspan="2" rowspan="2"><img src="{{asset('images/logo.png')}}" width="150"/></td>
                    <td colspan="4" style="padding:0 0 10px 0; font-size: 2.3em; color: green; font-weight: bold;"   >RENTAS GMP</td>
                    
                </tr>
                <tr>
                    <td colspan="4">RENTA DE ANDAMIOS DE SEGURIDAD Y EQUIPO MENOR DE CONSTRUCCION. LOPEZ MATEOS #37 
                                    COL. GUADALUPE VICTORIA. C.P 22426. TIJUANA B.C. 
                                    TEL Y FAX 664-624-17-51. CEL 664-161-69-03. 
                                    E-MAIL: POLO_ROLDAN@YAHOO.COM. </td>
                </tr>
            <tr>
                    <td colspan="4" rowspan="4" style="text-align: center;">ATENDIENDO A LA SOLICITUD QUE AMABLEMENTE NOS REALIZO, ME PERMITO PONER A SU CONSIDERACION LA SIGUIENTE COTIZACION Y REQUISITOS PARA RENTA DE MATERIAL DESMONTABLE:</td>
                    <td id="titulos" colspan="2" style="background-color:#999999;">FECHA INICIO</td>
            <tr>
                <td colspan="2" >{{\Carbon\Carbon::parse($cotis->fechaRem)->format('d/M/y')}}</td>
            </tr>
            </tr>   
                
                
                <tr>
                    <td id="titulos" colspan="2" style="background-color:#999999;">FECHA TERMINO</td> 
                    <tr>
                <td colspan="2" >{{\Carbon\Carbon::parse($cotis->fechaDev)->format('d/M/y')}}</td>
            </tr>
                </tr>
                
            
                <tr>
                    <td id="titulos">CLIENTE</td>
                    <td colspan="5" style="text-align:left;">{{$cotis->cliente}}</td>
                </tr>
                <tr>
                    <td id="titulos">EMAIL</td>
                    <td colspan="2">{{$cotis->mail}}</td>
                    <td id="titulos">TELEFONO:</td>
                    <td colspan="2">{{$cotis->contacto}}</td>
                </tr>
                <tr>
                    <td id="titulos">OBRA</td>
                    <td colspan="2">{{$cotis->contacto}}</td>
                    <td id="titulos" colspan="2">DIAS DE RENTA</td>
                    <td>{{$cotis->dias}}</td>
                </tr>
                <tr id="titulos" style="background-color:#999999; text-align: center;">
                    <td colspan="1">PZA</td>
                    <td colspan="2">DESCRIPCION</td>
                    <td colspan="1">P.U.</td>
                    <td colspan="1">JOR</td>
                    <td colspan="1">IMPORTE</td>
                </tr>
                <tr>
                    <td>{{$cotis->pie1}}</td>
                    <td colspan="2">{{$cotis->equip1}}</td>
                    <td>${{$cotis->pre1}}</td>
                    <td>{{$cotis->dia1}}</td>
                    <td>${{$cotis->imp1}}</td>
                </tr>
                
                <tr>
                    <td>{{$cotis->pie2}}</td>
                    <td colspan="2">{{$cotis->equip2}}</td>
                    <td>${{$cotis->pre2}}</td>
                    <td>{{$cotis->dia2}}</td>
                    <td>${{$cotis->imp2}}</td>
                </tr>
                <tr>
                    <td>{{$cotis->pie3}}</td>
                    <td colspan="2">{{$cotis->equip3}}</td>
                    <td>${{$cotis->pre3}}</td>
                    <td>{{$cotis->dia3}}</td>
                    <td>${{$cotis->imp3}}</td>
                </tr>
                <tr>
                    <td>{{$cotis->pie4}}</td>
                    <td colspan="2">{{$cotis->equip4}}</td>
                    <td>${{$cotis->pre4}}</td>
                    <td>{{$cotis->dia4}}</td>
                    <td>${{$cotis->imp4}}</td>
                </tr>
                <tr>
                    <td>{{$cotis->pie5}}</td>
                    <td colspan="2">{{$cotis->equip5}}</td>
                    <td>${{$cotis->pre5}}</td>
                    <td>{{$cotis->dia5}}</td>
                    <td>${{$cotis->imp5}}</td>
                </tr>
                <tr  style="background-color:#999999;">
                    
                    <td colspan="6">&nbsp;</td>
                   
                </tr>
                <tr>
                    <td>{{$cotis->pie6}}</td>
                    <td colspan="2">SERVICIO DE FLETE</td>
                    <td>${{$cotis->pre6}}</td>
                    <td>{{$cotis->dia6}}</td>
                    <td>${{$cotis->imp6}}</td>
                </tr>
                
            <tr>
                    <td colspan="4" rowspan="3" style="text-align: center;"><strong>*REQUISITOS INDISPENSABLES</strong><br>
                                                                            <span><strong>A)</strong>PAGO POR ADELANTADO</span>
                                                                            <span><strong><br>B)</strong>INE,CONSTANCIA SITUACION FISCAL,COMPROBANTE DE DOMICILIO.</span>
                                                                            <span><strong><br>C)</strong>FLETE SUCEPTIBLE A CAMBIOS POR DISTANCIA</span>
                                                                            <span><strong><br>D)</strong>DEPOSITO EN GARANTIA</span></td>
                    <td id="titulos" colspan="1">FECHA </td>
                    <td colspan="1">${{$cotis->subtotal}}</td>
            <tr>
                <td id="titulos" colspan="1" >IVA</td>
                <td colspan="1">{{$cotis->iva}}</td>
            </tr>
            </tr>   
 
                <tr>
                    <td id="titulos" colspan="1">TOTAL</td> 
                    <td colspan="1" >${{$cotis->total}}</td>
                    <tr>
                
            </tr>
                </tr>    
                
            </tbody>
        </table>

        
        
    </body>    

</html>





   
     



 