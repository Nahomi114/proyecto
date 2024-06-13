<!-- resources/views/categorias/edit.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Editar Categoría</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Editar Categoría</h1>
        <form action="{{ route('categorias.update', $categoria->ID_categorias) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="Nom_categorias">Nombre</label>
                <input type="text" name="Nom_categorias" class="form-control" value="{{ $categoria->Nom_categorias }}" required>
            </div>
            <div class="form-group">
                <label for="Descr_categorias">Descripción</label>
                <input type="text" name="Descr_categorias" class="form-control" value="{{ $categoria->Descr_categorias }}">
            </div>
            <button type="submit" class="btn btn-success">Actualizar</button>
            <a href="{{ route('categorias.index') }}" class="btn btn-secondary">Volver</a>
        </form>
    </div>
</body>
</html>
