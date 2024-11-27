<!--Autor: Adriana Tlaxcaltecatl Hernández-->
<!--Fecha:27/11/2024-->
<!--Descripción: Función Reportar Ingresos, se selcciona un periodo de tiempo
    y éste arroja los ingresos obtenidos durante ese perioso seleccionado -->

@extends('principal')

@section('imagen-encabezado')
    <div style="background-image: url('{{ asset('images/reportaringresos.webp') }}'); height: 150px; background-size: cover; background-position: center;">
    </div>
@endsection

@section('contenido')
<style>
    body {
        background-color: #A6A6A6; 
    }

    /* Estilos para centrar los campos */
    .form-container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 60vh; 
        text-align: center;
        flex-direction: column;
    }

    .date-inputs {
        display: flex;
        justify-content: center;
        gap: 20px;
        margin-bottom: 20px;
    }

    .date-inputs .form-label {
        color: black;
    }

    .date-inputs input {
        width: 200px;
        padding: 5px;
    }

    button {
        margin-top: 10px;
        padding: 10px 20px;
    }
</style>
<!--Formulario-->
<div class="form-container">
    <h1 style="color: black">Reporte de Ingresos</h1>
    <br><br>
    <form action="{{ route('generarReporte') }}" method="POST">
        @csrf
        <div class="date-inputs">
            <!-- Fecha de inicio -->
            <div>
                <label for="start_date" class="form-label">Fecha de inicio:*</label>
                <input type="date" id="start_date" name="start_date" required>
            </div>

            <!-- Fecha de fin -->
            <div>
                <label for="end_date" class="form-label">Fecha de fin:*</label>
                <input type="date" id="end_date" name="end_date" required>
            </div>
        </div>

        <br><br>
        <button type="submit" class="btn btn-secondary rounded-pill px-3 me-2">Mostrar reporte</button>
    </form>
</div>

@stop
