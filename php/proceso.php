<?php
include_once 'variable_usuario.php';
class Proceso{
		//-----------------------------INSERTAR USUARIO---------------------------
	public static function insertar_usuario($conexion,$nombre,$apellido,$username,$pass,$tipo,$activo){
		$usuario_condicion = false;
		if(isset($conexion)){
			try {
				$dato='CALL insertar_usuario("'.$nombre.'","'.$apellido.'","'.$username.'","'.$pass.'",'.$tipo.','.$activo.')';
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
		return $usuario_condicion;
	}


			//-----------------------------OBTENER USUARIO---------------------------
	public static function obtener_usuario($conexion,$user){
		$usuario = null;
		if(isset($conexion)){
			try {
				$dato='SELECT id_usuario,nombre,apellido,username,pass,tipo,activo FROM usuario WHERE username = "'.$user.'";';
				$result = mysqli_query($conexion,$dato);
                while ($ver = mysqli_fetch_row($result)) {
                $usuario = new VariableUsuario($ver[0],
												$ver[1],
												$ver[2],
												$ver[3],
												$ver[4],
												$ver[5],
												$ver[6]);
				}



			} catch (Exception $e) {
				print 'Error........';
			}
		}
		return $usuario;
	}








}




?>