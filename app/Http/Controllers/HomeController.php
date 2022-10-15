<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Precio;
use App\Models\Proyecto;
use App\Models\Skill;

class HomeController extends Controller
{
    public function index()
    {
        $proyectos = Proyecto::all();
        $precios = Precio::all();
        $skills = Skill::all();
        return view('layouts.front_view')
            ->with('proyectos',$proyectos)
            ->with('skills', $skills)
            ->with('precios', $precios) ;
        
    }
}