<?php
class VariableUsuario{

	private $id_usuario;
	private $nombre;
	private $apellido;
	private $username;
	private $pass;
	private $tipo;
	private $estado;


	public function __construct($id_usuario,$nombre,$apellido,$username,$pass,$tipo,$estado){
		$this->id_usuario=$id_usuario;
		$this->nombre=$nombre;
		$this->apellido=$apellido;
		$this->tipo=$tipo;
		$this->pass=$pass;
		$this->estado=$estado;
		$this->username=$username;
	}

	//get - recuperar variables de una clase
	public function obtener_id_usuario(){
		return $this->id_usuario;
	}

	public function obtener_nombre(){
		return $this->nombre;
	}

	public function obtener_apellido(){
		return $this->apellido;
	}

	public function obtener_username(){
		return $this->username;
	}

	public function obtener_pass(){
		return $this->pass;
	}
	
	public function obtener_tipo(){
		return $this->tipo;
	}

	public function obtener_estado(){
		return $this->estado;
	}



	//set - cambiar los datos de una clase

	public function cambiar_id_usuario($id_usaurio){
		$this->id_puesto=$id_usuario;
	}


	public function cambiar_nombre($nombre){
		$this->nombre=$nombre;
	}

	public function cambiar_apellido($apellido){
		$this->apellido=$apellido;
	}

	public function cambiar_tipo($tipo){
		$this->tipo=$tipo;
	}


	public function cambiar_pass($pass){
		$this->pass=$pass;
	}

	public function cambiar_estado($estado){
		$this->estado=$estado;
	}

	public function cambiar_username($username){
		$this->username=$username;
	}

}








?>