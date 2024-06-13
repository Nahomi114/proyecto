<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    
    public function index()
    {
        $usuarios = Usuario::all();
        return response()->json($usuarios);
    }

   
    public function create()
    {

    }

    
    public function store(Request $request)
    {
        $request->validate([
            'ID_tipo_usuario' => 'required|exists:tipo_usuarios,id',
            'Nom_usuarios' => 'required|string|max:50',
            'Telefono_usuarios' => 'nullable|string|max:50',
            'Email_usuarios' => 'required|string|email|max:50|unique:usuarios',
            'Login_usuarios' => 'required|string|max:50|unique:usuarios',
            'Password_usuarios' => 'required|string|max:50',
            'Estado_usuarios' => 'required|string|max:50',
        ]);

        $usuario = Usuario::create($request->all());
        return response()->json($usuario, 201);
    }

   
    public function show(string $id)
    {
        $usuario = Usuario::findOrFail($id);
        return response()->json($usuario);
    }

    
    public function edit(string $id)
    {

    }

  
    public function update(Request $request, string $id)
    {
        $request->validate([
            'ID_tipo_usuario' => 'required|exists:tipo_usuarios,id',
            'Nom_usuarios' => 'required|string|max:50',
            'Telefono_usuarios' => 'nullable|string|max:50',
            'Email_usuarios' => 'required|string|email|max:50|unique:usuarios,email,'.$id,
            'Login_usuarios' => 'required|string|max:50|unique:usuarios,login,'.$id,
            'Password_usuarios' => 'required|string|max:50',
            'Estado_usuarios' => 'required|string|max:50',
        ]);

        $usuario = Usuario::findOrFail($id);
        $usuario->update($request->all());
        return response()->json($usuario, 200);
    }

  
    public function destroy(string $id)
    {
        Usuario::destroy($id);
        return response()->json(null, 204);
    }
}
