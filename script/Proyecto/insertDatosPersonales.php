<?php

include_once '../../classes/DatosPersonales.php';

//$cod=$_POST['cod'];
$ci = $_POST['ci'];
$nombre = $_POST['nombre'];
$pellido_p = $_POST['pellido_p'];
$pellido_m = $_POST['pellido_m'];
$domicilio = $_POST['domicilio'];
$telefono = $_POST['telefono'];
$celular = $_POST['celular'];
$edad = $_POST['edad'];
$masculino = $_POST['masculino'];
$estado_c = $_POST['estado_c'];
$religion = $_POST['religion'];
$ocupacion = $_POST['ocupacion'];
$direccion = $_POST['direccion'];
$fecha_n = $_POST['fecha_n'];
$escolaridad = $_POST['escolaridad'];



$user=new DatosPersonales();
$user->insertDatosPersonales($ci,$nombre,$pellido_p,$pellido_m,$domicilio,$telefono,$celular,$edad,$masculino,$estado_c,$religion,$ocupacion,$direccion,$fecha_n,$escolaridad );
//$user->redirecToIndex();