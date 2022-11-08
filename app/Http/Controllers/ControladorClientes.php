<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clientes;

class ControladorClientes extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // get all clientes sorted by id
        $allClientes = Clientes::orderBy('id', 'desc')->get();
        // NombreVista, Nombre del Parametro, Valor del Parametro
        return view('clientesView', ['clientes' => $allClientes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Return a view to create a new cliente

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $objeto = new Clientes();
        $objeto->nombre = $request->nombre;
        $objeto->apellidos = $request->apellidos;
        $objeto->email = $request->email;

        $objeto->save();
        return $objeto;
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
        $objeto = Clientes::find($id);
        return $objeto;
    }

    public function FindByNameAndId($id, $nombre)
    {
        // echo "id: " . $id . " nombre: " . $nombre;
        // Esto se llama MagicQuery 
        $objeto = Clientes::wherenombreAndId($nombre, $id)->get();
        if ($objeto->count() > 0) {
            return $objeto;
        } else {
            return response()->json([
                'message' => 'No se ha encontrado el cliente con el nombre: ' . $nombre . ' y el id: ' . $id
            ], 404);
        }
        return $objeto;
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
}
