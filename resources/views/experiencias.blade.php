<!--
ELABORADO POR: Lizbeth Huitzil Leal
FECHA: 26-11-2024
DESCRIPCCIÓN: Esta función tiene el objetivo de recoger testimonios
 y opiniones de los usuarios sobre el servicio, lo que puede ayudar a 
 la empresa a obtener retroalimentación y mejorar su servicio.
-->
@extends('principal')

@section('contenido')
<!-- Estilos personalizados -->
<style>
    body {
        background-color: #A6A6A6; /* Fondo gris */
    }
</style>

<!-- Carrusel de Testimonios -->
<div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">

        <!-- Testimonio 1 -->
        <div class="carousel-item active">
            <div class="testimonial">
                <div class="quote-icon left">&lt;</div>
                <p class="testimonial-text">
                    Todo salió a la perfección, y nuestros invitados quedaron impresionados. Recomiendo a Sueño Eventos para cualquier evento especial. ¡Gracias por hacer que la graduación de mi hijo sea inolvidable!
                </p>
                <div class="quote-icon right">&gt;</div>
                <p class="author">- Andrea Dacor</p>
            </div>
        </div>

        <!-- Testimonio 2 -->
        <div class="carousel-item">
            <div class="testimonial">
                <div class="quote-icon left">&lt;</div>
                <p class="testimonial-text">
                    Excelente servicio y atención. Hicieron que nuestro evento fuera inolvidable. ¡Mil gracias a todo el equipo!
                </p>
                <div class="quote-icon right">&gt;</div>
                <p class="author">- Carlos Mendez</p>
            </div>
        </div>

        <!-- Testimonio 3 -->
        <div class="carousel-item">
            <div class="testimonial">
                <div class="quote-icon left">&lt;</div>
                <p class="testimonial-text">
                    Un trabajo impecable y con mucha dedicación. ¡Definitivamente volveré a contratar sus servicios!
                </p>
                <div class="quote-icon right">&gt;</div>
                <p class="author">- Laura Sanchez</p>
            </div>
        </div>

    </div>

    <!-- Controles de navegación del carrusel -->
    <button class="carousel-control-prev" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<!-- Imagen decorativa -->
<div class="text-center my-5">
    <img src="images/experiencias.webp" alt="Imagen entre testimonios y formulario" class="img-fluid" style="max-width: 70%; height: auto;">
</div>

<!-- Formulario de Experiencias -->
<form action="{{ route('encuestas.guardaencuesta') }}" method="POST">
    @csrf
    <div class="container my-5">
        <h1 class="text-center mb-4" style="color: black;">Cuéntanos tu experiencia</h1>

        <!-- Mensajes de éxito o error -->
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        @if(session('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <!-- Selección de Nombre -->
        <div class="form-group mb-3">
            <label for="Nombre" class="form-label" style="color: black;">Nombre:</label>
            <select class="form-select border-0 border-bottom" id="Nombre" name="Nombre" required>
                <option value="" disabled selected>Selecciona tu nombre</option>
                @foreach($cliente as $cli)
                    <option value="{{ $cli->idCli }}">{{ $cli->nombre }}</option>
                @endforeach
            </select>
        </div>

        <!-- Pregunta de gusto -->
        <div class="mb-3" style="color: black;">
            <label for="likeService" class="form-label">¿Te gustó el servicio? ¿Fue inolvidable?</label><br>
            <input type="radio" class="form-check-input" id="likeService" name="likeService" value="true" checked> Sí
            <input type="radio" class="form-check-input" id="likeService" name="likeService" value="false"> No
        </div>

        <!-- Pregunta de recomendación -->
        <div class="mb-3" style="color: black;">
            <label for="recomendar" class="form-label">¿Nos recomendarías con tus amigos?</label><br>
            <input type="radio" class="form-check-input" id="recomendar" name="recomendar" value="true" checked> Sí
            <input type="radio" class="form-check-input" id="recomendar" name="recomendar" value="false"> No
        </div>

        <!-- Calificación con Estrellas -->
        <div class="mb-3 text-center" style="color: black;">
            <p>¡Califícanos!</p>
            <span class="star-rating">
                <i class="bi bi-star" data-value="1" style="font-size: 24px; color: #FFD700; cursor: pointer;"></i>
                <i class="bi bi-star" data-value="2" style="font-size: 24px; color: #FFD700; cursor: pointer;"></i>
                <i class="bi bi-star" data-value="3" style="font-size: 24px; color: #FFD700; cursor: pointer;"></i>
                <i class="bi bi-star" data-value="4" style="font-size: 24px; color: #FFD700; cursor: pointer;"></i>
                <i class="bi bi-star" data-value="5" style="font-size: 24px; color: #FFD700; cursor: pointer;"></i>
            </span>
            <input type="hidden" name="rating" id="rating" value="0">
        </div>

        <!-- Botón de Enviar -->
        <div class="text-center">
            <button type="submit" class="btn btn-secondary rounded-pill px-4 me-2">Registrar</button>
        </div>
    </div>
</form>

<!-- Script para manejo de estrellas -->
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const stars = document.querySelectorAll(".star-rating i");
        const ratingInput = document.getElementById("rating");

        stars.forEach((star, index) => {
            // Manejo del clic en una estrella
            star.addEventListener("click", () => {
                const rating = index + 1;
                ratingInput.value = rating;
                stars.forEach((s, i) => {
                    s.classList.toggle("bi-star-fill", i < rating);
                    s.classList.toggle("bi-star", i >= rating);
                });
            });

            // Hover para previsualizar calificación
            star.addEventListener("mouseover", () => {
                stars.forEach((s, i) => {
                    s.classList.toggle("bi-star-fill", i <= index);
                });
            });

            // Restablecer al salir del hover
            star.addEventListener("mouseout", () => {
                const rating = ratingInput.value;
                stars.forEach((s, i) => {
                    s.classList.toggle("bi-star-fill", i < rating);
                    s.classList.toggle("bi-star", i >= rating);
                });
            });
        });
    });
</script>
@stop

