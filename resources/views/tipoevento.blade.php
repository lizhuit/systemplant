@extends('principal')

@section('contenido')
<center>
    <h1 style="color: #ffffff;">Tipos de Eventos</h1>
    <br>
    <div style="display: flex; flex-wrap: wrap; justify-content: center; gap: 20px; max-width: 80%;">

        <!-- Tarjeta de XV Años -->
        <div style="background-color: #ffffff; width: 200px; border-radius: 10px; box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2); overflow: hidden; text-align: center;">
            <img src="images/xv.jpeg" alt="XV Años" style="width: 100%; height: 150px; object-fit: cover;">
            <h3 style="color: #2a4d69; margin-top: 10px;">XV Años</h3>
            <p style="padding: 10px; color: #333333;">Celebra los XV años de una manera inolvidable con una fiesta 
                espectacular que marcará el inicio de una nueva etapa.</p>
        </div>

        <!-- Tarjeta de Bodas -->
        <div style="background-color: #ffffff; width: 200px; border-radius: 10px; box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2); overflow: hidden; text-align: center;">
            <img src="images/boda.jpeg" alt="Bodas" style="width: 100%; height: 150px; object-fit: cover;">
            <h3 style="color: #2a4d69; margin-top: 10px;">Bodas</h3>
            <p style="padding: 10px; color: #333333;">Haz de tu boda un evento de ensueño con una celebración diseñada 
                para reflejar tu amor y personalidad.</p>
        </div>

        <!-- Tarjeta de Bautizos -->
        <div style="background-color: #ffffff; width: 200px; border-radius: 10px; box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2); overflow: hidden; text-align: center;">
            <img src="images/bautizo.jpg" alt="Bautizos" style="width: 100%; height: 150px; object-fit: cover;">
            <h3 style="color: #2a4d69; margin-top: 10px;">Bautizos</h3>
            <p style="padding: 10px; color: #333333;">Celebra el bautizo de una manera especial, 
                rodeado de familia y amigos en un ambiente cálido y lleno de amor.</p>
        </div>

        <!-- Tarjeta de Primera Comunión -->
        <div style="background-color: #ffffff; width: 200px; border-radius: 10px; box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2); overflow: hidden; text-align: center;">
            <img src="images/comunion.jpg" alt="Primera Comunión" style="width: 100%; height: 150px; object-fit: cover;">
            <h3 style="color: #2a4d69; margin-top: 10px;">Primera Comunión</h3>
            <p style="padding: 10px; color: #333333;">Una celebración única para la Primera Comunión, 
                donde la espiritualidad y el amor se unen en un evento especial.</p>
        </div>

        <!-- Tarjeta de Graduación -->
        <div style="background-color: #ffffff; width: 200px; border-radius: 10px; box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2); overflow: hidden; text-align: center;">
            <img src="images/graduacion.jpg" alt="Graduación" style="width: 100%; height: 150px; object-fit: cover;">
            <h3 style="color: #2a4d69; margin-top: 10px;">Graduación</h3>
            <p style="padding: 10px; color: #333333;">Celebra los logros académicos con una fiesta de graduación memorable 
                que marque el inicio de un nuevo capítulo.</p>
        </div>

    </div>
</center>

@stop