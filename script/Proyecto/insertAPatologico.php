<?php

include_once '../../classes/DatosAPatologicos.php';

//$cod=$_POST['cod'];
$ci = $_POST['ci'];
$tratamiento_m = $_POST['tratamiento_m'];
$medicamentos = $_POST['medicamentos'];
$alergias = $_POST['alergias'];
$enfermedades = $_POST['enfermedades'];
$gastricas = $_POST['gastricas'];
$hepatitis = $_POST['hepatitis'];
$tuberculosis = $_POST['tuberculosis'];
$venerias = $_POST['venerias'];
$embarazada = $_POST['embarazada'];
$intermedio = $_POST['intermedio'];
$post_exodoncia = $_POST['post_exodoncia'];
$anticonceptivos = $_POST['anticonceptivos'];
$asma = $_POST['asma'];
$epilepsia = $_POST['epilepsia'];
$renal = $_POST['renal'];
$chagas = $_POST['chagas'];
$diabetes = $_POST['diabetes'];
$sida = $_POST['sida'];
$leusemia = $_POST['leusemia'];
$osteoporosis = $_POST['osteoporosis'];
$hemofilia = $_POST['hemofilia'];
$herpes = $_POST['herpes'];
$cancer = $_POST['cancer'];
$comentario = $_POST['comentario'];



$user=new DatosAPatologicos();
$user->insertAPatologico($ci,$tratamiento_m,$medicamentos,$alergias,$enfermedades,$gastricas,$hepatitis,$tuberculosis,$venerias,$embarazada,$intermedio,$post_exodoncia,$anticonceptivos,$asma,$epilepsia,$chagas,$diabetes,$sida,$leusemia,$osteoporosis,$hemofilia,$herpes,$cancer,$comentario );
//$user->redirecToIndex();