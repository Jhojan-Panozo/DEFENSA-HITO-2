<?php

include_once '../../classes/DatosFamiliares.php';

//$cod=$_POST['cod'];
$ci = $_POST['ci'];
$nombre_p = $_POST['nombre_p'];
$ocupacion_p = $_POST['ocupacion_p'];
$nombre_m = $_POST['nombre_m'];
$ocupacion_m = $_POST['ocupacion_m'];
$antecedentes = $_POST['antecedentes'];




$user=new DatosFamiliares();
$user->insertDatosFamiliares($ci,$nombre_p,$ocupacion_p,$nombre_m,$ocupacion_m,$antecedentes);
//$user->redirecToIndex();