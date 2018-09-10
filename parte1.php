<?php
$titulo='Login';
include_once 'php/validar_login.php';
include_once 'php/controlsesion.php';
include_once 'php/redireccion.php';
include_once 'php/conexion.php';
include_once 'php/proceso.php';



if(ControlSesion::sesion_iniciada()){
	Redireccion::redirigir(INICIO_USUARIO);
}

if(isset($_POST['iniciar_sesion'])){
	Conexion::abrir_conexion();
	//strtoupper()
	$validador= new ValidadorLogin(strtoupper($_POST['usuario']),$_POST['contra'],Conexion::obtener_conexion());

	if($validador->obtener_error()==='' && !is_null($validador->obtener_usuario())){
		//iniciar sesion
		//redirigir a index
		//echo 'inicio sesion ok';
		ControlSesion::iniciar_sesion($validador->obtener_usuario()->obtener_id_usuario(),$validador->obtener_usuario()->obtener_nombre(),$validador->obtener_usuario()->obtener_apellido(),$validador->obtener_usuario()->obtener_username());
			Redireccion::redirigir('barra.php');
	}else{
          echo "<script>
                $(document).ready(function(){
            $('#tabla_d').load('tablas/tabla_diagnostico.php');
            alertify.error('Datos Incorrectos');
          })
          </script>";
	}

	Conexion::cerrar_conexion();
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="vierport" content="width=device-width, initial-scale=1">
	<title>Inicio</title>

    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" >
    <script src="js/funciones.js"></script>
</head>
<body>

	<br>
	<br>
	<div class="container">
		<div class="row">
			<form id="form_login_1" role="form" method="post" action="parte1.php">
				<div class="col-md-4">
				
				</div>
				<div class="col-md-4">
					<div class="panel panel-default">
						<div class="panel-heading text-center">
							<label>Login</label>
						</div>
						<div class="panel-body">
						<label>Usuario: </label>
						<input type="text" name="usuario" id="id_usuario"
												<?php 
						if(isset($_POST['iniciar_sesion']) && isset($_POST['usuario']) && !empty($_POST['usuario'])){
							echo 'value="'.$_POST['usuario'].'"';
						}
						?> 
						>
						<br>
						<br>
						<br>
						<label>Contraseña: </label>
						<input type="password" name="contra" id="id_contra">
						<br>
						<br>
					<button type="submit" class="btn btn-default" name="iniciar_sesion">Iniciar</button>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>



</body>
</html>