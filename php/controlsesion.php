<?php
class ControlSesion{
	public static function iniciar_sesion($id_user,$nombre_user,$apellido_user,$username_user){
		//$_SESSION ->variable global
		
		if(session_id()==''){
			session_start();
		}

		$_SESSION['id_user']=$id_user;
		$_SESSION['nombre_user']=$nombre_user;
		$_SESSION['apellido_user']=$apellido_user;
		$_SESSION['username_user']=$username_user;
	}

public static function cerrar_sesion(){
		if(session_id()==''){
			session_start();
		}

		if(isset($_SESSION['id_user'])){//borrar cuquis
			unset($_SESSION['id_user']);
		}

		if(isset($_SESSION['nombre_user'])){//borrar cuquis
			unset($_SESSION['nombre_user']);
		}	

		if(isset($_SESSION['apellido_user'])){//borrar cuquis
			unset($_SESSION['apellido_user']);
		}		

		if(isset($_SESSION['username_user'])){//borrar cuquis
			unset($_SESSION['username_user']);
		}
		session_destroy();//destruye espacio de memoria de la sesion
}

public static function sesion_iniciada(){
		if(session_id()==''){
			session_start();
		}

		if(isset($_SESSION['id_user']) && isset($_SESSION['nombre_user']) && isset($_SESSION['apellido_user']) && isset($_SESSION['username_user'])){
			return true;
		}else{
			return false;
		}
}


}
?>