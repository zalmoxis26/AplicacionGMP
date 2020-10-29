<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cotizaciones;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Barryvdh\DomPDF\Facade as PDF;

class CotizacionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $peticion)
    {
        $cliente=$peticion->get('cliente');
        
        $cotizaciones=Cotizaciones::orderBy('fechaRem', 'DESC')
                ->Cotizacion($cliente)
                ->paginate(8);
        
        return view('Cotizaciones.index', compact('cotizaciones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pedidos=DB::select("SELECT obra FROM pedidos where obra!='null'");
        $clientes=DB::select("SELECT email,nombre,contacto FROM clientes");
        $equipos=DB::select('SELECT nombre, precio FROM equipos');        
        
        return view('Cotizaciones.create', compact('pedidos','clientes','equipos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {       
        $coti=$request->all();    
        
        $fecharem = Carbon::parse($coti['fechaDev']);
        $fechadev = Carbon::parse($coti['fechaRem']);
        $dias = $fecharem->diffInDays($fechadev);
        $coti['dias']=$dias;
        
        $coti['imp1']=$coti['pie1']*$coti['pre1']*$coti['dia1'];
        $coti['imp2']=$coti['pie2']*$coti['pre2']*$coti['dia2'];
        $coti['imp3']=$coti['pie3']*$coti['pre3']*$coti['dia3'];
        $coti['imp4']=$coti['pie4']*$coti['pre4']*$coti['dia4'];
        $coti['imp5']=$coti['pie5']*$coti['pre5']*$coti['dia5'];
        $coti['imp6']=$coti['pie6']*$coti['pre6']*$coti['dia6'];
        
        $coti['subtotal']=$coti['imp1']+ $coti['imp2']+$coti['imp3']+$coti['imp4']+$coti['imp5']+$coti['imp6'];
        
        if($coti['iva']==='16%')   {$coti['iva']=1.16;}    else{$coti['iva']=1.08;}
    
        $coti['total']=$coti['subtotal']*$coti['iva']; 
        
        if($coti['imp2']==0){ 
        $coti['imp2']=NULL;}
        
        if($coti['imp3']==0){
        $coti['imp3']=NULL;}
        
        if($coti['imp4']==0){
        $coti['imp4']=NULL;}
        
        if($coti['imp5']==0){
        $coti['imp5']=NULL;}
        
        if($coti['imp6']==0){
        $coti['imp6']=NULL;}
        
        
        Cotizaciones::create($coti);
        
        
        return redirect('/Cotizaciones');
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
       $cotis= Cotizaciones::findOrFail($id); 
       $pedidos=DB::select("SELECT obra FROM pedidos where obra!='null'");
        $clientes=DB::select("SELECT email,nombre FROM clientes");
        $equipos=DB::select('SELECT * FROM equipos');  
       
       return view('Cotizaciones.edit', compact('cotis','pedidos','clientes','equipos'));
       
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
        $cot= Cotizaciones::findOrFail($id); 
        $cotiNva= $request->all();
        
        if($cotiNva['dia1']===FALSE){
        $fecharem = Carbon::parse($cotiNva['fechaDev']);
        $fechadev = Carbon::parse($cotiNva['fechaRem']);
        $dias = $fecharem->diffInDays($fechadev);
        $cotiNva['dias']=$dias;
        }
        $cotiNva['imp1']=$cotiNva['pie1']*$cotiNva['pre1']*$cotiNva['dia1'];
        $cotiNva['imp2']=$cotiNva['pie2']*$cotiNva['pre2']*$cotiNva['dia2'];
        $cotiNva['imp3']=$cotiNva['pie3']*$cotiNva['pre3']*$cotiNva['dia3'];
        $cotiNva['imp4']=$cotiNva['pie4']*$cotiNva['pre4']*$cotiNva['dia4'];
        $cotiNva['imp5']=$cotiNva['pie5']*$cotiNva['pre5']*$cotiNva['dia5'];
        $cotiNva['imp6']=$cotiNva['pie6']*$cotiNva['pre6']*$cotiNva['dia6'];
        
        $cotiNva['subtotal']=$cotiNva['imp1']+ $cotiNva['imp2']+$cotiNva['imp3']+$cotiNva['imp4']+$cotiNva['imp5']+$cotiNva['imp6'];
        
        if($cotiNva['iva']==='16%')   {$cotiNva['iva']=1.16;}    else{$cotiNva['iva']=1.08;}
    
        $cotiNva['total']=$cotiNva['subtotal']*$cotiNva['iva']; 
        
        if($cot['imp2']==0){ 
        $cot['imp2']=" ";}
        
        if($cot['imp3']==0){
        $cot['imp3']=" ";}
        
        if($cot['imp4']==0){
        $cot['imp4']=" ";}
        
        if($cot['imp5']==0){
        $cot['imp5']=" ";}
        
        if($cot['imp6']==0){
        $cot['imp6']=" ";}
        
        
        
        $cot->update($cotiNva);
        
        return redirect('/Cotizaciones');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    
    
    public function CreateNvo()
    {
      
        
        $pedidos=DB::select("SELECT obra FROM pedidos where obra!='null'");
        $clientes=DB::select("SELECT email,nombre,contacto FROM clientes");
        $equipos=DB::select('SELECT nombre, precio FROM equipos');        
        
        return view('Cotizaciones.CreateNvo' ,compact('pedidos','clientes','equipos'));
    }
    
    
    public function Pdf($id){
        
  
        
        $cotis=Cotizaciones::findOrFail($id); 
        $pdf= PDF::loadView('Cotizaciones.PDF',compact('cotis'));
        
        return $pdf->download('Cotizacion.pdf');
        
    }
    
    
}
