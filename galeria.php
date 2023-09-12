<!DOCTYPE html>

<html lang="es">

    <head>  
        <?php include('structure/head.php');?>     
        <style>
            .principal-dos {
                display: flex;
                justify-content: center; /* Centra horizontalmente */
                align-items: center; /* Centra verticalmente */
                height: 100vh; /* Aprovecha el alto de la ventana para centrar verticalmente */
            }

            .col-lg-5 {
                text-align: center; /* Centra horizontalmente el contenido dentro de la columna */
            }

            .custom-color {
               color: white; /* Cambia este valor al color que desees */
            }

        </style>   
    </head>
    <body>

        <header class="cabecera">
            <div class="caja">
                <?php include('structure/navbar.php');?>;
            </div>   
        </header>
        <div class="background-container-dos">
            <div class="container">
                <div class="row">
                    <!-- En pantallas grandes, la imagen ocupará 6 columnas a la izquierda -->
                    <div class="col-lg-2">
                        <br>
                        <br>
                        <br>
                        <img src="img/logo.jpg" alt="Descripción de la imagen" class="img-responsive mx-auto d-block">
                    </div>       
                </div>    
            </div>
        </div>
        <main>
            <section class="principal-dos">
                <div class="col-md-6">
                    <div class="container">
                      <div class="row">
                        <div class="col text-center">
                          <h2 class="titulo-principal d-block">BARBAS OSCURAS ESTILOS</h2>
                        </div>
                      </div>
                    </div>
                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <img src="galeria/carrusel barbas/estilo-oscura-corta.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                          <img src="galeria/carrusel barbas/estilo-oscura-corta-encuadre.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                          <img src="galeria/carrusel barbas/estilo-oscura-mediana.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                          <img src="galeria/carrusel barbas/estilo-oscura-corta-blog.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                          <img src="galeria/carrusel barbas/estilo-oscura-corta-encuadre.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                          <img src="galeria/carrusel barbas/estilo-oscura-corta-tupida.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                          <img src="galeria/carrusel barbas/estilo-oscura-encuadre-sobrio.jpg" class="d-block w-50 h-50"alt="...">
                        </div>
                        <div class="carousel-item">
                          <img src="galeria/carrusel barbas/estilo-rubia-corta-fina.jpg" class="d-block w-100" alt="...">
                        </div>
                      </div>
                      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                      </button>
                      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                      </button>
                    </div>
                </div>
            </section>

            <section class="principal-dos">
                <div class="col-md-6">
                    <div class="container">
                      <div class="row">
                        <div class="col text-center">
                          <h2 class="titulo-principal d-block">CORTES Y PEINADOS DE ESTILO</h2>
                        </div>
                      </div>
                    </div>
                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                      <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 3"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 4"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5" aria-label="Slide 5"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="6" aria-label="Slide 6"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="7" aria-label="Slide 7"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="8" aria-label="Slide 8"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="9" aria-label="Slide 9"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="10" aria-label="Slide 10"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="11" aria-label="Slide 11"></button>
                      </div>
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <img src="galeria/cortes/uno.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                          <img src="galeria/cortes/dos.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                          <img src="galeria/cortes/tres.jpg" class="d-block w-100" alt="...">
                        </div>
                         <div class="carousel-item">
                          <img src="galeria/cortes/cuatro.jpg" class="d-block w-100" alt="...">
                        </div>
                         <div class="carousel-item">
                          <img src="galeria/cortes/doce.jpg" class="d-block w-100" alt="...">
                        </div>
                         <div class="carousel-item">
                          <img src="galeria/cortes/seis.jpg" class="d-block w-100" alt="...">
                        </div>
                         <div class="carousel-item">
                          <img src="galeria/cortes/siete.jpg" class="d-block w-100" alt="...">
                        </div>
                         <div class="carousel-item">
                          <img src="galeria/cortes/ocho.jpg" class="d-block w-100" alt="...">
                        </div>
                         <div class="carousel-item">
                          <img src="galeria/cortes/nueve.jpg" class="d-block w-100" alt="...">
                        </div>
                         <div class="carousel-item">
                          <img src="galeria/cortes/diez.jpg" class="d-block w-100" alt="...">
                        </div>
                         <div class="carousel-item">
                          <img src="galeria/cortes/once.jpg" class="d-block w-100" alt="...">
                        </div>
                      </div>
                      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                      </button>
                      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                      </button>
                    </div>
                </div>
            </section>
            <br>
            <br>
            <br>
            <section class="principal-dos">
                <div class="col-md-6">
                        <div class="container">
                            <div class="row">
                                <div class="col text-center">
                                    <h3 class="titulo-principal">Diferenciales</h3>
                                    <div class="contenido-diferenciales">
                                        <ul class="lista-diferenciales">
                                            <li class="items">Atención personalizada a los clientes</li>
                                            <li class="items">Espacio diferenciado</li>
                                            <li class="items">Localización</li>
                                            <li class="items">Profesionales calificados</li>
                                            <li class="items">Puntualidad</li>
                                            <li class="items">Limpieza</li>
                                        </ul><img src="img/corteuno.jpg" class="imagen-diferenciales" width="100">
                                    </div>    
                                </div>
                            </div>
                        </div>
                </div>
            </section>             
        <footer>   
            <?php include('structure/footer.php');?> 
        </footer>
    </main>
    </body>

</html>
