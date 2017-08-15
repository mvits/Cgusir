<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Usuario;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    //

    public function index()
    {
        $usuarios = Usuario::orderBy('id', 'ASC')->simplePaginate(6);
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
        dd('Registro Exitoso');
    }

    public function show($id)
    {}

    public function edit($id)
    {}

    public function update(Request $request, $id)
    {}

    public function destroy($id)
    {}

}
