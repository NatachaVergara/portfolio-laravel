<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use RealRashid\SweetAlert\Facades\Alert;

class SkillController extends Controller
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
        //
        $skills = Skill::all();
        return view('skill.skill_index')->with('skills', $skills);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        $skill = new Skill;
        if ($request->hasFile('skill_imagen')) {
            $file = $request->file('skill_imagen');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('upload/skills', $filename);
            $skill->path = $filename;
            $skill->save();
            Alert::success('Nueva imagen guardada');
            return redirect('/skills');
        } else {
            Alert::error('No ha seleccionado ninguna imagen a guardar');
            return redirect('/skills');
        }
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
        $skill = Skill::find($id);
        //Tengo que poner el name que esta en el formulario
        $destination = 'upload/skills' . $skill->skill_imagen;

        if (File::exists($destination)) {
            File::delete($destination);
            $skill->delete();
            toast('Eliminado con exito!', 'success');
            return redirect('/skills');
        } else {
            toast('No se ha podido eliminar', 'error');
            return redirect('/skills');
        }
    }
}
