<?php
include_once 'php/conexion.php';
Conexion::abrir_conexion();
if(isset($_POST['btn_insertar_usuario'])){
$conexion=Conexion::obtener_conexion();

		if(isset($conexion)){
			try {
				$dato='CALL insertar_usuario("'.strtoupper($_POST['nombre']).'","'.strtoupper($_POST['apellido']).'","'.strtoupper($_POST['user']).'","'.password_hash($_POST['passt'],PASSWORD_DEFAULT).'",'.$_POST['tipo_admin'].','.$_POST['estado_cuenta'].')';
				$pro = mysqli_query($conexion,$dato);
					echo "<script>
	$(document).ready(function(){
		alertify.success('Guardato con exito');
	})
	</script>";
			} catch (Exception $e) {
				print 'Error........';
			}
		}

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
</head>
<body>

	<br>
	<br>
	<div class="container">
		<div class="row">
			<form  id="form_insertar_usuario_1" role="form" method="post" action="insertarusuario2.php">
						<div class="row">
							<div class="col-md-4">
								<div class="input-group input-group-md">
  									<span class="input-group-addon"><b>Nombre:</b></span>
  									<input type="text" class="form-control" name="nombre">
								</div>
							</div>

							<div class="col-md-4">
								<div class="input-group input-group-md">
  									<span class="input-group-addon"><b>Apellido:</b></span>
  									<input type="text" class="form-control" name="apellido">
								</div>
							</div>

							<div class="col-md-4">
								<div class="input-group input-group-md">
  									<span class="input-group-addon"><b>Usuario:</b></span>
  									<input type="text" class="form-control" name="user">
								</div>
							</div>
						</div>

						<br>

						<div class="row">
							<div class="col-md-4">
								<div class="input-group input-group-md">
  									<span class="input-group-addon"><b>Contraseña:</b></span>
  									<input type="password" class="form-control" name="passt">
								</div>
							</div>

							<div class="col-md-4">
								<div class="input-group input-group-md">
  									<span class="input-group-addon"><b>Tipo admin:</b></span>
  									<select class="form-control" name="tipo_admin">
  									<option value="1">1. Normal</option>
  									<option value="2">2. DBA</option>
									</select>
								</div>
							</div>

							<div class="col-md-4">
								<div class="input-group input-group-md">
  									<span class="input-group-addon"><b>Estado cuenta:</b></span>
  									<select class="form-control" name="estado_cuenta">
  									<option value="1">1. Activo</option>
  									<option value="2">2. No Activo</option>
									</select>
								</div>
							</div>
						</div>

						<br>

						<div class="row">
							<div class="col-md-4">
								
							</div>

							<div class="col-md-4">
								<button type="submit" class="btn btn-default" name="btn_insertar_usuario">Guardar</button>		
							</div>
						</div>
			</form>
		</div>
	</div>



</body>
</html>


