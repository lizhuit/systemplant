<!--
ELABORADO POR: Lizbeth Huitzil Leal
FECHA: 26-11-2024
DESCRIPCIÓN: Esta vista nos permite ingresar los datos de los proveedores para 
guardar en la base de datos. También podemos consultar dicha lista de proveedores. 
-->
@extends('principal')

@section('imagen-encabezado')
<div style="background-image: url('{{ asset('images/proveedores1.avif') }}'); height: 100px; background-size: cover; background-position: center;">
</div>
@endsection

@section('contenido')
<style>
    body {
        background-color: #A6A6A6; /* Fondo gris */
    }
</style>
<div class="d-flex justify-content-center">
    <div class="container my-5">
        <h1 class="text-center mb-4">Catálogo de Proveedores</h1>

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

        <br><br>
        <form action="{{ route('proveedores.registrarpro') }}" method="POST">
            @csrf
            <!-- Primera fila de columnas (Nombre y Teléfono) -->
            <div class="row mb-3 justify-content-center">
                <div class="col-md-4">
                    <label for="nombre" class="form-label">Nombre *</label>
                    <input type="text" class="form-control border-0 border-bottom" id="nombre" name="nombre" required maxlength="20" oninput="validarLongitud(this, 20)">
                    <small id="nombreError" class="text-danger"></small>
                </div>
                <div class="col-md-4">
                    <label for="tel" class="form-label">Teléfono *</label>
                    <input type="tel" class="form-control border-0 border-bottom" id="tel" name="tel" required maxlength="10" oninput="validarLongitud(this, 10)">
                    <small id="telefonoError" class="text-danger"></small>
                </div>
            </div>

            <!-- Segunda fila de columnas (Dirección y Correo) -->
            <div class="row mb-4 justify-content-center">
                <div class="col-md-4">
                    <label for="direccion" class="form-label">Dirección *</label>
                    <input type="text" class="form-control border-0 border-bottom" id="direccion" name="direccion" required maxlength="20" oninput="validarLongitud(this, 20)">
                    <small id="direccionError" class="text-danger"></small>
                </div>
                <div class="col-md-4">
                    <label for="correo" class="form-label">Correo *</label>
                    <input type="email" class="form-control border-0 border-bottom" id="correo" name="correo" required maxlength="50" oninput="validarLongitud(this, 50)">
                    <small id="correoError" class="text-danger"></small>
                </div>
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-secondary rounded-pill px-4 me-2">Registrar</button>
                <a href="{{ route('proveedores.consultarpro') }}" class="btn btn-secondary rounded-pill px-4">Consultar</a>
            </div>
        </form>
    </div>
</div>

<!-- Modal de Confirmación -->
<div class="modal fade" id="registroModal" tabindex="-1" aria-labelledby="registroModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center w-100" id="registroModalLabel">Proveedor Registrado</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
        </div>
    </div>
</div>

<!-- JavaScript para mostrar el modal de registro -->
<script>
function mostrarModal() {
    var registroModal = new bootstrap.Modal(document.getElementById('registroModal'));
    registroModal.show();
}

function validarLongitud(input, maxLength) {
    const id = input.id;
    const errorElement = document.getElementById(`${id}Error`);

    if (input.value.length > maxLength) {
        errorElement.textContent = `El máximo permitido es ${maxLength} caracteres.`;
    } else {
        errorElement.textContent = ''; // Borra el mensaje si está dentro del límite
    }
}
</script>
@stop