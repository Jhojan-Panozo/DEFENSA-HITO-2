<?php

include_once '../../classes/DatosHieneSignos.php';

//$cod=$_POST['cod'];
$ci = $_POST['ci'];
$cepillo = $_POST['cepillo'];
$dentrifico = $_POST['dentrifico'];
$tiempo = $_POST['tiempo'];
$tdentrifico = $_POST['tdentrifico'];
$cepillado = $_POST['cepillado'];
$tcepillado = $_POST['tcepillado'];
$mango = $_POST['mango'];
$cerdas = $_POST['cerdas'];
$mondadientes = $_POST['mondadientes'];
$lengua = $_POST['lengua'];
$dental = $_POST['dental'];
$saludb = $_POST['saludb'];
$arterial = $_POST['arterial'];
$pulso = $_POST['pulso'];
$respiracion = $_POST['respiracion'];
$temperatura = $_POST['temperatura'];
$peso = $_POST['peso'];
$talla = $_POST['talla'];


$user=new DatosHieneSignos();
$user->insertHigieneSignos($ci,$cepillo,$dentrifico,$tiempo,$tdentrifico,$cepillado,$tcepillado,$mango,$cerdas,$mondadientes,$lengua,$dental,$saludb,$arterial,$pulso,$respiracion,$temperatura,$peso,$talla);
$user->insertHigieneSignos2($ci,$cepillo,$dentrifico,$tiempo,$tdentrifico,$cepillado,$tcepillado,$mango,$cerdas,$mondadientes,$lengua,$dental,$saludb,$arterial,$pulso,$respiracion,$temperatura,$peso,$talla);

//$user->redirecToIndex();