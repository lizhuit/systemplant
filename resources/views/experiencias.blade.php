@extends('principal')

@section('contenido')
<center>
    <h1 style="color: white;">Experiencias</h1>
    <br>
</center>

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

    <!-- Controles de navegación -->
    <button class="carousel-control-prev" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>

</div>
    <!----------------------- Formulario de Experiencias -------------------------->
    <div class="container my-5">
        <h2 class="text-center mb-4" style="color: white;">Cuéntanos tu experiencia</h2>

        <form>
            <div class="row mb-3">
                <!-- Campo de Nombre -->
                <div class="col-md-6" style="color: white;">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="nombre" placeholder="Nombre">
                </div>
                <!-- Campo de Apellido -->
                <div class="col-md-6" style="color: white;">
                    <label for="apellido" class="form-label">Apellido</label>
                    <input type="text" class="form-control" id="apellido" placeholder="Apellido">
                </div>
            </div>

            <div class="row mb-3">
                <!-- Campo de Email -->
                <div class="col-md-6" style="color: white;">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Email">
                </div>
                <!-- Campo de Teléfono -->
                <div class="col-md-6" style="color: white;">
                    <label for="telefono" class="form-label">Teléfono</label>
                    <input type="tel" class="form-control" id="telefono" placeholder="Teléfono">
                </div>
            </div>

            <!-- Área de Texto para Comentarios -->
            <div class="mb-3">
                <label for="comentario" class="form-label" style="color: white;">¿Te gustó el servicio? ¿Fue inolvidable? ¿Algo para mejorar? Queremos saber todo.</label>
                <textarea class="form-control" id="comentario" rows="4" placeholder="Escribe aquí tu comentario..."></textarea>
            </div>

            <!-- Pregunta de Recomendación -->
            <div class="mb-3" style="color: white;">
                <p>¿Nos recomendarías a tus amigos?</p>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="recomendacion" id="recomendacionSi" value="si">
                    <label class="form-check-label" for="recomendacionSi">Sí</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="recomendacion" id="recomendacionNo" value="no">
                    <label class="form-check-label" for="recomendacionNo">No</label>
                </div>
            </div>

            <!-- Calificación con Estrellas -->
            <div class="mb-3 text-center" style="color: black;">
                <p>¡Puntúanos!</p>
                <span class="star-rating">
                    <i class="bi bi-star" style="font-size: 24px; color: #FFD700;"></i>
                    <i class="bi bi-star" style="font-size: 24px; color: #FFD700;"></i>
                    <i class="bi bi-star" style="font-size: 24px; color: #FFD700;"></i>
                    <i class="bi bi-star" style="font-size: 24px; color: #FFD700;"></i>
                    <i class="bi bi-star" style="font-size: 24px; color: #FFD700;"></i>
                </span>
            </div>

            <!-- Botón de Enviar -->
            <div class="text-center">
                <button type="submit" class="btn btn-outline-dark">Enviar</button>
            </div>
        </form>
    </div>

</div>
@stop
