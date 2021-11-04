<?php include "connection/session_start.php" ?>
<!DOCTYPE html>
<html>
<head>
  <!-- Importación del Head -->
  <?php include "template/head.html" ?>
</head>
<body>
    <!-- Importación del Navbar -->
    <?php include "template/menu.php" ?>
    <!-- Importación del Header -->
    <?php include "template/header.html" ?>

    <div class="container">

      <!--Grid row-->
      <div class="row mt-5">

        <!--Grid column-->
        <div class="col-md-4 mb-3">
          <!-- Section: Sidebar -->
          <section>
            <!-- Section: Categories -->
            <section>
              <h5>CATEGORÍAS</h5>
              <div class="text-muted small text-uppercase mb-5">
                <p class="mb-3"><a href="#Running" class="card-link-secondary">Running</a></p>
                <p class="mb-3"><a href="#Ciclismo" class="card-link-secondary">Ciclismo</a></p>
                <p class="mb-3"><a href="#Futbol" class="card-link-secondary">Futbol</a></p>
                <p class="mb-3"><a href="#Natación" class="card-link-secondary">Natación</a></p>
                <p class="mb-3"><a href="#Tenis" class="card-link-secondary">Tenis</a></p>
                <p class="mb-3"><a href="#Todo" class="card-link-secondary">Todo..</a></p>
              </div>
            </section>
          </section>
        </div>

        <!--Grid column-->
        <div class="col-md-8 mb-4">

          <section>
            <!-- Grid row -->
            <div class="row" id="products">
         
              <div class="col-md-4">
                <div class="card mb-2">
                  <img class="card-img-top" src="assets/img/productos/gafas-lentes-claros-natacion-xbase-mika-azul-estampado-l.jpg"
                      alt="Card image cap">
                  <div class="card-body">
                    <h4 class="card-title">Gafas natación</h4>
                    <p class="card-text">Gafas de natación xbase azul.</p>
                    <a class="btn btn-xs btn-success" style="zoom:70%">Comprar</a>
                  </div>
                </div>
              </div>

              <div class="col-md-4 clearfix d-none d-md-block">
                <div class="card mb-2">
                  <img class="card-img-top" src="assets/img/productos/gorro-silicona-natacion-500-negro.jpg"
                      alt="Card image cap">
                  <div class="card-body">
                    <h4 class="card-title">Gorro natación</h4>
                    <p class="card-text">Gorro negro para natación</p>
                    <a class="btn btn-xs btn-success" style="zoom:70%">Comprar</a>
                  </div>
                </div>
              </div>

              <div class="col-md-4 clearfix d-none d-md-block">
                <div class="card mb-2">
                  <img class="card-img-top" src="assets/img/productos/tabla-natacion-piscina-azul-negro.jpg"
                      alt="Card image cap">
                  <div class="card-body">
                    <h4 class="card-title">Tabla de surf</h4>
                    <p class="card-text">tabla de tamaño mediana</p>
                    <a class="btn btn-xs btn-success" style="zoom:70%">Comprar</a>
                  </div>
                </div>
              </div>
              <div class="col-md-4 clearfix d-none d-md-block">
                <div class="card mb-2">
                  <img class="card-img-top" src="assets/img/productos/vestido-de-bano-enterizo-natacion-leony-plum-nina-azul.jpg"
                      alt="Card image cap">
                  <div class="card-body">
                    <h4 class="card-title">Vestido de Baño</h4>
                    <p class="card-text">Vestido de baño rosa para niña</p>
                    <a class="btn btn-xs btn-success" style="zoom:70%">Comprar</a>
                  </div>
                </div>
              </div>
  
              <div class="col-md-4">
                <div class="card mb-2">
                  <img class="card-img-top" src="assets/img/productos/camiseta-polo-de-tenis-dry-100-hombre-azul-oscuro.jpg"
                      alt="Card image cap">
                  <div class="card-body">
                    <h4 class="card-title">Camiseta Polo Azul</h4>
                    <p class="card-text">Camiseta Polo azul dry</p>
                    <a class="btn btn-xs btn-success" style="zoom:70%">Comprar</a>
                  </div>
                </div>
              </div>

              <div class="col-md-4 clearfix d-none d-md-block">
                <div class="card mb-2">
                  <img class="card-img-top" src="assets/img/productos/raqueta-de-speedball-turnball-racket-azul.jpg"
                      alt="Card image cap">
                  <div class="card-body">
                    <h4 class="card-title">Raqueta Speedball</h4>
                    <p class="card-text">Raqueta Speedball azul</p>
                    <a class="btn btn-xs btn-success" style="zoom:70%">Comprar</a>
                  </div>
                </div>
              </div>

              <div class="col-md-4 clearfix d-none d-md-block">
                <div class="card mb-2">
                  <img class="card-img-top" src="assets/img/productos/set-palas-tenis-playa-sandever-experience-rojoslashazulslashverde.jpg"
                      alt="Card image cap">
                  <div class="card-body">
                    <h4 class="card-title">Raqueta Playeras</h4>
                    <p class="card-text">Set de Raqueta Playeras</p>
                    <a class="btn btn-xs btn-success" style="zoom:70%">Comprar</a>
                  </div>
                </div>
              </div>
              <div class="col-md-4 clearfix d-none d-md-block">
                <div class="card mb-2">
                  <img class="card-img-top" src="assets/img/productos/bola-de-espuma-de-tenis-tb100x2-rojo.jpg"
                      alt="Card image cap">
                  <div class="card-body">
                    <h4 class="card-title">Bolas de Espuma de tenis</h4>
                    <p class="card-text">Bolas de Espuma de tenis</p>
                    <a class="btn btn-xs btn-success" style="zoom:70%">Comprar</a>
                  </div>
                </div>
              </div>
              

              <div class="col-md-4">
                <div class="card mb-2">
                  <img class="card-img-top" src="assets/img/productos/tenis-trail-running-para-hombre-tr-azul-oscuroslashamarillo.jpg"
                      alt="Card image cap">
                  <div class="card-body">
                    <h4 class="card-title">Tenis hombre para running</h4>
                    <p class="card-text">Tenis hombre para trail running</p>
                    <a class="btn btn-xs btn-success" style="zoom:70%">Comprar</a>
                  </div>
                </div>
              </div>

              <div class="col-md-4 clearfix d-none d-md-block">
                <div class="card mb-2">
                  <img class="card-img-top" src="assets/img/productos/reloj-deportivo-con-manecillas-junior-a300-s-rojo.jpg"
                      alt="Card image cap">
                  <div class="card-body">
                    <h4 class="card-title">Reloj deportivo Rojo</h4>
                    <p class="card-text">Reloj deportivo con manecillas júnior</p>
                    <a class="btn btn-xs btn-success" style="zoom:70%">Comprar</a>
                  </div>
                </div>
              </div>

              <div class="col-md-4 clearfix d-none d-md-block">
                <div class="card mb-2">
                  <img class="card-img-top" src="assets/img/productos/botella-flexible-para-correr-250ml-azul.jpg"
                      alt="Card image cap">
                  <div class="card-body">
                    <h4 class="card-title">Botella blanda flexible</h4>
                    <p class="card-text">Botella blanda tipo soft flask flexible</p>
                    <a class="btn btn-xs btn-success" style="zoom:70%">Comprar</a>
                  </div>
                </div>
              </div>
              <div class="col-md-4 clearfix d-none d-md-block">
                <div class="card mb-2">
                  <img class="card-img-top" src="assets/img/productos/licra-para-correr-mujer-running-kiprun-care-negro-rosa-transpirables.jpg"
                      alt="Card image cap">
                  <div class="card-body">
                    <h4 class="card-title">Licra mujer running</h4>
                    <p class="card-text">Licra mujerpara correr running</p>
                    <a class="btn btn-xs btn-success" style="zoom:70%">Comprar</a>
                  </div>
                </div>
              </div>

              <div class="col-md-4">
                <div class="card mb-2">
                  <img class="card-img-top" src="assets/img/productos/pantaloneta-de-futbol-kipsta-f100-adulto-blanco.jpg"
                      alt="Card image cap">
                  <div class="card-body">
                    <h4 class="card-title">Pantaloneta Futbol</h4>
                    <p class="card-text">Pantaloneta Futbol negra M</p>
                    <a class="btn btn-xs btn-success" style="zoom:70%">Comprar</a>
                  </div>
                </div>
              </div>

              <div class="col-md-4 clearfix d-none d-md-block">
                <div class="card mb-2">
                  <img class="card-img-top" src="assets/img/productos/guantes-de-portero-kispta-f100-resist-adulto-negro-amarillo.jpg"
                      alt="Card image cap">
                  <div class="card-body">
                    <h4 class="card-title">Guantes Arquero</h4>
                    <p class="card-text">Guantes Arquero color negro</p>
                    <a class="btn btn-xs btn-success" style="zoom:70%">Comprar</a>
                  </div>
                </div>
              </div>

              <div class="col-md-4 clearfix d-none d-md-block">
                <div class="card mb-2">
                  <img class="card-img-top" src="assets/img/productos/botas-de-futbol-kipsta-agility-900-hg-turf-ninos-rojo-naranja.jpg"
                      alt="Card image cap">
                  <div class="card-body">
                    <h4 class="card-title">Guayos de futbol</h4>
                    <p class="card-text">Guayos de futbol agility 900</p>
                    <a class="btn btn-xs btn-success" style="zoom:70%">Comprar</a>
                  </div>
                </div>
              </div>
              <div class="col-md-4 clearfix d-none d-md-block">
                <div class="card mb-2">
                  <img class="card-img-top" src="assets/img/productos/minibalon-de-futbol-sunny-300-talla-1-azul-turquesa.jpg"
                      alt="Card image cap">
                  <div class="card-body">
                    <h4 class="card-title">Minibalon de Futbol</h4>
                    <p class="card-text">Minibalon de Futbol turquesa</p>
                    <a class="btn btn-xs btn-success" style="zoom:70%">Comprar</a>
                  </div>
                </div>
              </div>

              <div class="col-md-4">
                <div class="card mb-2">
                  <img class="card-img-top" src="assets/img/productos/guantes-de-ciclismo-infantil-300-negro.jpg"
                      alt="Card image cap">
                  <div class="card-body">
                    <h4 class="card-title">Guantes negros</h4>
                    <p class="card-text">Guantes negros infantil ciclismo</p>
                    <a class="btn btn-xs btn-success" style="zoom:70%">Comprar</a>
                  </div>
                </div>
              </div>

              <div class="col-md-4 clearfix d-none d-md-block">
                <div class="card mb-2">
                  <img class="card-img-top" src="assets/img/productos/casco-bicicleta-urbana-500-amarillo-fluorescente.jpg"
                      alt="Card image cap">
                  <div class="card-body">
                    <h4 class="card-title">Casco Ciclismo</h4>
                    <p class="card-text">Casco para bicicleta urbano</p>
                    <a class="btn btn-xs btn-success" style="zoom:70%">Comprar</a>
                  </div>
                </div>
              </div>

              <div class="col-md-4 clearfix d-none d-md-block">
                <div class="card mb-2">
                  <img class="card-img-top" src="assets/img/productos/morral-transicion-triatlon-aptonia-35l.jpg"
                      alt="Card image cap">
                  <div class="card-body">
                    <h4 class="card-title">Morral Triatlón</h4>
                    <p class="card-text">Morral Triatlón negro sport</p>
                    <a class="btn btn-xs btn-success" style="zoom:70%">Comprar</a>
                  </div>
                </div>
              </div>
              <div class="col-md-4 clearfix d-none d-md-block">
                <div class="card mb-2">
                  <img class="card-img-top" src="assets/img/productos/bicicleta-de-mtb-rin-275quote-de-21-velrockrider-st-100-sport-bike-negro.jpg"
                      alt="Card image cap">
                  <div class="card-body">
                    <h4 class="card-title">Bicicleta rin 29</h4>
                    <p class="card-text">Bicicleta montañera rin 29, 7 vel.</p>
                    <a class="btn btn-xs btn-success" style="zoom:70%">Comprar</a>
                  </div>
                </div>
              </div>
            
            </div>

            </div>
            <!-- Grid row -->

          </section>
          <!--Section: Block Content-->

        </div>
        <!--Grid column-->

      </div>
      <!--Grid row-->

    </div>


    <!-- Importación del Modal -->
    <?php include "template/modal_login.php" ?>
    <!-- Importación del Footer -->
    <?php include "template/footer.html" ?>
    <!-- Scripts adicionales -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/clean-page.js"></script>
</body>
</html>
<script> 
  $(document).ready(function(){
    var bg_header = document.getElementById("header");
    bg_header.style.backgroundImage = "url('assets/img/cat-bg.jpg')";
  });
</script>
<script>$.getScript("assets/js/login.js");</script>