<!--
ELABORADO POR: Lizbeth Huitzil Leal
FECHA: 26-11-2024
DESCRIPCCIÓN: Esta vista perimite visualizar la información de los proveedores.
-->
@extends('principal') <!-- Hereda la vista principal de la plantilla -->

@section('imagen-encabezado') 
<!-- Sección para mostrar la imagen de encabezado -->
<div style="background-image: url('{{ asset('images/proveedores1.avif') }}'); height: 100px; background-size: cover; background-position: center;">
</div>
@endsection

@section('contenido') 
<!-- Sección principal del contenido -->
<style>
        body {
            background-color: #A6A6A6 /* Fondo gris para la página */
        }
</style>

<div class="container my-5">
    <h1 class="text-center mb-4">Lista de Proveedores</h1>
    
    <!-- Mostrar mensajes de éxito o error si existen -->
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }} <!-- Mensaje de éxito -->
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    @if(session('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('error') }} <!-- Mensaje de error -->
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <br><br>

    <!-- Tabla que muestra la lista de proveedores -->
    <table class="table table-bordered text-center">
        <thead class="table-dark">
            <tr>
                <th>Id Proveedor</th>
                <th>Nombre</th>
                <th>Teléfono</th>
                <th>Correo</th>
                <th>Dirección</th>
                <th>Acciones</th> <!-- Columna para los botones de acción -->
            </tr>
        </thead>
        <tbody>
            <!-- Iteración sobre la lista de proveedores para mostrar los datos -->
            @foreach ($provedoes as $pro)
                <tr>
                    <td>{{ $pro->idPro }}</td> <!-- Muestra el ID del proveedor -->
                    <td>{{ $pro->nombre }}</td> <!-- Muestra el nombre del proveedor -->
                    <td>{{ $pro->tel }}</td> <!-- Muestra el teléfono del proveedor -->
                    <td>{{ $pro->correo }}</td> <!-- Muestra el correo del proveedor -->
                    <td>{{ $pro->direccion }}</td> <!-- Muestra la dirección del proveedor -->
                    <td>
                        <!-- Botón para modificar los detalles del proveedor -->
                        <a href="{{ route('proveedores.editarpro', $pro->idPro) }}" class="btn btn-secondary rounded-pill px-3 me-2">Modificar</a>
                
                        <!-- Botón para eliminar al proveedor -->
                        <a href="{{ route('eliminarpro', $pro->idPro) }}" class="btn btn-secondary rounded-pill px-4 me-2">Eliminar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Botón para regresar a la lista anterior -->
    <div class="text-center mt-4">
        <a href="{{ route('proveedores') }}" class="btn btn-secondary rounded-pill px-4">Regresar</a>
    </div>
</div>

<!-- Modal para confirmar la eliminación del proveedor -->
<div class="modal fade" id="confirmDeleteModal" tabindex="-1" aria-labelledby="confirmDeleteModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center w-100" id="confirmDeleteModalLabel">¿Estás seguro de eliminar este proveedor?</h5> <!-- Título del modal -->
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center">
                <!-- Botón para confirmar la eliminación -->
                <button type="button" class="btn btn-danger" id="confirmDeleteBtn">Sí, eliminar</button>
                <!-- Botón para cancelar la acción -->
                <button type="button" class="btn btn-secondary rounded-pill px-4 me-2" data-bs-dismiss="modal">Cancelar</button>
            </div>
        </div>
    </div>
</div>

@stop


