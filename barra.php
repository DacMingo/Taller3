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

<?php
include_once 'php/controlsesion.php';

?>
		<br/>
		<nav class="navbar navbar-default navbar-static-top">
			<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
							<span class="sr-only">Este boton despliega la barra de navegacion</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
								<?php
							if(ControlSesion::sesion_iniciada()){
								$usuario_id=$_SESSION['id_user'];
								$usuario_nombre=$_SESSION['nombre_user'];

								?>
						<a class="navbar-brand" href="#">

						<?php echo ' '. $_SESSION['username_user'];?>

						</a>
					</div>
					<div id="navbar" class="navbar-collapse collapse">

<!--
						<ul class="nav navbar-nav">
							<li class="dropdown" >
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
									<span class="glyphicon glyphicon-align-justify" aria-hidden="true"></span> Opciones <span class="caret"></span>
								</a>
								<ul class="dropdown-menu">
									<li><a href="<?php echo BACKUP_B ?>">Backup</a></li>
								</ul>
							</li>
						</ul>
-->
						<ul class="nav navbar-nav navbar-right">



								<li>
									<a href="#">
										<span class="glyphicon glyphicon-user" aria_hidden="true"></span>

								<?php echo ' '. $_SESSION['nombre_user'].' '.$_SESSION['apellido_user'] ;?>


									</a>
								</li>
								 <li>
                        			<a href="php/cerrar_sesion.php">
                            			<span class="glyphicon glyphicon-log-out" aria-hidden="true"></span> Cerrar sesión
                        			</a>
                    			</li>
								<?php
							}else{
							?>
							<?php
							}
							?>
						</ul>

					</div>
			</div>
		</nav>




</body>
</html>