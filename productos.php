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
        <div class="background-container-tres">
                        <section class="principal-dos">
                <div class="col-md-6">
                    <div class="container">
                      <div class="row">
                        <div class="col text-center">
                          <h2 class="titulo-principal d-block">CUIDADO BIGOTE Y BARBA</h2>
                        </div>
                      </div>
                    </div>
                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <img src="galeria/productos/varuno.jpg" class="d-block w-100 h-100" alt="...">
                        </div>
                        <div class="carousel-item">
                          <img src="galeria/productos/vardos.jpg" class="d-block w-100 h-100" alt="...">
                        </div>
                        <div class="carousel-item">
                          <img src="galeria/productos/vartres.jpg" class="d-block w-100 h-100" alt="...">
                        </div>
                        <div class="carousel-item">
                          <img src="galeria/productos/varcuatro.jpg" class="d-block w-100 h-100" alt="...">
                        </div>
                        <div class="carousel-item">
                          <img src="galeria/productos/varcinco.jpg" class="d-block w-100 h-100" alt="...">
                        </div>
                        <div class="carousel-item">
                          <img src="galeria/productos/varseis.jpg" class="d-block w-100 h-100" alt="...">
                        </div>
                        <div class="carousel-item">
                          <img src="galeria/productos/varsiete.jpg" class="d-block w-100 h-100" alt="...">
                        </div>
                        <div class="carousel-item">
                          <img src="galeria/productos/varocho.jpg" class="d-block w-100 h-100" alt="...">
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
        </div>
        <br>
        <br>
        <br>
        <main>
            <section class="principal-dos">
                <div class="col-md-6">
                    <div class="container">
                      <div class="row">
                        <div class="col text-center">
                          <h2 class="titulo-principal d-block">CUIDADO CABELLO TEXTURA Y COLOR</h2>
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
                      </div>
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <img src="galeria/cabello/cabellouno.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                          <img src="galeria/cabello/cabellodos.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                          <img src="galeria/cabello/cabellotres.jpg" class="d-block w-100" alt="...">
                        </div>
                         <div class="carousel-item">
                          <img src="galeria/cabello/cabellocuatro.jpg" class="d-block w-100" alt="...">
                        </div>
                         <div class="carousel-item">
                          <img src="galeria/cabello/cabellocinco.jpg" class="d-block w-100" alt="...">
                        </div>
                         <div class="carousel-item">
                          <img src="galeria/cabello/cabelloseis.jpg" class="d-block w-100" alt="...">
                        </div>
                         <div class="carousel-item">
                          <img src="galeria/cabello/cabellosiete.jpg" class="d-block w-100" alt="...">
                        </div>
                         <div class="carousel-item">
                          <img src="galeria/cabello/cabelloocho.jpg" class="d-block w-100" alt="...">
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
            
        <footer>   
            <?php include('structure/footer.php');?>
        </footer>
    </main>
    </body>

</html>
