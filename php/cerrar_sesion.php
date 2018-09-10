<?php

include_once 'controlsesion.php';
include_once 'redireccion.php';

ControlSesion :: cerrar_sesion();
Redireccion :: redirigir('http://localhost:1080/taller3');

?>