@extends('principal')

@section('contenido')
<center>
<h1 style="color: white;"> Cotizar Evento</h1>
<br>
    <div style="background-color: #C2C0A6; padding: 20px; width: 300px; border-radius: 10px; box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2); text-align: left;">
        <form>
            <!-- Tipo de evento -->
            <label for="tipoEvento" style="color: #333333;">Tipo de Evento:</label>
            <select id="tipoEvento" name="tipoEvento" style="width: 100%; padding: 8px; margin-top: 5px; margin-bottom: 15px; border: 1px solid #ccc; border-radius: 5px;" required>
                <option value="" disabled selected>Seleccione un tipo de evento</option>
                <option value="boda">Boda</option>
                <option value="xv">XV Años</option>
                <option value="bautizo">Bautizo</option>
            </select>

            <!-- Banquete -->
            <label style="color: #333333;">
                Banquete:
                <input type="checkbox" id="banquete" name="banquete" style="margin-right: 5px;">
                Añadir
            </label>

            <!-- Tiempos del banquete -->
            <label for="tiemposBanquete" style="color: #333333;">Tiempos del Banquete:</label>
            <select id="tiemposBanquete" name="tiemposBanquete" style="width: 100%; padding: 8px; margin-top: 5px; margin-bottom: 15px; border: 1px solid #ccc; border-radius: 5px;">
                <option value="" disabled selected>Seleccione el número de tiempos</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
            </select>

            <!-- Fotografía -->
            <label style="color: #333333;">
                Fotografía:
                <input type="checkbox" id="fotografia" name="fotografia" style="margin-right: 5px;">
                Añadir
            </label>

            <!-- Número de fotógrafos -->
            <label for="numeroFotografos" style="color: #333333;">Número de Fotógrafos:</label>
            <select id="numeroFotografos" name="numeroFotografos" style="width: 100%; padding: 8px; margin-top: 5px; margin-bottom: 15px; border: 1px solid #ccc; border-radius: 5px;">
                <option value="" disabled selected>Seleccione el número de fotógrafos</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>

            <!-- Maquillaje -->
            <label style="color: #333333;">
                Maquillaje:
                <input type="checkbox" id="maquillaje" name="maquillaje" style="margin-right: 5px;">
                Añadir
            </label>

            <!-- Personas a maquillar -->
            <label for="personasMaquillar" style="color: #333333;">Personas a Maquillar:</label>
            <select id="personasMaquillar" name="personasMaquillar" style="width: 100%; padding: 8px; margin-top: 5px; margin-bottom: 15px; border: 1px solid #ccc; border-radius: 5px;">
                <option value="" disabled selected>Seleccione el número de personas a maquillar</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
            </select>

            <!-- Invitaciones -->
            <label style="color: #333333;">
                Invitaciones:
                <input type="checkbox" id="invitaciones" name="invitaciones" style="margin-right: 5px;">
                Añadir
            </label>

            <!-- Número de invitaciones -->
            <label for="numeroInvitaciones" style="color: #333333;">Número de Invitaciones:</label>
            <input type="text" id="numeroInvitaciones" name="numeroInvitaciones" style="width: 100%; padding: 8px; margin-top: 5px; margin-bottom: 15px; border: 1px solid #ccc; border-radius: 5px;">

            <!-- Recuerdos -->
            <label style="color: #333333;">
                Recuerdos:
                <input type="checkbox" id="recuerdos" name="recuerdos" style="margin-right: 5px;">
                Añadir
            </label>

            <!-- Número de recuerdos -->
            <label for="numeroRecuerdos" style="color: #333333;">Número de Recuerdos:</label>
            <input type="text" id="numeroRecuerdos" name="numeroRecuerdos" style="width: 100%; padding: 8px; margin-top: 5px; margin-bottom: 15px; border: 1px solid #ccc; border-radius: 5px;">

            <!-- Vestimenta -->
            <label style="color: #333333;">
                Vestimenta:
                <input type="checkbox" id="vestimenta" name="vestimenta" style="margin-right: 5px;">
                Añadir
            </label>

            <!-- Número de personas a vestir -->
            <label for="personasVestir" style="color: #333333;">Número de Personas a Vestir:</label>
            <input type="text" id="personasVestir" name="personasVestir" style="width: 100%; padding: 8px; margin-top: 5px; margin-bottom: 15px; border: 1px solid #ccc; border-radius: 5px;">

            <!-- Nombre -->
            <label for="nombre" style="color: #333333;">Nombre:</label>
            <input type="text" id="nombre" name="nombre" style="width: 100%; padding: 8px; margin-top: 5px; margin-bottom: 15px; border: 1px solid #ccc; border-radius: 5px;" required>

            <!-- Fecha de Cotización -->
            <label for="fechaCotizacion" style="color: #333333;">Fecha de Cotización:</label>
            <input type="text" id="fechaCotizacion" name="fechaCotizacion" style="width: 100%; padding: 8px; margin-top: 5px; margin-bottom: 15px; border: 1px solid #ccc; border-radius: 5px;" required>

            <!-- Fecha del Evento -->
            <label for="fechaEvento" style="color: #333333;">Fecha del Evento:</label>
            <input type="text" id="fechaEvento" name="fechaEvento" style="width: 100%; padding: 8px; margin-top: 5px; margin-bottom: 15px; border: 1px solid #ccc; border-radius: 5px;" required>

            <!-- Número de Contrato -->
            <label for="numeroContrato" style="color: #333333;">Número de Contrato:</label>
            <input type="text" id="numeroContrato" name="numeroContrato" style="width: 100%; padding: 8px; margin-top: 5px; margin-bottom: 15px; border: 1px solid #ccc; border-radius: 5px;" required>


            <!-- Botones -->
            <div style="display: flex; justify-content: space-between; gap: 10px;">
                <button type="button" class="btn btn-dark disabled">Ver cotizacion</button>
            </div>
        </form>
    </div>
</center>
@stop

