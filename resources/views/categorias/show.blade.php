<!-- resources/views/categorias/show.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Detalles de la Categoría</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Detalles de la Categoría</h1>
        <div class="card">
            <div class="card-header">
                {{ $categoria->Nom_categorias }}
            </div>
            <div class="card-body">
                <p><strong>ID:</strong> {{ $categoria->ID_categorias }}</p>
                <p><strong>Nombre:</strong> {{ $categoria->Nom_categorias }}</p>
                <p><strong>Descripción:</strong> {{ $categoria->Descr_categorias }}</p>
                <a href="{{ route('categorias.index') }}" class="btn btn-secondary">Volver</a>
            </div>
        </div>
    </div>
</body>
</html>
