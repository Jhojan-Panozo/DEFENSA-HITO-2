<?php

include_once '../../classes/DatosPersonales.php';

//$cod=$_POST['cod'];
$ci = $_POST['ci'];

$div_md = $_POST['div_md'];
$div_md1 = $_POST['div_md1'];
$div_md2 = $_POST['div_md2'];
$div_md3 = $_POST['div_md3'];
$div_md4 = $_POST['div_md4'];
$div_md5 = $_POST['div_md5'];
$div_md6 = $_POST['div_md6'];
$div_md7 = $_POST['div_md7'];
$div_md8 = $_POST['div_md8'];
$div_md9 = $_POST['div_md9'];
$div_md10 = $_POST['div_md10'];

$div_arb = $_POST['div_arb'];
$div_arb1 = $_POST['div_arb1'];
$div_arb2 = $_POST['div_arb2'];
$div_arb3 = $_POST['div_arb3'];
$div_arb4 = $_POST['div_arb4'];
$div_arb5 = $_POST['div_arb5'];
$div_arb6 = $_POST['div_arb6'];
$div_arb7 = $_POST['div_arb7'];
$div_arb8 = $_POST['div_arb8'];
$div_arb9 = $_POST['div_arb9'];
$div_arb10 = $_POST['div_arb10'];

$div_der = $_POST['div_der'];
$div_der1 = $_POST['div_der1'];
$div_der2 = $_POST['div_der2'];
$div_der3 = $_POST['div_der3'];
$div_der4 = $_POST['div_der4'];
$div_der5 = $_POST['div_der5'];
$div_der6 = $_POST['div_der6'];
$div_der7 = $_POST['div_der7'];
$div_der8 = $_POST['div_der8'];
$div_der9 = $_POST['div_der9'];
$div_der10 = $_POST['div_der10'];

$div_abj = $_POST['div_abj'];
$div_abj1 = $_POST['div_abj1'];
$div_abj2 = $_POST['div_abj2'];
$div_abj3 = $_POST['div_abj3'];
$div_abj4 = $_POST['div_abj4'];
$div_abj5 = $_POST['div_abj5'];
$div_abj6 = $_POST['div_abj6'];
$div_abj7 = $_POST['div_abj7'];
$div_abj8 = $_POST['div_abj8'];
$div_abj9 = $_POST['div_abj9'];
$div_abj10 = $_POST['div_abj10'];

$div_izq = $_POST['div_izq'];
$div_izq1 = $_POST['div_izq1'];
$div_izq2 = $_POST['div_izq2'];
$div_izq3 = $_POST['div_izq3'];
$div_izq4 = $_POST['div_izq4'];
$div_izq5 = $_POST['div_izq5'];
$div_izq6 = $_POST['div_izq6'];
$div_izq7 = $_POST['div_izq7'];
$div_izq8 = $_POST['div_izq8'];
$div_izq9 = $_POST['div_izq9'];
$div_izq10 = $_POST['div_izq10'];

$user=new DatosPersonales();
$user->insertDatosPersonales($ci,$nombre,$pellido_p,$pellido_m,$domicilio,$telefono,$celular,$edad,$masculino,$estado_c,$religion,$ocupacion,$direccion,$fecha_n,$escolaridad );
//$user->redirecToIndex();