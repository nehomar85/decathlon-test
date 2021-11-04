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
		  <div class="clearfix"><button class="btn btn-primary float-right" type="button" data-toggle="modal" data-target="#categoriaNuevo">+&nbsp; Nuevo Producto</button></div><br/>
      <div class="row">
        <div class="col-md-10 col-lg-12">
          <div class="table-responsive-lg">
              <table class="table table-bordered table-striped display compact" style="zoom:80%">
                <thead>
                <tr>
                  <th>Id</th>
                  <th>Producto</th>
                  <th>Precio</th>
                  <th>Categoría</th>
                  <th>Descripción</th>
                  <th style="display:none">Imagen</th>
                </tr>
                </thead>
                <tbody>
                <?php include "controllers/consl_producto.php";
                if(isset($row_Producto['id_producto'])){ 
                  do { ?>
                  <tr>
                    <td id="idProducto<?php echo $row_Producto['id_producto'];?>"><strong><button type="button" class="border-0 bg-transparent edit-producto" value="<?php echo $row_Producto['id_producto'];?>"><?=$row_Producto['id_producto']?></button></strong></td>
                    <td id="producto<?php echo $row_Producto['id_producto'];?>" value="<?php echo $row_Producto['nombre'];?>"><?=$row_Producto['nombre']?></td>
                    <td id="precio<?php echo $row_Producto['id_producto'];?>"><?=$row_Producto['precio']?></td>
                    <td id="categoria<?php echo $row_Producto['id_producto'];?>"><?=$row_Producto['categoria']?></td>
                    <td id="descripcion<?php echo $row_Producto['id_producto'];?>"><?=$row_Producto['descripcion_corta']?></td>
                    <td id="imagen<?php echo $row_Producto['id_producto'];?>" style="display:none"><?=$row_Producto['imagen']?></td>
                    <td><button type="button" class="border-0 bg-transparent fa fa-pencil-square-o text-success edit-producto" title="Editar" value="<?php echo $row_Producto['id_producto']; ?>"></button>
                    <button type="button" class="border-0 bg-transparent fa fa-trash text-danger delete-producto" title="Eliminar" value="<?php echo $row_Producto['id_producto']; ?>"></button></td>
                  </tr>
                  <?php } while ($row_Producto = mysqli_fetch_assoc($Producto)); 
                } ?>
                </tbody>
              </table>
          </div>
        </div>
      </div>
    </div>

    <!-- Importación del Modal -->
    <?php include "template/modal_producto.php" ?>
    <?php include "template/modal_producto_upd.php" ?>
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
    bg_header.style.backgroundImage = "url('assets/img/product-bg.jpg')";
  });
</script>
<script>$.getScript("assets/js/login.js");</script>
<script>$.getScript("assets/js/producto.js");</script>