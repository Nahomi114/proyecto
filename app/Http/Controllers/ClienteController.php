<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $clientes = Cliente::all();
        return view('clientes.index', compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('clientes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'Nom_cliente' => 'required|string|max:30',
            'Ape_cliente' => 'required|string|max:30',
            'Tipo_documento' => 'required|string|max:20',
            'DNI_cliente' => 'required|string|max:20|unique:clientes,DNI_cliente',
            'Cel_cliente' => 'required|string|max:9|unique:clientes,Cel_cliente',
            'Correo_cliente' => 'required|string|max:30|unique:clientes,Correo_cliente|email',
        ]);

        Cliente::create($validated);

        return redirect()->route('clientes.index')
            ->with('success', 'Cliente creado exitosamente.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cliente $cliente): View
    {
        return view('clientes.edit', compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cliente $cliente): RedirectResponse
    {
        $validated = $request->validate([
            'Nom_cliente' => 'required|string|max:30',
            'Ape_cliente' => 'required|string|max:30',
            'Tipo_documento' => 'required|string|max:20',
            'DNI_cliente' => 'required|string|max:20|unique:clientes,DNI_cliente,' . $cliente->id,
            'Cel_cliente' => 'required|string|max:9|unique:clientes,Cel_cliente,' . $cliente->id,
            'Correo_cliente' => 'required|string|max:30|unique:clientes,Correo_cliente,' . $cliente->id . '|email',
        ]);

        $cliente->update($validated);

        return redirect()->route('clientes.index')
            ->with('success', 'Cliente actualizado exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cliente $cliente): RedirectResponse
    {
        $cliente->delete();

        return redirect()->route('clientes.index')
            ->with('success', 'Cliente eliminado exitosamente.');
    }
}
