<!--
ELABORADO POR: Lizbeth Huitzil Leal
FECHA: 26-11-2024
DESCRIPCCIÓN: Esta vista  sirve para poder modificar la información de los proveedores.
-->
@extends('principal')  <!-- Extiende la plantilla principal -->

@section('imagen-encabezado')
<!-- Sección para la imagen de encabezado -->
<div style="background-image: url('{{ asset('images/proveedores1.avif') }}'); height: 100px; background-size: cover; background-position: center;">
</div>
@endsection

@section('contenido')
<style>
    /* Estilo para el fondo de la página */
    body {
        background-color: #A6A6A6; /* Fondo gris */
    }
</style>

<!-- Contenedor principal de la página -->
<div class="d-flex justify-content-center">
    <div class="container my-5">
        <h1 class="text-center mb-4">Modificar Proveedor</h1>

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

        <!-- Formulario para actualizar los datos del proveedor -->
        <form action="{{ route('proveedores.actualizarpro', $proveedor->idPro) }}" method="POST">
            @csrf  <!-- Directiva para agregar el token CSRF -->
            @method('PUT') <!-- Directiva para especificar que se trata de una solicitud PUT -->

            <!-- Primera fila de columnas (Nombre y Teléfono) -->
            <div class="row mb-3 justify-content-center">
                <div class="col-md-4">
                    <label for="nombre" class="form-label">Nombre *</label>
                    <!-- Campo para el nombre del proveedor -->
                    <input type="text" class="form-control border-0 border-bottom" id="nombre" name="nombre" value="{{ $proveedor->nombre }}" required maxlength="20" oninput="validarLongitud(this, 20)">
                    <small id="nombreError" class="text-danger"></small> <!-- Mensaje de error para la longitud del nombre -->
                </div>
                <div class="col-md-4">
                    <label for="tel" class="form-label">Teléfono *</label>
                    <!-- Campo para el teléfono del proveedor -->
                    <input type="tel" class="form-control border-0 border-bottom" id="tel" name="tel" value="{{ $proveedor->tel }}" required maxlength="10" oninput="validarLongitud(this, 10)">
                    <small id="telefonoError" class="text-danger"></small> <!-- Mensaje de error para la longitud del teléfono -->
                </div>
            </div>

            <!-- Segunda fila de columnas (Dirección y Correo) -->
            <div class="row mb-4 justify-content-center">
                <div class="col-md-4">
                    <label for="direccion" class="form-label">Dirección *</label>
                    <!-- Campo para la dirección del proveedor -->
                    <input type="text" class="form-control border-0 border-bottom" id="direccion" name="direccion" value="{{ $proveedor->direccion }}" required maxlength="20" oninput="validarLongitud(this, 20)">
                    <small id="direccionError" class="text-danger"></small> <!-- Mensaje de error para la longitud de la dirección -->
                </div>
                <div class="col-md-4">
                    <label for="correo" class="form-label">Correo *</label>
                    <!-- Campo para el correo del proveedor -->
                    <input type="email" class="form-control border-0 border-bottom" id="correo" name="correo" value="{{ $proveedor->correo }}" required maxlength="50" oninput="validarLongitud(this, 50)">
                    <small id="correoError" class="text-danger"></small> <!-- Mensaje de error para la longitud del correo -->
                </div>
            </div>

            <!-- Botones de acción para guardar o cancelar -->
            <div class="text-center">
                <button type="submit" class="btn btn-secondary rounded-pill px-4 me-2">Guardar Cambios</button>
                <a href="{{ route('proveedores.consultarpro') }}" class="btn btn-secondary rounded-pill px-4">Cancelar</a>
            </div>
        </form>
    </div>
</div>

<!-- Modal de Confirmación -->
<div class="modal fade" id="registroModal" tabindex="-1" aria-labelledby="registroModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center w-100" id="registroModalLabel">Proveedor Modificado</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
        </div>
    </div>
</div>

<!-- JavaScript para mostrar el modal de registro -->
<script>
    // Función para mostrar el modal de confirmación
    function mostrarModal() {
        var registroModal = new bootstrap.Modal(document.getElementById('registroModal'));
        registroModal.show(); // Muestra el modal
    }

    // Función para validar la longitud de un campo
    function validarLongitud(input, maxLength) {
        const id = input.id;  // Obtiene el id del campo
        const errorElement = document.getElementById(`${id}Error`); // Obtiene el elemento donde se mostrará el error

        // Valida si el valor ingresado excede la longitud máxima
        if (input.value.length > maxLength) {
            errorElement.textContent = `El máximo permitido es ${maxLength} caracteres.`; // Muestra el error
        } else {
            errorElement.textContent = ''; // Limpia el error si la longitud es válida
        }
    }
</script>
@stop
