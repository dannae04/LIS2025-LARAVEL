@extends('templates.app')
@section('contenido')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="table-container">
               <!--validación de errores para el código-->
                @if ($errors->any())
                    <div class="alert alert-danger mt-3">
                        <strong>Todos los campos son requeridos:</strong>
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <!-- alerta  de ingreso correcto -->
                @if (session('success'))
                    <div class="alert alert-success mt-3">
                        {{ session('success') }}
                    </div>
                @endif

                <form action="{{ route('autores.store') }}" method="POST">
                    @csrf
                    <table class="table table-borderless">
                        <tr>
                            <td><label for="codigo_autor" class="form-label">Código Autor:</label></td>
                            <td><input type="text" id="codigo_autor" name="codigo_autor" class="form-control" ></td>
                        </tr>
                        <tr>
                            <td><label for="nombre_autor" class="form-label">Nombre Autor:</label></td>
                            <td><input type="text" id="nombre_autor" name="nombre_autor" class="form-control" ></td>
                        </tr>
                        <tr>
                            <td><label for="nacionalidad" class="form-label">Nacionalidad:</label></td>
                            <td><input type="text" id="nacionalidad" name="nacionalidad" class="form-control" ></td>
                        </tr>
                        <tr>
                            <td colspan="2" class="text-center">
                                <button type="submit" class="btn btn-primary">Guardar</button>
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection