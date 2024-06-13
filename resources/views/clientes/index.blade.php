<!-- resources/views/clientes/index.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Clientes</h1>
    <a href="{{ route('clientes.create') }}">Crear Cliente</a>
    @if(session('success'))
        <div>{{ session('success') }}</div>
    @endif
    <ul>
        @foreach($clientes as $cliente)
            <li>
                {{ $cliente->Nom_cliente }} {{ $cliente->Ape_cliente }} - {{ $cliente->Correo_cliente }}
                <a href="{{ route('clientes.edit', $cliente->id) }}">Editar</a>
                <form action="{{ route('clientes.destroy', $cliente->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Eliminar</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection
