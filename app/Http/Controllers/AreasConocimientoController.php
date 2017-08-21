<?php

namespace App\Http\Controllers;

use App\AreaConocimiento;
use Illuminate\Http\Request;
use Laracasts\Flash\Flash;

class AreasConocimientoController extends Controller
{

    public function index()
    {

        $areas = AreaConocimiento::orderBy('id', 'DESC')->simplePaginate(6);

        return view('biblioteca.admin.areasConocimiento.index')->with('areas', $areas);
    }

    public function create()
    {
        return view('biblioteca.admin.areasConocimiento.create');
    }

    public function store(Request $request)
    {

        $area         = new AreaConocimiento($request->all());
        $area->nombre = $this->estandarizarNombre($request->nombre);

        $area->save();

        Flash('Registro Exitoso<br>Área Conocimiento: <b>' . $area->nombre . '</b>')->success();

        return redirect()->route('areasConocimiento.index');

    }

    public function edit($id)
    {

    }

    public function update(Request $request, $id)
    {

    }

    public function destroy($id)
    {
        $area = AreaConocimiento::find($id);
        $area->delete();

        Flash('Se elimino de forma exitosa el área de conocimiento:<br><b>' . $area->nombre . '</b>')->error();

        return redirect()->route('areasConocimiento.index');
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

    public function descripcion($id)
    {

        $area = AreaConocimiento::find($id);

        Flash()->overlay("<p>" . $area->descripcion . "<p>", $area->nombre);

        return redirect()->route('areasConocimiento.index');
    }

}
