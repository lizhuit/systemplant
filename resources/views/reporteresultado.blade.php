<!--Autor: Adriana Tlaxcaltecatl Hernández-->
<!--Fecha:27/11/2024-->
<!--Descripción: 2da vsta de Reporte de Ingresos, esta muestra el reporte de las fechas seleccionadas
    en la vista anterior e imrprime el reporte-->
@extends('principal')

@section('imagen-encabezado')
    <div style="background-image: url('{{ asset('images/reporteresultados.webp') }}'); height: 150px; background-size: cover; background-position: center;">
    </div>
@endsection

@section('contenido')
<style>
    body {
        background-color: #A6A6A6; 
    }

    /* Estilo para la impresión */
    @media print {
        body {
            font-family: Arial, sans-serif;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }

        /* Ocultar todo lo que no queremos ver al imprimir */
        .no-print {
            display: none;
        }
    }

    .button-container {
        display: flex;
        justify-content: center;
        gap: 10px; /* Espacio entre los botones */
        margin-top: 20px;
    }
</style>

<center>

    <div style="text-align: center; margin-bottom: 20px;">
        <h2 class="text-center mb-4">Reporte de Ingresos: </h2>
        <<!--Trae las fechas seleccionadas-->
        <h2 class="text-center mb-4">{{ $startDate }} al {{ $endDate }}</h2>
    </div>

    <div style="display: flex; justify-content: center; align-items: center;">
        <div style="width: 80%; padding: 20px;">
            <!--Tabla a mostrar como reporte-->
        <table class="table table-bordered text-center">
            <thead class="table-dark">
                <tr>
                    <th>Fecha</th>
                    <th>Monto</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($reportes as $reporte)
                    <tr>
                        <td>{{ $reporte->Fecha_Evento }}</td>
                        <td>${{ number_format($reporte->Total_Monto, 2) }}</td> 
                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <td><strong>Total</strong></td>
                    <td><strong>${{ number_format($totalMonto, 2) }}</strong></td>
                </tr>
            </tfoot>
        </table>


            <!-- Botones -->
            <div class="button-container">
                <button onclick="window.print()" class="btn btn-secondary rounded-pill px-4">Imprimir</button>
                <a href="{{ route('reportaringresos') }}" class="btn btn-secondary rounded-pill px-4">Cancelar</a>
            </div>
        </div>
    </center>
</div>
@stop
