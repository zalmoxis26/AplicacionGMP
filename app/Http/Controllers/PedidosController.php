<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Pedidos;
use Carbon\Carbon;
//use Barryvdh\DomPDF\Facade as PDF;
use Barryvdh\DomPDF\Facade;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\DesdeFecha;
use App\Exports\ExportarTodos;
use App\Exports\PorCliente;
use App\Exports\ENOBRA as ENOBRA;


class PedidosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $peticion)
    {
        
        $nom=$peticion->get('cliente_id');
        $rem=$peticion->get('rem');
        $dev=$peticion->get('dev');
        $pago=$peticion->get('pagado');
        
       
         
        $pedidos=Pedidos::orderBy('fechaDev', 'ASC')
                ->Pedidos($nom,$rem,$dev,$pago)
                ->Paginate(10);
        

        return view('Pedidos.index', compact('pedidos','nom','rem','dev','pago'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {   
        
        
        $cliente=DB::select('SELECT nombre FROM clientes');
        $equipos=DB::select('SELECT nombre FROM equipos');
        $precios=DB::select('SELECT precio FROM equipos GROUP BY precio');
        
      
        
        return view('Pedidos.create', compact('cliente', 'equipos', 'precios'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $pedido=$request->all();
        
         $fecharem = Carbon::parse($pedido['fechaDev']);
         $fechadev = Carbon::parse($pedido['fechaRem']);
         $dias = $fecharem->diffInDays($fechadev);
        
         
         
         
         $pedido['dias']=$dias;
         $pedido['importe']=$pedido['dias']*$pedido['precio_id']*$pedido['piezas'];
         
         Pedidos::create($pedido);
         
         return redirect('/Pedidos');
         
         
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $cliente=DB::select('SELECT nombre FROM clientes');
        $equipos=DB::select('SELECT nombre,precio FROM equipos ORDER BY nombre');
        $precios=DB::select('SELECT precio FROM equipos GROUP BY precio');
        
        $pedido=Pedidos::findOrFail($id);
        
        return view('Pedidos.edit', compact('pedido','cliente', 'equipos','precios'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       
        $pedido=Pedidos::findOrFail($id);
        $pedidoNvo= $request->all();
        
        if($pedidoNvo['dev']==='EN OBRA'){
        $fecharem = Carbon::parse($pedidoNvo['fechaDev']);
        $fechadev = Carbon::parse($pedidoNvo['fechaRem']);
        $dias = $fecharem->diffInDays($fechadev);
        $pedidoNvo['dias']=$dias;}
        $pedidoNvo['importe']=$pedidoNvo['dias']*$pedidoNvo['precio_id']*$pedidoNvo['piezas'];
         
         
         $pedido->update($pedidoNvo);
        
        return redirect('/Pedidos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pedido=Pedidos::findOrFail($id);
        
        $pedido->delete();
        
        return redirect('/Pedidos');
    }
    
     
    public function Pdf(){
        
  
        
        $pedidos=DB::select("select * from pedidos where pagado='NO'"); 
        $pdf= PDF::loadView('Pedidos.indexPDF',compact('pedidos'))->setPaper('a4', 'landscape');
        
        return $pdf->download('Cotizacion.pdf');
        
    }
    
    public function DesdeFecha($cliente){
        
         $fechaINI=Pedidos::findOrFail($cliente);
         $fechaINI=$fechaINI['fechaRem'];
         /*-----PARA NOMBRE DE ARCHIVO----*/
         $fechaINI2=Carbon::parse($fechaINI)->format('d-M-y');
         $today=Carbon::now()->format('d-M-y');
         $nomArchivo=$fechaINI2 . "_hasta_" .$today;
        /*-------FIN NOMBRE DE ARCHIVO------*/
       return Excel::download(new DesdeFecha("fechaRem","$fechaINI",\Carbon\Carbon::now()),"Pedidos_desde_$nomArchivo.xlsx");
        
    }
    
    public function Todos(){
    
    return Excel::download(new ExportarTodos,'Todos_los_pedidos.xlsx');
        
    }
    public function PorCliente($id){
        
         $cliente=Pedidos::findOrFail($id);
         $nomArchivo= $cliente['cliente_id'] . "_EdoCta_" . Carbon::now()->format('d-M-y'); 
       return Excel::download(new PorCliente($cliente),"$nomArchivo.xlsx");
}

public function ENOBRA(){
    

    $fecha=Carbon::now()->format('d-M-y'); 
    return Excel::download(new ENOBRA,"EN_OBRA_$fecha.xlsx");  
      
    }

}