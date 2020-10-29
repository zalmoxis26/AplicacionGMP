<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Clientes;

class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
         $name=$request->get('nombre');
        $emp=$request->get('empresa');
        $mail=$request->get('email');
        
        $clientes=Clientes::orderBy('nombre', 'ASC')
                ->Clientes($name,$emp,$mail)
                ->paginate(8);
        
       return view("Clientes.index", compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Clientes.create');
       
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $clientes=$request->all();
        
//-----SI SE SUBIO FOTO,ALMACENAR NOMBRE DE LA FOTO EN BD Y LA FOTO EN IMAGES-->  
        if($Imagen=$request->file('fotoINE')){  
            
            $nombreImagen=$Imagen->getClientOriginalName();
            
            $Imagen->move('images/clientes',$nombreImagen);
            
          $clientes['fotoINE']=$nombreImagen;
            
            }
 //-----FIN SE SUBIO FOTO,ALMACENAR NOMBRE DE LA FOTO EN BD Y LA FOTO EN IMAGES-->             
        
        Clientes::create($clientes);
        
        return redirect('/Clientes');     
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
        $cliente=Clientes::findOrFail($id);
        
         return view('Clientes.edit', compact('cliente'));
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
         $Cliente=Clientes::findOrFail($id);
         $registroNvo=$request->all(); 
         
//-----SI SE SUBIO FOTO,ALMACENAR NOMBRE DE LA FOTO EN BD Y LA FOTO EN IMAGES-->  
        if($Imagen=$request->file('fotoINE')){  
            
            $nombreImagen=$Imagen->getClientOriginalName();
            
            $Imagen->move('images/clientes',$nombreImagen);
            
            $registroNvo['fotoINE']=$nombreImagen;
            }
            
 //-----FIN SE SUBIO FOTO,ALMACENAR NOMBRE DE LA FOTO EN BD Y LA FOTO EN IMAGES-->             
        
         $Cliente->update($registroNvo);
         
         return redirect('/Clientes');
            
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cliente=Cliente::findOrFail($id);
        $cliente->delete();
        return redirect('/Clientes');
    }
}
