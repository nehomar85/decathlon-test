<?php
    include_once "../connection/bd.php";

    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        $email = $_GET['email'];
		$password = $_GET['password'];
		$qry_email = $dk_conn->query("SELECT * FROM usuario WHERE correo='$email' AND contrasena=md5('$password')");
		$row_email = $qry_email->fetch_array(MYSQLI_BOTH);
		if($row_email[0]){
			session_start();
			$session = session_id();
			$updUsuario = "UPDATE usuario SET id_session='$session', fecha_session=now() WHERE correo='$email'";
			$resultUpd = $dk_conn->query($updUsuario);
			$msg = true;
		}else{
			$msg = "Deportista y/o Contraseña incorrecto";
		}
		echo $msg;
    }
    
    elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
		$email = $_POST['emailReg'];
		$qry_email = $dk_conn->query("SELECT * FROM usuario WHERE correo='$email' AND estado='1'");
		$row_email = $qry_email->fetch_array(MYSQLI_BOTH);
		if($row_email[0]){
			$msg = true;
		}else{	
			$nombre = $_POST['nombreReg'];
			$telefono = $_POST['telefonoReg'];
			$password = $_POST['passwordReg'];
			$insUser = "INSERT INTO usuario (nombre, correo, contrasena, telefono, estado, id_rol, fecha_creacion)
						VALUES('$nombre', '$email', md5('$password'), '$telefono', '1', '2', date(now()))";
			$resultIns = $dk_conn->query($insUser);
			$msg = "Deportista Registrado Correctamente";
		}
		echo $msg;
    }
    
?>