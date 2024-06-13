<!-- resources/views/categorias/create.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Crear Categoría</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Crear Nueva Categoría</h1>
        <form action="{{ route('categorias.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="Nom_categorias">Nombre</label>
                <input type="text" name="Nom_categorias" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="Descr_categorias">Descripción</label>
                <input type="text" name="Descr_categorias" class="form-control">
            </div>
            <button type="submit" class="btn btn-success">Guardar</button>
            <a href="{{ route('categorias.index') }}" class="btn btn-secondary">Volver</a>
        </form>
    </div>
</body>
</html>
