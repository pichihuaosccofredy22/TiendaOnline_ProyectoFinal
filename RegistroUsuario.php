<!DOCTYPE html>
<html lang="es">
<head>
<title>TiendaOnlineAndahuaylas</title>

<meta name="viewport" content="tienda en linia andahuaylas">
<meta http-equiv="Content-Type" content="tienda en linia andahuaylas" />
<meta name="keywords" content="Adahuaylas 2020"/> <script>addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>

<!-- css  -->
<link href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=devanagari,latin-ext" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
<link href="css/registro.css" type="text/css" rel="stylesheet" media="all">   
<!-- //css  -->

</head>
<!-- body  -->
<body>
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
		 echo  "<center><h1><font color=#0AA90A>GRACIAS POR REGISTRARTE!! BENVENIDOS </font></h1></center>
		 <a href='pagina1.php'><center><h2><font color=#32B4FF>ENTRAR!!</h2></center></a><br>";
    }else{/*<form action="direccion" method="post">*/
        echo'<section class="register">
		<div class="register-full">
			<div class="register-left">
				<div class="register">
					<div class="logo">
						<a href="#"><span class="fa fa-graduation-cap" aria-hidden="true"></span></a>
					</div>
					<h1>Registrate a nuestra tienda virtual</h1>
					<p>Registrate y compra tus productos que tenemos para tí!!!.</p>
					<div class="content3">
						<ul>
							<li><a class="" href="FormularioDeRegistroLogin.php"> Iniciar Sesión</a></li>
							<li><a class="read" href="#">Saber más </a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="register-right">
				<div class="register-in">
					<h2><span class="fa fa-pencil"></span> Registrate Aqui</h2>
					<div class="register-form">
						<form action="RegistroUsuario.php" method="post">
							<div class="fields-grid">
								<div class="styled-input agile-styled-input-top">
									<input type="text" name="nombres" required=""> 
									<label>Nombre Completo</label>
									<span></span>
								</div>
								<div class="styled-input">
									<input type="email" name="correo" required="">
									<label>Correo electronico</label>
									<span></span>
								</div>
								<div class="styled-input">
									<input type="tel" name="telefono" required="">
									<label>telefono</label>
									<span></span>
								</div>
								<div class="styled-input">
									<input type="password" name="contraseña" required="">
									<label>contraseña</label>
									<span></span>
								</div>
								<!--<div class="styled-input agile-styled-input-top">
									<select id="category2" required="">
										<option value="">ANDAHUAYLAS*</option>
										<option value="">ABANCAY</option>
										<option value="">CHINCHIROS</option>
										<option value="">AYMARAYS</option>
										<option value="">COTABAMBA</option>
										<option value="">TALAVERA</option>
										<option value="">SAN JERONIMO</option>
										<option value="">OTROS..</option>
									</select>
									<span></span>
								</div>-->
								<div class="clear"> </div>
								 <label class="checkbox"><input type="checkbox" name="checkbox" checked><i></i>Acepto <a href="#">Terminos y Condiciones</a></label>
							</div>
							<input type="submit" value="Registrarse">
						</form>
					</div>
				</div>
				<div class="clear"> </div>
			</div>
		<div class="clear"> </div>
		</div>
		<!-- copyright -->
		<p class="agile-copyright">© FREDY PICHIHUA OSCCO | 2020</p>
		<!-- //copyright -->
	</section>';
   
}   
?>
</body>	

</html>