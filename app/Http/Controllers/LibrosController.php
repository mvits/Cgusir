<?php

namespace App\Http\Controllers;

use App\AreaConocimiento;
use App\Autor;
use App\Libro;
use Illuminate\Http\Request;
use Laracasts\Flash\Flash;

class LibrosController extends Controller
{
    public function index()
    {
        $libros = Libro::orderBy('id', 'DESC')->simplePaginate(6);

        return view('biblioteca.admin.libros.index')->with('libros', $libros);
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

        Flash('Registro Exitoso<br>Recurso Bibliográfico: <b>' . $libro->Titulo . '</b>')->success();

        return redirect()->route('libros.index');

    }
}
