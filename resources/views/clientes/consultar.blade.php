<!--Autor: Adriana Tlaxcaltecatl Hernández-->
<!--Fecha:27/11/2024-->
<!--Descripción: 2da vista de la función Catalogar Clientes puede consultar y eliminar cilentes 
    ya registrados en la base de datos -->
@extends('principal')

@section('imagen-encabezado')
<div style="background-image: url('{{ asset('images/consultarcli.webp') }}'); height: 150px; background-size: cover; background-position: center;">
</div>
@endsection

@section('contenido')

<style>
        body {
            background-color: #A6A6A6; 
        }
</style>
<div class="container my-5">
    <h1 class="text-center mb-4">Lista de Clientes</h1>

    <!-- Sección para mostrar mensajes de éxito o error -->
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    @if(session('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
  <!--Tabla a mostrar en la interfaz-->
    <br><br>
    <table class="table table-bordered text-center">
        <thead class="table-dark">
            <tr>
                <th>Id Cliente</th>
                <th>Municipio</th>
                <th>Nombre</th>
                <th>Apellido Paterno</th>
                <th>Apellido Materno</th>
                <th>Correo</th>
                <th>Teléfono</th>
                <th>Calle</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <!--se cacha en la bd-->
        <tbody>
            @foreach ($clientes as $cliente)
            <tr>
                <td>{{ $cliente->idCli }}</td>
                <td>{{ $cliente->municipio->nombre ?? 'Sin asignar' }}</td> 
                <td>{{ $cliente->nombre }}</td>
                <td>{{ $cliente->apP }}</td>
                <td>{{ $cliente->apM }}</td>
                <td>{{ $cliente->correo }}</td>
                <td>{{ $cliente->tel }}</td>
                <td>{{ $cliente->calle }}</td>
                <td>
                    <!--botones de eliminar y consultar por registro-->
                    <a href="{{ route('clientes.editar', $cliente->idCli) }}" class="btn btn-secondary rounded-pill px-4 me-2">Modificar</a>
                    <a href="{{ route('eliminacliente', $cliente->idCli) }}" class="btn btn-secondary rounded-pill px-4 me-2">Eliminar</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div class="text-center mt-4">
        <a href="{{ route('clientes') }}" class="btn btn-secondary rounded-pill px-4 me-2">Regresar</a>
    </div>
</div>


<!-- Modal de Confirmación de Eliminación -->
<div class="modal fade" id="confirmDeleteModal" tabindex="-1" aria-labelledby="confirmDeleteModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center w-100" id="confirmDeleteModalLabel">¿Estás seguro de eliminar este cliente?</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center">
                <button type="button" class="btn btn-danger" id="confirmDeleteBtn">Sí, eliminar</button>
                <button type="button" class="btn btn-secondary rounded-pill px-4 me-2" data-bs-dismiss="modal">Cancelar</button>
            </div>
        </div>
    </div>
</div>

@stop

