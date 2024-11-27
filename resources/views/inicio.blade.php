@extends('principal')

@section('contenido')
<!-- Sección del encabezado con efecto de "video" -->
<div style="position: relative; height: 100vh; overflow: hidden;">
    <!-- Imagen de fondo con efecto -->
    <div style="
        position: absolute; 
        top: 0; 
        left: 0; 
        width: 100%; 
        height: 100%; 
        background-image: url('{{ asset('images/inicio.jpg') }}'); 
        background-size: cover; 
        background-position: center; 
        animation: movimiento 10s infinite alternate linear;">
    </div>

    <!-- Caja de texto sobre la imagen -->
    <div style="
        position: absolute; 
        top: 50%; 
        right: 10%; 
        transform: translateY(-50%); 
        background-color: rgba(0, 0, 0, 0.5); 
        padding: 30px; 
        border-radius: 10px; 
        max-width: 400px; 
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);">
        <center>
        <h1 style="font-size: 3.5em; font-weight: bold; color: white; margin: 0;">Bienvenido a</h1>
        <h1 style="font-size: 4em; font-weight: bold; color: white; margin-top: -10px;">Sueño Eventos</h1>
        </center>
    </div>
</div>

<!-- Sección de contenido debajo del encabezado con imagen a la derecha -->
<div style="display: flex; align-items: center; padding: 50px; background-color: #f9f9f9;">
    <!-- Columna de texto a la izquierda -->
    <div style="flex: 1; padding-right: 30px;">
        <h1 style="color: black; font-size: 2em; font-weight: bold;">Somos Sueño Eventos</h1>
        <p style="color: #2a4d69; font-size: 1.2em; line-height: 1.6; margin-top: 20px;">
            <strong>"Sueño Eventos"</strong>, fundada por Scarlett Smith en el 2000, 
            se ha convertido en una empresa líder en la organización de eventos a nivel global. 
            Gracias a su dedicación, atención y enfoque en la calidad, ha logrado establecer 
            sucursales en numerosos países y goza de una excelente reputación en su rubro.
        </p><br>
        <p style="color: #2a4d69; font-size: 1.2em; line-height: 1.6; margin-top: 20px;">
        <strong>Palabras de la fundadora:</strong> "Creo que planificar un evento debería ser divertido, 
        emocionante y sin estrés. Gracias a mis años de experiencia y a mi gran pasión por lo que hago,
        ten la seguridad de que tendrás el evento de tus sueños. Todo lo que necesito de ti es que me cuentes 
        exactamente lo que deseas. ¿Qué haré? Me aseguraré de lograr una fiesta magnífica que supere tus expectativas.
        </p><br>
        <p style="color: #2a4d69; font-size: 1.2em; line-height: 1.6; margin-top: 20px;">
        No hay nada que me guste más que ver el rostro de mis clientes cuando llegan al lugar de celebración, 
        porque sé que el trabajo está bien hecho. ¿Serás mi próximo cliente? Esta página está a tu disposición 
        para empezar a planificar un evento único ¡déjalo en nuestras manos!
        </p>
    </div>

    <!-- Columna de imagen a la derecha -->
    <div style="flex: 1;">
        <img src="{{ asset('images/somos un_inicio.webp') }}" alt="Imagen Evento" 
            style="width: 100%; height: 60%; object-fit: cover; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);">
    </div>
</div>

