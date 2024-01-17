<?php

require_once 'model/Conexion.php';

$con = new Conexion();

$usuarios = $con->getUsers();

require_once 'views/usuarios.php';
?>