<?php

namespace App\Http\Controllers;

use App\AreaConocimiento;
use App\Http\Requests\AreaConocimientoRequest;
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

    public function store(AreaConocimientoRequest $request)
    {

        $area         = new AreaConocimiento($request->all());
        $area->nombre = $this->estandarizarNombre($request->nombre);

        $area->save();

        Flash('Registro Exitoso<br>Área Conocimiento: <b>' . $area->nombre . '</b>')->success();

        return redirect()->route('areasConocimiento.index');

    }

    public function edit($id)
    {

        $area = AreaConocimiento::find($id);

        return view('biblioteca.admin.areasConocimiento.edit')->with('area', $area);
    }

    public function update(AreaConocimientoRequest $request, $id)
    {
        $area              = AreaConocimiento::find($id);
        $area->nombre      = $this->estandarizarNombre($request->nombre);
        $area->descripcion = $request->descripcion;

        $area->save();

        Flash('Se actualizo de forma exitosa el área de conocimiento:<br><b>' . $area->nombre . '</b>')->warning();

        return redirect()->route('areasConocimiento.index');

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
