<html>

<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}"> <!-- Aquí se coloca el token CSRF -->
    

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">

<style>
    body {
        background-color: white; /* Fondo blanco */
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        background-attachment: fixed;
        padding-top: 100px; /* Ajusta según la altura de tu menú */
        
    }

    /* Ajuste para pantallas más pequeñas */
    @media (max-width: 768px) {
        body {
            background-size: contain; /* Escala la imagen sin cortarla */
        }
    }
    nav.navbar {
    position: fixed; /* Hace que el menú quede fijo en la parte superior */
    top: 0; /* Se coloca en la parte superior */
    width: 100%; /* Asegura que el menú ocupe todo el ancho */
    z-index: 1000; /* Asegura que el menú esté por encima de otros elementos */    
    }


    .navbar-nav .nav-link {
      font-size: 20px;  /* Ajusta el tamaño de la fuente */
      padding: 20px 25px; /* Ajusta el espaciado interno */
    }

    /*-----------------experiencias--------------*/
    .testimonial {
        width: 80%; /* Ocupa el 80% del ancho de la pantalla, ajusta según sea necesario */
        margin: 20px auto; /* Centra horizontalmente */
        padding: 30px; /* Añade más espacio interno */
        border-radius: 10px;
        background-color: rgba(255, 255, 255, 0.9); /* Fondo blanco semi-transparente */
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2); /* Sombra para darle profundidad */
        position: relative;
    }

    .quote-icon {
        font-size: 2em;
        color: #ccc;
        position: absolute;
    }

    .quote-icon.left {
        left: 20px; /* Ajusta para que el icono esté más hacia el centro */
        top: 50%;
        transform: translateY(-50%);
    }

    .quote-icon.right {
        right: 20px;
        top: 50%;
        transform: translateY(-50%);
    }

    .testimonial-text {
        font-style: italic;
        font-size: 1.5em;
        text-align: center; /* Centra el texto */
        color: #333; /* Color del texto */
        margin: 0;
    }

    .author {
        font-weight: bold;
        text-align: right;
        margin-top: 20px;
        font-size: 1.2em;
        color: #333;
    }

    .star-rating i {
        cursor: pointer;
        transition: color 0.3s;
    }

    .star-rating i:hover,
    .star-rating i:hover ~ i {
        color: #FFD700; /* Color dorado */
    }

    /*---------------Catalogar cliente-------------------*/

    /* Estilo para la tira de imagen debajo del menú */
    .header-banner {
        width: 100%;
        height: 300px; /* Ajusta la altura según tu diseño */
        background-image: url("{{ asset('images/clientes.jpg') }}"); /* Reemplaza 'tu_imagen.jpg' */
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
    }
    h1 {
        font-family: 'Times New Roman', serif;
        font-weight: bold;
        font-size: 60px; 
    }
    h2 {
        font-family: 'Times New Roman', serif;
        font-weight: bold;
        font-size: 50px; 
    }
    .form-label {
        font-weight: bold;
        font-style: italic;
    }

    .form-control {
        border: none;
        border-bottom: 1px solid black;
        border-radius: 0;
    }
    .btn-secondary {
        background-color: #d3d3d3;
        color: white;
        font-weight: bold;
    }

    /*---------------------Imprimir reporte de ingresos--------------------------- */
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
        nav, .btn { 
            display: none !important; 
        }
    }
</style>

<body>
<nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Sueños Eventos</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarColor01">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link" href="{{route('inicio')}}">Inicio
            <span class="visually-hidden">(current)</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('cotizarevento')}}">Cotización</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('contratarevento')}}">Contratación</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('agendarcita')}}">Agenda tu Cita</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('controlpagos')}}">Controlar Pagos</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link active dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Más</a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="{{route('tipoevento')}}">Catálogo de Eventos</a>
            <a class="dropdown-item" href="{{route('proveedores')}}">Catálogo de Proveedores</a>
            <a class="dropdown-item" href="{{route('clientes')}}">Catálogo de Clientes</a>
            <a class="dropdown-item" href="{{route('experiencias')}}">Foro de Experiencias</a>           
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="{{route('reportaringresos')}}">Reportar Ingresos</a>
            <a class="dropdown-item" href="{{route('reportareventos')}}">Reportar Eventos Programados</a>
          </div>
        </li>
      </ul>
      
    </div>
  </div>
</nav>

<script>
document.getElementById('btnRegistrar').addEventListener('click', function() {
    // Aquí puedes incluir lógica de validación antes de abrir el modal si es necesario
    // Simula el envío del formulario y muestra el modal
    var registroModal = new bootstrap.Modal(document.getElementById('registroModal'), {
        keyboard: false
    });
    registroModal.show();
});
</script>

<!-- Tira de imagen debajo del menú clientes -->
{{-- Sección para la imagen de encabezado específica de cada vista --}}
@yield('imagen-encabezado')


@yield('contenido')
</body>
</html>
