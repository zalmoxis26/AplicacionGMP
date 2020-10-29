<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Equipos;

class EquiposController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $peticion)
    {
        $equipo=$peticion->get('nombre');
        
        $equipos= Equipos::orderBy('nombre', 'ASC')
                ->Equipo($equipo)
                ->paginate(5);
        
        return view('Equipos.index', compact('equipos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Equipos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $equipos=$request->all();
        
        //-----SI SE SUBIO FOTO,ALMACENAR NOMBRE DE LA FOTO EN BD Y LA FOTO EN IMAGES-->  
        if($Imagen=$request->file('foto')){  
            
            $nombreImagen=$Imagen->getClientOriginalName();
            
            $Imagen->move('images',$nombreImagen);
            
            $equipos['foto']=$nombreImagen;
       
            }
 //-----FIN SE SUBIO FOTO,ALMACENAR NOMBRE DE LA FOTO EN BD Y LA FOTO EN IMAGES-->
        
            Equipos::create($equipos);
            
            return redirect('/Equipos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $equipo=Equipos::findOrFail($id);
        
        return view('Equipos.edit', compact('equipo'));
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
        $equipo=Equipos::findOrFail($id);
        
        $equipoNvo=$request->all();
        
        //-----SI SE SUBIO FOTO,ALMACENAR NOMBRE DE LA FOTO EN BD Y LA FOTO EN IMAGES-->  
        if($Imagen=$request->file('foto')){  
            
            $nombreImagen=$Imagen->getClientOriginalName();
            
            $Imagen->move('images',$nombreImagen);
            
        $equipoNvo['foto']=$nombreImagen;
       
            }
 //-----FIN SE SUBIO FOTO,ALMACENAR NOMBRE DE LA FOTO EN BD Y LA FOTO EN IMAGES-->
        
            $equipo->update($equipoNvo);
            
            return redirect('/Equipos');
        
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $equipo=Equipo::findOrFail($id);
        $equipo->delete();
        return redirect('/Equipos');
    }
}
