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
    <div  class="container-fluid">

        <header class="cabecera">
            <div class="caja">
                <?php include('structure/navbar.php');?>;
            </div>   
        </header>
        <main>
            <div class="container">
                <div class="row">
                    <div class="col-lg-2"></div>

                    <div class="col-lg-3">
                        <img src="galeria/clientes/Rulos.jpg" alt="foto de corte cabello con rulos">
                    </div>
                    <div class="col-lg-2"></div>
                    <div class="col-lg-3">
                        <img src="galeria/clientes/Rulos.jpg" alt="foto de corte cabello con rulos">
                    </div>
                    <div class="col-lg-2"></div>

                </div>

              </div>
              </div>
            </div>
          </section>
          <section class="">
            
          </section>
        </main>
        <footer>   
            <?php include('structure/footer.php');?> 
        </footer>
    </main>
    </div>

</html>
