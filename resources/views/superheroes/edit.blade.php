<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Superhéroe</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-header bg-warning text-dark">
                    <h4 class="mb-0">Editar Superhéroe: {{ $superhero->hero_name }}</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('superheroes.update', $superhero) }}" method="POST">
                        @csrf 
                        @method('PUT') <div class="mb-3">
                            <label for="real_name" class="form-label">Nombre Real</label>
                            <input type="text" class="form-control" id="real_name" name="real_name" value="{{ $superhero->real_name }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="hero_name" class="form-label">Nombre de Superhéroe</label>
                            <input type="text" class="form-control" id="hero_name" name="hero_name" value="{{ $superhero->hero_name }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="photo_url" class="form-label">URL de la Foto</label>
                            <input type="url" class="form-control" id="photo_url" name="photo_url" value="{{ $superhero->photo_url }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="additional_info" class="form-label">Información Adicional (Opcional)</label>
                            <textarea class="form-control" id="additional_info" name="additional_info" rows="3">{{ $superhero->additional_info }}</textarea>
                        </div>

                        <div class="d-flex justify-content-between mt-4">
                            <a href="{{ route('superheroes.index') }}" class="btn btn-outline-secondary">Cancelar</a>
                            <button type="submit" class="btn btn-warning">Actualizar Datos</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>