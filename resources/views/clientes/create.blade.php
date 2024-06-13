<!-- resources/views/clientes/create.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Crear Cliente</h1>
    <form action="{{ route('clientes.store') }}" method="POST">
        @csrf
        <label for="Nom_cliente">Nombre:</label>
        <input type="text" id="Nom_cliente" name="Nom_cliente">
        <label for="Ape_cliente">Apellido:</label>
        <input type="text" id="Ape_cliente" name="Ape_cliente">
        <label for="Tipo_documento">Tipo de Documento:</label>
        <input type="text" id="Tipo_documento" name="Tipo_documento">
        <label for="DNI_cliente">DNI:</label>
        <input type="text" id="DNI_cliente" name="DNI_cliente">
        <label for="Cel_cliente">Celular:</label>
        <input type="text" id="Cel_cliente" name="Cel_cliente">
        <label for="Correo_cliente">Correo:</label>
        <input type="text" id="Correo_cliente" name="Correo_cliente">
        <button type="submit">Guardar</button>
    </form>
@endsection
