<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Usuario;
use Illuminate\Http\Request;
use Laracasts\Flash\Flash;

class UsuariosController extends Controller
{
    //

    public function index()
    {
        $usuarios = Usuario::orderBy('id', 'DESC')->simplePaginate(6);
        return view('biblioteca.admin.usuarios.index')->with('usuarios', $usuarios);
    }

    public function create()
    {
        return view('biblioteca.admin.usuarios.create');
    }

    public function store(Request $request)
    {
        $usuario           = new Usuario($request->all());
        $usuario->password = bcrypt($request->password);
        $usuario->save();

        Flash('Registro Exitoso<br>Usuario: <b>' . $usuario->numero_identificacion . ' - ' . $usuario->nombre . '</b>')->success();

        return redirect()->route('usuarios.index');
    }

    public function show($id)
    {}

    public function edit($id)
    {}

    public function update(Request $request, $id)
    {}

    public function destroy($id)
    {

        $usuario = Usuario::find($id);
        $usuario->delete();

        Flash('Se elimino de forma exitosa el usuario:<br><b>' . $usuario->numero_identificacion . ' - ' . $usuario->nombre . '</b>')->error();

        return redirect()->route('usuarios.index');
    }

}
