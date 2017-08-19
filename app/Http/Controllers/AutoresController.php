<?php

namespace App\Http\Controllers;

use App\Autor;
use App\Http\Requests\AutorRequest;
use Laracasts\Flash\Flash;

class AutoresController extends Controller
{

    public function index()
    {
        $autores = Autor::orderBy('id', 'DESC')->simplePaginate(6);

        return view('biblioteca.admin.autores.index')->with('autores', $autores);
    }

    public function create()
    {
        return view('biblioteca.admin.autores.create');
    }

    public function store(AutorRequest $request)
    {

        $autor = new Autor($request->all());

        $autor->nombre = $this->estandarizarNombre($autor->nombre);

        $autor->save();

        Flash('Registro Exitoso<br>Autor: <b>' . $autor->nombre . '</b>')->success();

        return redirect()->route('autores.index');

    }

    public function show($id)
    {

    }

    public function edit($id)
    {
        $autor = Autor::find($id);

        return view('biblioteca.admin.autores.edit')->with('autor', $autor);
    }

    public function update(AutorRequest $request, $id)
    {
        $autor                    = Autor::find($id);
        $autor->nombre            = $this->estandarizarNombre($request->nombre);
        $autor->link_bibliografia = $request->link_bibliografia;

        $autor->save();

        Flash('Se actualizo de forma exitosa el autor:<br><b>' . $autor->nombre . '</b>')->warning();

        return redirect()->route('autores.index');
    }

    public function destroy($id)
    {
        $autor = Autor::find($id);
        $autor->delete();

        Flash('Se elimino de forma exitosa el autor:<br><b>' . $autor->nombre . '</b>')->error();

        return redirect()->route('autores.index');
    }

    public function estandarizarNombre($nombre)
    {
        // Estandarización Nombre
        $nombre = preg_replace('/\s+/', ' ', $nombre);
        $nombre = trim($nombre);
        $nombre = strtolower($nombre);
        $nombre = ucwords($nombre);

        return $nombre;
    }
}
