<?php
include_once 'proceso.php';
include_once 'conexion.php';

include_once 'validar_login.php';
include_once 'controlsesion.php';
include_once 'redireccion.php';

Conexion::abrir_conexion();


	if(empty($_POST['nombre'])
		||empty($_POST['apellido'])
		||empty($_POST['user'])
		||empty($_POST['passt'])
		||empty($_POST['tipo_admin'])
		||empty($_POST['estado_cuenta'])){
		echo "
				<div class='container'>
					<div class='row'>
						<div class='col-md-4'>

						</div>
						<div class='col-md-4'>
							<br>
							<div class='alert alert-danger text-center' role='alert'>
								Un campo puede estar vacio. Tiene que llenar todos los campos.....
							</div>
						</div>
					</div>
				</div>
				";
				

	}else{
	$cuenta_nuevo_insertado=Proceso::insertar_usuario(Conexion::obtener_conexion(),strtoupper($_POST['nombre']),strtoupper($_POST['apellido']),strtoupper($_POST['user']),password_hash($_POST['passt'],PASSWORD_DEFAULT),$_POST['tipo_admin'],$_POST['estado_cuenta']);	
			echo "
				<div class='container'>
					<div class='row'>
						<div class='col-md-4'>

						</div>
						<div class='col-md-4'>
							<br>
							<div class='alert alert-danger text-center' role='alert'>
								Ingresado con Exito.........
							</div>
						</div>
					</div>
				</div>
				";


				?>
						<button onclick="location.href='../insertarusuario1.html'">Registrar</button>
				<?php
	}






if(ControlSesion::sesion_iniciada()){
	Redireccion::redirigir('../barra.php');
}

if(isset($_POST['iniciar_sesion_2'])){
	Conexion::abrir_conexion();
	//strtoupper()
	$validador= new ValidadorLogin(strtoupper($_POST['usuario_1']),$_POST['contra_1'],Conexion::obtener_conexion());

	if($validador->obtener_error()==='' && !is_null($validador->obtener_usuario())){
		//iniciar sesion
		//redirigir a index
		//echo 'inicio sesion ok';
		ControlSesion::iniciar_sesion($validador->obtener_usuario()->obtener_id_usuario(),$validador->obtener_usuario()->obtener_nombre(),$validador->obtener_usuario()->obtener_apellido(),$validador->obtener_usuario()->obtener_username());
			Redireccion::redirigir('../barra.php');
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