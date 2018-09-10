<?php

include_once 'proceso.php';

class ValidadorLogin{
	private $usuario;
	private $error;

	public function __construct($user,$clave,$conexion){
		$this-> error="";
		
		if(!$this->variable_iniciada($user) || !$this->variable_iniciada($clave)){
			$this->usuario=null;
			$this->error="Dabes introducir tu usuario y contraseña...";
		}else{
			$this-> usuario= Proceso::obtener_usuario($conexion,$user);
			if(is_null($this->usuario) || !password_verify($clave,$this->usuario->obtener_pass())){
				$this->error="Datos incorrectos";
			}else{

			}
		}

	}

	private function variable_iniciada($variable){
		if(isset($variable)&& !empty($variable)){
			return true;
		}else{
			return false;
		}
	}

	public function obtener_usuario(){
		return $this-> usuario;
	}

	public function obtener_error(){
		return $this-> error;
	}

	public function mostrar_error(){
		if($this->error !== ""){
			echo "<br> <div class='alert aler-danger' role='alert'>";
			echo $this->error;
			echo "</div><br>";
		}
	}


}


?>