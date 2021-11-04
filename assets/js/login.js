$(document).ready(function(){
	
	//GET Consultar Deportista
	$("#loginForm").on("submit", function(e){
		e.preventDefault();
		$.ajax({
		   type: "GET",
		   url: "controllers/usuario.php",
		   data: $("#loginForm").serialize(),
		   success: function(result){
			if (result == true) {
				window.location.reload(true);
			}else{
				alert("verifique datos de ingreso");
			}
		   }
		});
		return false;
	});
	
    //POST Registrar Deportista
    $("#formNuevoDeportista").on("submit", function(c){
		c.preventDefault();
		$.ajax({
		  type: "POST",
		  url: "controllers/usuario.php",
		  data: $("#formNuevoDeportista").serialize(),
		  success: function(result){
			if (result == true) {
			  alert("Deportista, te has registrado correctamente");
			}else{
			  alert(result);
			  window.location.reload(true);
			}
		  }
		});
		return false;
	});
	
	//Logout Deportista
	$(document).on('click', '.logout', function(){
		var userId = $("#userId").val();
		$.ajax({
		   type: "POST",
		   url: "connection/session_destroy.php",
		   data: userId,
		   success: function(result){
			if (result == true) {
				alert("Su sesion ha finalizado correctamente");
				window.location.replace("home.php");
			}
		   }
		});
		return false;		
	});

});