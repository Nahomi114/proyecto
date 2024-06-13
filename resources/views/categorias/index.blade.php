<!-- resources/views/categorias/index.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Lista de Categorías</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Lista de Categorías</h1>
        <a href="{{ route('categorias.create') }}" class="btn btn-primary mb-3">Crear Nueva Categoría</a>
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        @if(session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($categorias as $categoria)
                <tr>
                    <td>{{ $categoria->ID_categorias }}</td>
                    <td>{{ $categoria->Nom_categorias }}</td>
                    <td>{{ $categoria->Descr_categorias }}</td>
                    <td>
                        <a href="{{ route('categorias.show', $categoria->ID_categorias) }}" class="btn btn-info">Ver</a>
                        <a href="{{ route('categorias.edit', $categoria->ID_categorias) }}" class="btn btn-warning">Editar</a>
                        <form action="{{ route('categorias.destroy', $categoria->ID_categorias) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
