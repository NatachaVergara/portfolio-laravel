<?php

namespace App\Http\Controllers;

use App\Models\Proyecto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use RealRashid\SweetAlert\Facades\Alert;



class ProyectoController extends Controller
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
        $proyectos = Proyecto::all();
        return view('proyecto.proyecto_index')->with('proyectos', $proyectos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('proyecto.proyecto_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $proyecto = new Proyecto;
        $proyecto->titulo = $request->get('titulo');
        $proyecto->link = $request->get('link');
        $proyecto->logo = $request->get('logo');
        $proyecto->tec = $request->get('tec');

        if ($request->hasFile('imagen')) {
            $file = $request->file('imagen');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('upload/proyectos', $filename);
            $proyecto->image = $filename;
        }
        $proyecto->save();
        Alert::success('Nuevo proyecto guardado exitosamente');
        return redirect('/proyectos');
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
        $proyecto = Proyecto::find($id);
        return view('proyecto.proyecto_edit')->with('proyecto', $proyecto);
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

        
        $proyecto = Proyecto::find($id);
        $proyecto->titulo = $request->get('titulo');
        $proyecto->link = $request->get('link');
        $proyecto->logo = $request->get('logo');
        $proyecto->tec = $request->get('tec');

        if ($request->hasFile('imagen')) {
            $destination = 'upload/proyectos' . $proyecto->image;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $file = $request->file('imagen');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $file->move('upload/proyectos', $filename);
            $proyecto->image = $filename;
        }
        $proyecto->update();
        toast('Actualizado', 'success');
        return redirect('/proyectos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {


        $proyecto = Proyecto::find($id);
        $destination = 'upload/proyectos' . $proyecto->image;
        if (File::exists($destination)) {
            File::delete($destination);
        }
        $proyecto->delete();
        return redirect('/proyectos');
    }
}
