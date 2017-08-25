<?php

namespace App\Http\Controllers;

use App\AreaConocimiento;
use App\Autor;
use App\Libro;
use Illuminate\Http\Request;

class LibrosController extends Controller
{
    public function index()
    {

    }

    public function create()
    {

        $autores = Autor::orderBy('nombre', 'ASC')->pluck('nombre', 'id');
        $areas   = AreaConocimiento::orderBy('nombre', 'ASC')->pluck('nombre', 'id');

        return view('biblioteca.admin.libros.create')
            ->with('areas', $areas)
            ->with('autores', $autores);
    }

    public function store(Request $request)
    {

        $libro = new Libro($request->all());

        $libro->save();

        $libro->autores()->sync($request->autores);
        $libro->areas()->sync($request->areas);

    }
}
