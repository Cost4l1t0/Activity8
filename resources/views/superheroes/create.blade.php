<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Superhéroe</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white">
                    <h4 class="mb-0">Registrar Nuevo Superhéroe</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('superheroes.store') }}" method="POST">
                        
                        @csrf 
                        
                        <div class="mb-3">
                            <label for="real_name" class="form-label">Nombre Real</label>
                            <input type="text" class="form-control" id="real_name" name="real_name" required>
                        </div>

                        <div class="mb-3">
                            <label for="hero_name" class="form-label">Nombre de Superhéroe</label>
                            <input type="text" class="form-control" id="hero_name" name="hero_name" required>
                        </div>

                        <div class="mb-3">
                            <label for="photo_url" class="form-label">URL de la Foto</label>
                            <input type="url" class="form-control" id="photo_url" name="photo_url" placeholder="https://ejemplo.com/foto.jpg" required>
                            <div class="form-text">Pega un enlace de una imagen de internet (ej. de Wikipedia o Google).</div>
                        </div>

                        <div class="mb-3">
                            <label for="additional_info" class="form-label">Información Adicional (Opcional)</label>
                            <textarea class="form-control" id="additional_info" name="additional_info" rows="3"></textarea>
                        </div>

                        <div class="d-flex justify-content-between mt-4">
                            <a href="{{ route('superheroes.index') }}" class="btn btn-outline-secondary">Cancelar</a>
                            <button type="submit" class="btn btn-success">Guardar Superhéroe</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>