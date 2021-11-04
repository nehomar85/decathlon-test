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
        <h3>REGISTRO DEPORTISTA</h3>
        <form id="formNuevoDeportista">
          <div class="form-group">
              <label>Nombre</label>
              <input type="text" class="form-control" id="nombreReg" name="nombreReg" required>
          </div>
          <div class="form-group">
              <label>Correo</label>
              <input type="email" class="form-control" id="emailReg" name="emailReg" required>
          </div>
          <div class="form-group">
              <label>Contraseña</label>
              <input type="password" class="form-control" id="passwordReg" name="passwordReg" required>
          </div>
          <div class="form-group">
              <label>Teléfono</label>
              <input type="number" class="form-control" id="telefonoReg" name="telefonoReg">
          </div>
          <button type="submit" class="btn btn-success registro-deportista">Registrar</button>
        </form>
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
    bg_header.style.backgroundImage = "url('assets/img/new-bg.jpg')";
  });
</script>
<script>$.getScript("assets/js/login.js");</script>