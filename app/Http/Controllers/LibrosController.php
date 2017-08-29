<?php

namespace App\Http\Controllers;

use App\AreaConocimiento;
use App\Autor;
use App\Libro;
use Illuminate\Http\Request;
use Laracasts\Flash\Flash;

class LibrosController extends Controller
{
    public function index(Request $request)
    {

        $libros = Libro::busquedaRecursos($request->titulo)->orderBy('id', 'DESC')->simplePaginate(6);
        $libros->each(function ($libros) {
            $libros->areas;
            $libros->autores;
        });

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

    public function edit($id)
    {

        $libro = Libro::find($id);

        $libro->each(function ($libro) {
            $libro->areas;
            $libro->autores;
        });

        $autores = Autor::orderBy('nombre', 'ASC')->pluck('nombre', 'id');
        $areas   = AreaConocimiento::orderBy('nombre', 'ASC')->pluck('nombre', 'id');

        return view('biblioteca.admin.libros.edit')
            ->with('libro', $libro)
            ->with('areas', $areas)
            ->with('autores', $autores);

    }

    public function update(Request $request, $id)
    {
        $libro = Libro::find($id);
        $libro->fill($request->all());
        $libro->save();

        $libro->areas()->sync($request->areas);
        $libro->autores()->sync($request->autores);

        Flash('Se actualizo de forma exitosa el recurso bibliográfico: <br><b>' . $libro->titulo . '</b>')->warning();

        return redirect()->route('libros.index');
    }

    public function destroy($id)
    {

        $libro = Libro::find($id);
        $libro->autores()->detach();
        $libro->areas()->detach();
        $libro->delete();

        Flash('Se elimino de forma exitosa el recurso bibliográfico: <br><b>' . $libro->titulo . '</b>')->error();

        return redirect()->route('libros.index');

    }

}
