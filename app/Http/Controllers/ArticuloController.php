<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Articulo;

class ArticuloController extends Controller
{
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
        //traigo de mi modelo la informacion que viene de la tabla
        $articulos = Articulo::all();
        //va hasta resources-carpeta articulo-archivo index
        return view('articulo.index')->with('articulos', $articulos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //El create lo que hace es redirijirme a la vista donde esta el formulario para ingresar la informacion de los articulos y esta conectado con el store que esta abajo.
        return view('articulo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   //En el request van a entrar todos los values de los inputs que llegan del formulario de la vista create
        //Esto se activa cuando el usuario realiza el submit a crear
        $articulo = new Articulo();
        $articulo->codigo = $request->get('codigo');
        $articulo->descripcion = $request->get('descripcion');
        $articulo->cantidad = $request->get('cantidad');
        $articulo->precio = $request->get('precio');

        $articulo->save();
        return redirect('/articulos');
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
        //El edit lo que hace es redirijirme a la vista donde esta el formulario para ingresar actualizar la informacion de los articulos, esta recibe por parametro el id para realizar la busqueda especifica en la tabla, por eso se necesita el id. A su vez esta conectado con la funcion update mas abajo
        $articulo = Articulo::find($id);
        return view('articulo.edit')->with('articulo', $articulo);
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
        //En el request van a entrar todos los values de los inputs que llegan del formulario
        //Esto se activa cuando el usuario realiza el submit a guardar cambios
        $articulo = Articulo::find($id);
        $articulo->codigo = $request->get('codigo');
        $articulo->descripcion = $request->get('descripcion');
        $articulo->cantidad = $request->get('cantidad');
        $articulo->precio = $request->get('precio');

        $articulo->save();
        return redirect('/articulos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $articulo = Articulo::find($id);
        $articulo->delete();
        return redirect('/articulos');
    }
}
