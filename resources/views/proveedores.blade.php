@extends('principal')

@section('contenido')
<center>
    <h1 style="color: white;">Nuestros Proveedores</h1>
    <br>

    <div style="background-color: #C2C0A6; padding: 20px; width: 300px; border-radius: 10px; box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2); text-align: left;">
        <form>
            <!-- Nombre -->
            <label for="nombre" style="color: #333333;">Nombre:</label>
            <input type="text" id="nombre" name="nombre" style="width: 100%; padding: 8px; margin-top: 5px; margin-bottom: 15px; border: 1px solid #ccc; border-radius: 5px;" required>

            <!-- Teléfono -->
            <label for="telefono" style="color: #333333;">Teléfono:</label>
            <input type="tel" id="telefono" name="telefono" style="width: 100%; padding: 8px; margin-top: 5px; margin-bottom: 15px; border: 1px solid #ccc; border-radius: 5px;" required>

            <!-- Dirección -->
            <label for="direccion" style="color: #333333;">Dirección:</label>
            <input type="text" id="direccion" name="direccion" style="width: 100%; padding: 8px; margin-top: 5px; margin-bottom: 15px; border: 1px solid #ccc; border-radius: 5px;">

             <!-- Email -->
             <label for="email" style="color: #333333;">Email:</label>
            <input type="email" id="email" name="email" style="width: 100%; padding: 8px; margin-top: 5px; margin-bottom: 15px; border: 1px solid #ccc; border-radius: 5px;" required>


            <!-- Botones -->
            <div style="display: flex; justify-content: space-between; gap: 10px;">
                <button type="button" class="btn btn-dark disabled">Registrar</button>
                <button type="button" class="btn btn-dark disabled">Consultar</button>
            </div>
        </form>
    </div>
</center>
@stop