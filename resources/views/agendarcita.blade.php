<!--Autor: Adriana Tlaxcaltecatl Hernández-->
<!--Fecha:27/11/2024-->
<!--Descripción: Función Agendar Citas, se selecciona una fecha y un horario y se agenda la cita en la bd-->
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

    .form-control, .form-select {
        width: 100%;
        max-width: 300px; 
        margin: 10px auto; 
    }

    .container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 70vh;
    }

    form {
        width: 100%;
        max-width: 500px; 
    }

    .btn-center {
        display: block;
        width: 100%;
        max-width: 300px;
        margin: 10px auto;
    }

    h1 {
        text-align: center;
        margin-bottom: 20px;
    }

    .row {
        display: flex;
        justify-content: space-between;
    }

    .col-md-6 {
        width: 48%; 
    }
</style>

<div class="container">
    <form id="agendar-cita-form" action="{{ route('agendar.store') }}" method="POST">
        @csrf

        <h1>Agendar Cita</h1>

        <!-- Fecha -->
        <div class="mb-3">
            <label for="fecha" class="form-label">Fecha:</label>
            <input type="date" name="fecha" id="fecha" class="form-control" required>
        </div>

        <!-- Hora -->
        <div class="mb-3">
            <label for="hora" class="form-label">Hora:</label>
            <select name="hora" id="hora" class="form-select" required>
                <option value="">Selecciona una hora</option>
            </select>
        </div>

        <!-- Seleccionar Cliente, por nombre en lugar de ID -->
        <div class="mb-3">
            <label for="idCli" class="form-label">Selecciona un Cliente:</label>
            <select name="idCli" id="idCli" class="form-select" required>
                <option value="">Selecciona un cliente</option>
                @foreach ($clientes as $cliente)
                    <option value="{{ $cliente->idCli }}">{{ $cliente->nombre }} {{ $cliente->apP }} {{ $cliente->apM }}</option>
                @endforeach
            </select>
        </div>

        <!-- Botón -->
        <div class="text-center">
            <button type="submit" class="btn btn-secondary rounded-pill px-4">Agendar</button>
        </div>
    </form>
</div>

@stop

@section('scripts')
<script>
    // Función para cargar horarios disponibles según la fecha seleccionada
    document.getElementById('fecha').addEventListener('change', function () {
        const fecha = this.value;
        if (fecha) {
            fetch("{{ route('agendar.horarios') }}", {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify({ fecha })
            })
            .then(response => response.json())
            .then(data => {
                const horaSelect = document.getElementById('hora');
                horaSelect.innerHTML = '<option value="">Selecciona una hora</option>';
                data.forEach(hora => {
                    const option = document.createElement('option');
                    option.value = hora;
                    option.textContent = hora;
                    horaSelect.appendChild(option);
                });
            })
            .catch(error => console.error('Error al cargar los horarios:', error));
        }
    });
</script>
@endsection