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
        <h3>CATEGORIAS DEPORTES</h3>
        <div class="row row-cols-1 row-cols-md-5 g-4">
            <div class="col">
              <div class="card h-100" style="background-color: rgba(30, 30, 30, 0.6);">
                <img src="assets/img/categorias/cat-running.jpg" class="card-img-top" alt="...">
                <div class="card-body" style="background-color: rgba(30, 30, 30, 0.6);">
                  <a href="categorias.php" class="card-link text-primary text-center"><h4 class="card-title">Running</h4></a>
                </div>
              </div>
            </div>
            <div class="col">
                <div class="card h-100" style="background-color: rgba(30, 30, 30, 0.6);">
                  <img src="assets/img/categorias/cat-ciclismo.jpg" class="card-img-top" alt="...">
                  <div class="card-body" style="background-color: rgba(30, 30, 30, 0.6);">
                    <a href="categorias.php" class="card-link text-primary text-center"><h4 class="card-title">Ciclismo</h4></a>
                  </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100" style="background-color: rgba(30, 30, 30, 0.6);">
                  <img src="assets/img/categorias/cat-natacion.jpg" class="card-img-top" alt="...">
                  <div class="card-body" style="background-color: rgba(30, 30, 30, 0.6);">
                    <a href="categorias.php" class="card-link text-primary text-center"><h4 class="card-title">Natación</h4></a>
                  </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100" style="background-color: rgba(30, 30, 30, 0.6);">
                  <img src="assets/img/categorias/cat-futbol.jpg" class="card-img-top" alt="...">
                  <div class="card-body" style="background-color: rgba(30, 30, 30, 0.6);">
                    <a href="categorias.php" class="card-link text-primary text-center"><h4 class="card-title">Fútbol</h4></a>
                  </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100" style="background-color: rgba(30, 30, 30, 0.6);">
                  <img src="assets/img/categorias/cat-tenis.jpg" class="card-img-top" alt="...">
                  <div class="card-body" style="background-color: rgba(30, 30, 30, 0.6);">
                    <a href="categorias.php" class="card-link text-primary text-center"><h4 class="card-title">Tenis</h4></a>
                  </div>
                </div>
            </div>
        </div>
        
        <div>
          <?php include "template/carrusel.php" ?>
        <div>

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
    bg_header.style.backgroundImage = "url('assets/img/main-bg.jpg')";
  });
</script>
<script>$.getScript("assets/js/login.js");</script>