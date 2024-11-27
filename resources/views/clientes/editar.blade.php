<!--Autor: Adriana Tlaxcaltecatl Hernández-->
<!--Fecha:27/11/2024-->
<!--Descripción: Edita a los cilentes ya registrados en la base de datos y 
    guarda cambios o cancela la opreración -->

@extends('principal')

@section('imagen-encabezado')
<div style="background-image: url('{{ asset('images/editarcli.webp') }}'); height: 100px; background-size: cover; background-position: center;">
</div>
@endsection

@section('contenido')
<style>
    body {
        background-color: #A6A6A6; 
    }
</style>
<div class="container my-5">
    <h1 class="text-center mb-4">Modificar Cliente</h1>

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

    <form action="{{ route('clientes.actualizar', $clientes->idCli) }}" method="POST">
        @csrf
        @method('PUT') 

       <!--Formulario con validaciones en longitud-->
        <div class="row mb-3">
            <div class="col-md-4">
                <label for="nombre" class="form-label">Nombre *</label>
                <input type="text" 
                       class="form-control border-0 border-bottom" 
                       id="nombre" 
                       name="nombre" 
                       value="{{ $clientes->nombre }}" 
                       required 
                       minlength="2" 
                       maxlength="20">
            </div>
            <div class="col-md-4">
                <label for="apP" class="form-label">Apellido Paterno *</label>
                <input type="text" 
                       class="form-control border-0 border-bottom" 
                       id="apP" 
                       name="apP" 
                       value="{{ $clientes->apP }}" 
                       required 
                       minlength="2" 
                       maxlength="20">
            </div>
            <div class="col-md-4">
                <label for="apM" class="form-label">Apellido Materno *</label>
                <input type="text" 
                       class="form-control border-0 border-bottom" 
                       id="apM" 
                       name="apM" 
                       value="{{ $clientes->apM }}" 
                       required 
                       minlength="2" 
                       maxlength="20">
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-4">
                <label for="calle" class="form-label">Calle *</label>
                <input type="text" 
                       class="form-control border-0 border-bottom" 
                       id="calle" 
                       name="calle" 
                       value="{{ $clientes->calle }}" 
                       required 
                       minlength="5" 
                       maxlength="30">
            </div>
            <!--Municipios desde la bd-->
            <div class="col-md-4">
                <label for="idMun" class="form-label">Municipio *</label>
                <select class="form-select border-0 border-bottom" id="idMun" name="idMun" required>
                    <option value="" disabled>Selecciona un municipio</option>
                    @foreach($municipios as $muni)
                        <option value="{{ $muni->idMun }}" {{ $clientes->idMun == $muni->idMun ? 'selected' : '' }}>
                            {{ $muni->nombre }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-4">
                <label for="correo" class="form-label">Correo *</label>
                <input type="email" 
                       class="form-control border-0 border-bottom" 
                       id="correo" 
                       name="correo" 
                       value="{{ $clientes->correo }}" 
                       required 
                       maxlength="50">
            </div>
        </div>
       
        <div class="row mb-3">
            <center>
            <div class="col-md-4">
                <label for="tel" class="form-label">Teléfono *</label>
                <input type="tel" 
                       class="form-control border-0 border-bottom" 
                       id="tel" 
                       name="tel" 
                       value="{{ $clientes->tel }}" 
                       required 
                       minlength="10" 
                       maxlength="10">
            </div>
            </center>
        </div>

        <!-- Botones -->
        <div class="text-center mt-4">
            <button type="submit" class="btn btn-secondary rounded-pill px-4 me-2">Guardar Cambios</button>
            <a href="{{ route('clientes.consultar') }}" class="btn btn-secondary rounded-pill px-4 me-2">Cancelar</a>
        </div>
    </form>
</div>
@stop
