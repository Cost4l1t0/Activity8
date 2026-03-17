<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles del Superhéroe</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-sm">
                <img src="{{ $superhero->photo_url }}" class="card-img-top" alt="Foto de {{ $superhero->hero_name }}" style="max-height: 400px; object-fit: cover;">
                
                <div class="card-body text-center">
                    <h2 class="card-title text-primary">{{ $superhero->hero_name }}</h2>
                    <h5 class="text-muted">Nombre Real: {{ $superhero->real_name }}</h5>
                    <hr>
                    <p class="card-text">
                        <strong>Información Adicional:</strong><br>
                        {{ $superhero->additional_info ?? 'Sin información adicional.' }}
                    </p>
                    
                    <div class="mt-4">
                        <a href="{{ route('superheroes.index') }}" class="btn btn-secondary">Volver a la lista</a>
                        <a href="{{ route('superheroes.edit', $superhero) }}" class="btn btn-warning">Editar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>