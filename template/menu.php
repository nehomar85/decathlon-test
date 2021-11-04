<nav class="navbar navbar-light navbar-expand-lg fixed-top" id="mainNav">
	<div class="container">
        <a class="navbar-brand" href="home.php">
            <img src="assets/img/logo-Decathlon.png" alt="Decathlon" width="120" height="60" class="d-inline-block align-text-top">
        </a>
        <button data-toggle="collapse" data-target="#navbarResponsive" class="navbar-toggler" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa fa-bars"></i>
        </button>
		<div class="collapse navbar-collapse" id="navbarResponsive">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item"><a class="nav-link" href="categorias.php">Categorías</a></li>
			  <?php if(isset($_SESSION['producto']) && $_SESSION['producto'] == '1') { ?>
				<li class="nav-item"><a class="nav-link" href="productos.php">Productos</a></li>
			  <?php } else { }?>
			  <?php if(empty($id_usuario)) { ?>
				<li class="nav-item"><a class="nav-link" style="cursor:pointer" data-toggle="modal" data-target="#login">Login</a></li>
			  <?php } else { ?>
				<li class="nav-item logout"><a class="nav-link" style="cursor:pointer">Logout<?php $_SESSION['id_usuario'];?></a></li>
				<input id="userId" value="<?php echo $_SESSION['id_usuario'];?>" hidden >
			  <?php } ?>
			</ul>
		</div>
	</div>
</nav>