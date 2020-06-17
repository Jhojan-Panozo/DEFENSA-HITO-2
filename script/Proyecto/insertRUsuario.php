<?php

include_once '../../classes/RegUsuario.php';

//$cod=$_POST['cod'];
$ci = $_POST['ci'];
$nombre = $_POST['nombre'];
$apellido_p = $_POST['apellido_p'];
$apellido_m = $_POST['apellido_m'];
$celular = $_POST['celular'];
$gmail = $_POST['gmail'];
$t_usuario = $_POST['t_usuario'];
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];




$user=new RegUsuario();
$user->insertUsuario($ci,$nombre,$apellido_p,$apellido_m,$celular,$gmail,$t_usuario,$usuario,$contrasena);
//$user->redirecToIndex();
