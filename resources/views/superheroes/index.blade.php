<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Superhéroes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>Sistema de Superhéroes</h2>
        <a href="{{ route('superheroes.create') }}" class="btn btn-primary">Agregar Superhéroe</a>
    </div>

    <div class="card shadow-sm">
        <div class="card-body">
            <table class="table table-hover align-middle">
                <thead class="table-light">
                    <tr>
                        <th>No.</th>
                        <th>Nombre Real</th>
                        <th>Superhéroe</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($superheroes as $superhero)
                    <tr>
                        <td>{{ $superhero->id }}</td>
                        <td>{{ $superhero->real_name }}</td>
                        <td>{{ $superhero->hero_name }}</td>
                        <td>
                            <a href="{{ route('superheroes.show', $superhero) }}" class="btn btn-sm btn-info text-white">Ver</a>
                            <a href="{{ route('superheroes.edit', $superhero) }}" class="btn btn-sm btn-outline-secondary">Editar</a>
                            
                            <form action="{{ route('superheroes.destroy', $superhero) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-outline-danger" onclick="return confirm('¿Seguro que deseas eliminar a este superhéroe?')">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            
            @if($superheroes->isEmpty())
                <div class="alert alert-warning text-center">Aún no hay superhéroes registrados.</div>
            @endif
        </div>
    </div>
</div>

</body>
</html>