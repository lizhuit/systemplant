@extends('principal')

@section('imagen-encabezado')
<div style="background-image: url('{{ asset('images/cotizar.webp') }}'); height: 100px; background-size: cover; background-position: center;">
</div>
@endsection

@section('contenido')
<style>
    body {
        background-color: #A6A6A6; /* Fondo gris */
    }

    .container {
        max-width: 90%; 
    }

    .form-label {
        font-size: 1.2rem; 
    }

    .form-select, .form-control {
        font-size: 1rem; 
    }

    button {
        font-size: 1rem; 
    }

    .contenido-cotizar {
        max-width: 900px; 
        margin: 0 auto; 
    }

    h1, h2, h4 {
        text-align: center;
        color: black;
    }

    .table td, .table th {
        text-align: center;
    }

    /* Ajustes específicos para las columnas de formulario */
    .col-md-4 {
        max-width: 33.33%; 
    }

    .form-group {
        margin-bottom: 20px;
    }
</style>

<div class="contenido-cotizar">
    <h1>Cotiza tu evento</h1>

    <!-- Formulario de detalles del evento -->
    <form action="{{ route('cotizarevento') }}" method="POST">
        {{ csrf_field() }}
        <div class="form-group mb-3">
            <label for="tipoEvento" class="form-label">Tipo de Evento:</label>
            <select class="form-select border-0 border-bottom" id="idCatEvent" name="idCatEvent" required>
                <option value="" disabled selected>Selecciona un evento</option>
                @foreach($evento as $eve)
                    <option value="{{$eve->idCatEvent}}">{{$eve->nombre}}</option>
                @endforeach
            </select>
        </div>
    </form>

    <!-- Productos y Servicios -->
    <h2>Productos y Servicios</h2>
    <div class="row">
        <div class="col-md-4 mb-3">
            <label for="idPS" class="form-label">Selecciona Producto o Servicio:</label>
            <select class="form-select border-0 border-bottom" id="idPS" name="idPS" required>
                <option value="" disabled selected>Selecciona producto o servicio</option>
                @foreach($productosservicios as $ps)
                    <option value="{{$ps->idPS}}">{{$ps->nombre}}</option>
                @endforeach
            </select>
        </div>
        <div class="col-md-4 mb-3">
            <label for="cantidad" class="form-label">Cantidad:</label>
            <input type="number" class="form-control border-0 border-bottom" id="cantidad" name="cantidad" placeholder="Cantidad" min="1" required>
        </div>
        <div class="col-md-4 mb-3 d-flex align-items-end">
            <button type="button" class="btn btn-secondary rounded-pill px-4 me-2" id="btnAñadir">
                Añadir
            </button>
        </div>
    </div>

    <!-- Tabla de productos seleccionados -->
    <h4>Detalles de la Selección</h4>
    <div class="table-responsive">
        <table class="table table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>Producto/Servicio</th>
                    <th>Cantidad</th>
                    <th>Precio Unitario</th>
                    <th>Subtotal</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody id="tablaProductos"></tbody>
            <tfoot>
                <tr>
                    <td colspan="3" class="text-end fw-bold">Monto Total:</td>
                    <td id="montoTotal" class="fw-bold">$0.00</td>
                    <td></td>
                </tr>
            </tfoot>
        </table>
    </div>

    <!-- Formulario adicional -->
    <form action="#" method="POST">
        @csrf
        <div class="form-group mb-3">
            <label for="nombre" class="form-label">Nombre:</label>
            <select class="form-select border-0 border-bottom" id="idCli" name="idCli" required>
                <option value="" disabled selected>Selecciona tu nombre</option>
                @foreach($cliente as $cli)
                    <option value="{{$cli->idCli}}">{{$cli->nombre}}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group mb-3">
            <label for="fechaCotizacion" class="form-label">Fecha de Cotización:</label>
            <input type="date" id="fechaCotizacion" name="fechaCotizacion" class="form-control" required>
        </div>

        <div class="form-group mb-3">
            <label for="fechaEvento" class="form-label">Fecha del Evento:</label>
            <input type="date" id="fechaEvento" name="fechaEvento" class="form-control" required>
        </div>

        <div class="form-group mb-3">
            <label for="numeroContrato" class="form-label">Número de Cotización:</label>
            <input type="text" id="numeroContrato" name="numeroContrato" class="form-control" required>
        </div>

        <div class="text-center">
            <button type="submit" class="btn btn-secondary rounded-pill px-4 me-2">Registrar</button>
        </div>
    </form>
</div>

<script>
    // Función para añadir productos
    document.getElementById('btnAñadir').addEventListener('click', function () {
        const selectProducto = document.getElementById('idPS');
        const cantidadInput = document.getElementById('cantidad');

        const producto = selectProducto.options[selectProducto.selectedIndex].text;
        const precioUnitario = parseFloat(selectProducto.value); 
        const cantidad = parseInt(cantidadInput.value);

        if (producto && cantidad > 0) {
            const subtotal = (precioUnitario * cantidad).toFixed(2);

            const tablaProductos = document.getElementById('tablaProductos');
            const fila = document.createElement('tr');
            fila.innerHTML = `
                <td>${producto}</td>
                <td>${cantidad}</td>
                <td>$${precioUnitario.toFixed(2)}</td>
                <td>$${subtotal}</td>
                <td><button class="btn btn-secondary rounded-pill px-4">Eliminar</button></td>
            `;
            tablaProductos.appendChild(fila);

            actualizarMontoTotal();

            cantidadInput.value = '';
            selectProducto.selectedIndex = 0;

            fila.querySelector('.btnEliminar').addEventListener('click', function () {
                fila.remove();
                actualizarMontoTotal();
            });
        } else {
            alert('Por favor selecciona un producto/servicio y una cantidad válida.');
        }
    });

    function actualizarMontoTotal() {
        const tablaProductos = document.getElementById('tablaProductos');
        let total = 0;

        tablaProductos.querySelectorAll('tr').forEach((fila) => {
            const subtotal = parseFloat(fila.children[3].textContent.replace('$', ''));
            total += subtotal;
        });

        document.getElementById('montoTotal').textContent = `$${total.toFixed(2)}`;
    }
</script>

@endsection