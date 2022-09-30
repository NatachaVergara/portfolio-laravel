<?php

namespace App\Http\Controllers;

use App\Models\Precio;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class PrecioController extends Controller
{
    /**Middleware de seguridad, sin autenticacion no se pueden ver esta ruta */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $precios = Precio::all();
        return view('precio.precio_index')->with('precios', $precios);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('precio.precio_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $precio = new Precio;
        $precio->titulo = $request->get('titulo');
        $precio->precio = $request->get('precio');
        $precio->dominio = $request->get('dominio');
        $precio->hosting = $request->get('hosting');
        $precio->almacenamiento = $request->get('almacenamiento');
        $precio->libre = $request->get('libre');
        $precio->telefono = $request->get('telefono');

        $precio->save();
        Alert::success('Nuevo precio guardado exitosamente');
        return redirect('/precios');
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
        return view('precio.precio_edit');
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