<!-- Sección de collage de imágenes llamativas -->
<div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(200px, 1fr)); gap: 20px; padding: 50px; background-color: #f9f9f9;">
    <!-- Imágenes del collage -->
    <div style="border-radius: 10px; overflow: hidden; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);">
        <img src="{{ asset('images/img1.jpg') }}" alt="Imagen Evento 1" style="width: 100%; height: 100%; object-fit: cover;">
    </div>
    <div style="border-radius: 10px; overflow: hidden; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);">
        <img src="{{ asset('images/img2.jpg') }}" alt="Imagen Evento 2" style="width: 100%; height: 100%; object-fit: cover;">
    </div>
    <div style="border-radius: 10px; overflow: hidden; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);">
        <img src="{{ asset('images/img3.jpg') }}" alt="Imagen Evento 3" style="width: 100%; height: 100%; object-fit: cover;">
    </div>
    <div style="border-radius: 10px; overflow: hidden; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);">
        <img src="{{ asset('images/img4.jpg') }}" alt="Imagen Evento 4" style="width: 100%; height: 100%; object-fit: cover;">
    </div>
    <div style="border-radius: 10px; overflow: hidden; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);">
        <img src="{{ asset('images/img5.jpg') }}" alt="Imagen Evento 4" style="width: 100%; height: 100%; object-fit: cover;">
    </div>
    <div style="border-radius: 10px; overflow: hidden; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);">
        <img src="{{ asset('images/img6.jpg') }}" alt="Imagen Evento 4" style="width: 100%; height: 100%; object-fit: cover;">
    </div>
    <div style="border-radius: 10px; overflow: hidden; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);">
        <img src="{{ asset('images/img7.jpg') }}" alt="Imagen Evento 4" style="width: 100%; height: 100%; object-fit: cover;">
    </div>
    <div style="border-radius: 10px; overflow: hidden; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);">
        <img src="{{ asset('images/img8.jpeg') }}" alt="Imagen Evento 4" style="width: 100%; height: 100%; object-fit: cover;">
    </div>
    <div style="border-radius: 10px; overflow: hidden; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);">
        <img src="{{ asset('images/img9.jpeg') }}" alt="Imagen Evento 4" style="width: 100%; height: 100%; object-fit: cover;">
    </div>
    <div style="border-radius: 10px; overflow: hidden; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);">
        <img src="{{ asset('images/img10.jpg') }}" alt="Imagen Evento 4" style="width: 100%; height: 100%; object-fit: cover;">
    </div>
    <div style="border-radius: 10px; overflow: hidden; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);">
        <img src="{{ asset('images/img11.jpg') }}" alt="Imagen Evento 4" style="width: 100%; height: 100%; object-fit: cover;">
    </div>
    <div style="border-radius: 10px; overflow: hidden; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);">
        <img src="{{ asset('images/img12.jpg') }}" alt="Imagen Evento 4" style="width: 100%; height: 100%; object-fit: cover;">
    </div>
    <!-- Agrega más imágenes según sea necesario -->
</div>

<!-- Sección de contacto y redes sociales -->
<!--<div style="padding: 50px; background-color: #636363; color: white; text-align: center;">-->
<div style="padding: 50px; background-color: #A9A9A9; color: white; text-align: center;">

    <h1>Contáctanos</h1>
    <p style="font-size: 1.2em;">Síguenos en nuestras redes sociales o visítanos en nuestra ubicación.</p>

    <!-- Redes Sociales -->
    <div style="margin-top: 30px;">
        <a href="https://www.tiktok.com/es/" style="margin-right: 20px; text-decoration: none;">
            <img src="{{ asset('images/tik.png') }}" alt="TikTok" style="width: 40px; height: 40px;">
        </a>
        <a href="https://mx.linkedin.com/" style="margin-right: 20px; text-decoration: none;">
            <img src="{{ asset('images/linkedin.png') }}" alt="Linkedin" style="width: 40px; height: 40px;">
        </a>
        <a href="https://www.youtube.com/" style="text-decoration: none;">
            <img src="{{ asset('images/youtube.png') }}" alt="Youtube" style="width: 40px; height: 40px;">
        </a>
    </div>


    <!-- Dirección -->
    <div style="margin-top: 30px;">
        <h1>Ubicación:</h1>
        <p>Friendship Heights, Washington D. C., Distrito de Columbia, EE. UU.</p>
    </div>

    <!-- Mapa de Google -->
    <div style="margin-top: 30px;">
        <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d12410.09165821022!2d-77.09570220104794!3d38.95772623318793!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1shttps%3A%2F%2Fwww.google.com%2Fmaps%2Fdir%2F19.0840832%2C-98.287616%2FFriendship%2BHeights%2C%2BWashington%2BD.%2BC.%2C%2BDistrito%2Bde%2BColumbia%2C%2BEE.%2BUU.%2F%4028.6363147%2C-99.5906968%2C2749110m%2Fdata%3D*213m2*211e3*214b1*214m9*214m8*211m1*214e1*211m5*211m1*211s0x89b7c993f8d54295%3A0xd77ae8e84bdf7856*212m2*211d-77.083787*212d38.9565712%3Fentry%3Dttu%26g_ep%3DEgoyMDI0MTExNy4wIKXMDSoASAFQAw%253D%253D!5e0!3m2!1ses!2smx!4v1731965269394!5m2!1ses!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
</div>


<!-- Estilos adicionales -->
<style>
    @keyframes movimiento {
        0% {
            transform: scale(1) translateY(0);
        }
        100% {
            transform: scale(1.3) translateY(-20px);
        }
    }
</style>
@stop
