@extends('templates.app')
@section('contenido')
<div class="container">
    <h1 class="mb-4">Lista de Autores</h1>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <!--Errores de validación para el codigo-->
    @if ($errors->any())
        <div class="alert alert-danger mt-3">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <a href="{{ route('autores.create') }}" class="btn btn-primary mb-3">Insertar Autor</a>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>Código</th>
                <th>Nombre</th>
                <th>Nacionalidad</th>
                <th class="text-center">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @forelse($autores as $autor)
                <tr>
                    <td>{{ $autor->codigo_autor }}</td>
                    <td>{{ $autor->nombre_autor }}</td>
                    <td>{{ $autor->nacionalidad }}</td>
                    <td class="text-center">
                        <div class="d-flex justify-content-center gap-2">
            <button type="button" class="btn btn-info btn-sm" data-bs-toggle="modal"data-bs-target="#modalEditarAutor{{ $autor->codigo_autor }}">
            Editar
            </button>
         @include('Autores.update', ['autor' => $autor])
                            <form action="{{ route('autores.destroy', $autor->codigo_autor) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" >Eliminar</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" class="text-center">No hay autores registrados.</td>
                </tr>
            @endforelse
        </tbody>
    </table>     
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
@endsection