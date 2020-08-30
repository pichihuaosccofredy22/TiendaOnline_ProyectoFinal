<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" >
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="">
    <meta name="description" content="TIENDA ONLINE ANDAHUAYLAS">
    <meta name="keywords" content="store Andahuaylas">
    <meta name="author" content="FREDY PICHIHUA OSCCO 2020">

    <title>TiendaOlineAndahuaylas</title>

<link href="css/FormularioDeRegistroLogin.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="js/jquery-1.11.1.min.js"></script> 
    <!--Fuente de google apis -->
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,700,600,300italic,300' rel='stylesheet' type='text/css'>
</head>

<body>

    <h1>HOLA! Registrate pulsa el button +</h1>
	<!-- /FURMULARIO DE REGISTRO -->
	<?php 
    require_once 'ConexionBD.php';
    $conexion = new mysqli($hn, $un, $pw, $db);
    if ($conexion->connect_error) die ("Fatal error");

    if(isset($_POST['nombres']) && isset($_POST['correo'])&& isset($_POST['telefono'])&& isset($_POST['contraseña']))
    {
        $nombres = $_POST['nombres'];
        $correo = $_POST['correo'];
        $telefono = $_POST['telefono'];
        $contraseña = $_POST['contraseña'];
        
        $query = "INSERT INTO cliente VALUES('$nombres','$correo','$telefono','$contraseña')";
        $result = $conexion->query($query);
        if (!$result) die ("<script>if(confirm('EL NOMBRE O EL CORREO INGRESADO YA EXISTE INICIA SESIÓN O VUELVE A REGISTRARTE CON OTRO CORREO!!')){
         document.location='index.html';}
        else{ alert('Operacion Cancelada');
         }</script>");
    }else{/*<form action="direccion" method="post">*/
        echo'		<div class="container w3l">
		<span title="REGISTER" class="button">+</span>
	<div class="content">
	  <div class="head">
		<h3>Registrarse</h3>
	  </div>
	  <div class="body">
		  <div class="login-top sign-top w3-agile">
					   <form action="RegistroUsuario.php" method="post">
							  <input type="text" name="nombres" class="name active" placeholder="Nombres" required="">
							  <input type="text" name="correo" class="email" placeholder="Correo Electronico" required="">
							  <input type="text" name="telefono" class="phone" placeholder="Telefono" required="">
							  <input type="password" name="contraseña" class="password" placeholder="Contraseña" required="">		
							  <input type="checkbox" id="brand1" value="">
							  <label for="brand1"><span></span> Recuérdame</label>
							  <div class="login-bottom">
								  <div class="forgot">
									  <a href="#">Olvidaste Tu contraseña?</a>
								  </div>
								  <div class="sub">
									  
										  <input type="submit" value="REGISTRARSE">
									  
								  </div>
					  
							  <div class="clear"></div>
						  </div>	
						  </form>
						  
					  </div>
	  </div>
	</div>
  </div>';
   
}   
?>

<div class="login-inner">

	 <div class="log-head" >
     <br><br><br>
			 </div>
				 <div class="social-icons">
				 <ul> 
					 <li><a href="#"><span class="icons"></span><span class="text">Facebook</span></a></li>
					 <li class="twt"><a href="#"><span class="icons"></span><span class="text">Twitter</span></a></li>
					 <li class="ggp"><a href="#"><span class="icons"></span><span class="text">Google+</span></a></li>
					 
					 <div class="clearfix"> </div>
				 </ul> 
			 </div>
			 </div>	







	

	<!-- //FURMULARIO DE REGISTRO -->
    <!--la seguiente linia de codigo llama a jquery de la pagina
oficial sirve para dislizar el opcion de registro-->
<script src="http://code.jquery.com/jquery-2.1.4.min.js"></script> 
		<script>
		$('.button').click(function (e) {
		  e.preventDefault();
		  $(this).parent().toggleClass('expand');
		  $(this).parent().children().toggleClass('expand');
		});
		</script>
		  <!-- /login -->	
		  
    


		  <!--login termina -->
			
						<!-- //login -->	
	<div class="clearfix"> </div>	
  <!-- /copy-right -->	
<div class="copy-right w3ls">
		<p> © FREDY PICHIHUA OSCCO  |ANDAHUAYLAS - 2020</p>
	</div>
	 
</body>
</html>
