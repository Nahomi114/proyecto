<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function index()
    {
        $categorias = Categoria::all();
        return view('categorias.index', compact('categorias'));
    }

    public function show($id)
    {
        $categoria = Categoria::find($id);

        if (is_null($categoria)) {
            return redirect()->route('categorias.index')->with('error', 'Categoría no encontrada');
        }

        return view('categorias.show', compact('categoria'));
    }

    public function create()
    {
        return view('categorias.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'Nom_categorias' => 'required|string|max:50',
            'Descr_categorias' => 'nullable|string|max:50',
        ]);

        Categoria::create($request->all());

        return redirect()->route('categorias.index')->with('success', 'Categoría creada con éxito');
    }

    public function edit($id)
    {
        $categoria = Categoria::find($id);

        if (is_null($categoria)) {
            return redirect()->route('categorias.index')->with('error', 'Categoría no encontrada');
        }

        return view('categorias.edit', compact('categoria'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'Nom_categorias' => 'required|string|max:50',
            'Descr_categorias' => 'nullable|string|max:50',
        ]);

        $categoria = Categoria::find($id);

        if (is_null($categoria)) {
            return redirect()->route('categorias.index')->with('error', 'Categoría no encontrada');
        }

        $categoria->update($request->all());

        return redirect()->route('categorias.index')->with('success', 'Categoría actualizada con éxito');
    }

    public function destroy($id)
    {
        $categoria = Categoria::find($id);

        if (is_null($categoria)) {
            return redirect()->route('categorias.index')->with('error', 'Categoría no encontrada');
        }

        $categoria->delete();

        return redirect()->route('categorias.index')->with('success', 'Categoría eliminada con éxito');
    }
}
