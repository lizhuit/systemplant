<!--Autor: Adriana Tlaxcaltecatl Hernández-->
<!--Fecha:27/11/2024-->
<!--Descripción: Vista principal de la función Catalogar Clientes, hace el registro de clientes al sistema
     con validaciones, posteriormente manda a la 2da vista de la funión donde se encuentra el consultar-->
@extends('principal')

@section('imagen-encabezado')
<div style="background-image: url('{{ asset('images/catalocli.webp') }}'); height: 150px; background-size: cover; background-position: center;">
</div>
@endsection

@section('contenido')
<style>
    body {
        background-color: #A6A6A6; 
    }
</style>

<center>
    <div class="container my-5">
        <h1 class="text-center mb-4">Catálogo de Clientes</h1>
        <br><br>

        <!-- Mostrar errores de validación -->
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <!--Formulario con validaciones en longitud-->
        <form action="{{ route('clientes.registrar') }}" method="POST">
            {{ csrf_field() }}
            <div class="row mb-3">
                <div class="col-md-4">
                    <label for="nombre" class="form-label">Nombre *</label>
                    <input type="text" class="form-control border-0 border-bottom" id="nombre" name="nombre" required minlength="2" maxlength="20">
                </div>
                <div class="col-md-4">
                    <label for="apP" class="form-label">Apellido Paterno *</label>
                    <input type="text" class="form-control border-0 border-bottom" id="apP" name="apP" required minlength="2" maxlength="20">
                </div>
                <div class="col-md-4">
                    <label for="apM" class="form-label">Apellido Materno *</label>
                    <input type="text" class="form-control border-0 border-bottom" id="apM" name="apM" required minlength="2" maxlength="20">
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-4">
                    <label for="calle" class="form-label">Calle *</label>
                    <input type="text" class="form-control border-0 border-bottom" id="calle" name="calle" required minlength="5" maxlength="30">
                </div>
                <!--Municipios desde la bd-->
                <div class="col-md-4">
                    <label for="idMun" class="form-label">Municipio *</label>
                    <select class="form-select border-0 border-bottom" id="idMun" name="idMun" required>
                        <option value="" disabled selected>Selecciona un municipio</option>
                        @foreach($municipios as $muni)
                            <option value="{{ $muni->idMun }}">{{ $muni->nombre }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-4">
                    <label for="correo" class="form-label">Correo *</label>
                    <input type="email" class="form-control border-0 border-bottom" id="correo" name="correo" required maxlength="50">
                </div>
            </div>

            <div class="row mb-3">
                <center>
                <div class="col-md-4">
                    <label for="tel" class="form-label">Teléfono *</label>
                    <input type="tel" class="form-control border-0 border-bottom" id="tel" name="tel" required minlength="10" maxlength="10">
                </div>
                </center>
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-secondary rounded-pill px-4 me-2">Registrar</button>
                <a href="{{ route('clientes.consultar') }}" class="btn btn-secondary rounded-pill px-4">Consultar</a>
            </div>
        </form>
    </div>
</center>

<!-- Modal de Confirmación -->
<div class="modal fade" id="registroModal" tabindex="-1" aria-labelledby="registroModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center w-100" id="registroModalLabel">Cliente Registrado</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
        </div>
    </div>
</div>


@stop
