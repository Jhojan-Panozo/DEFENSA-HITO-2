<?php
include_once '../../classes/Diccionary.php';
$mar1=new Diccionary();
$cadena_es_b = $_POST['cadena_es_b'];
$Mar1 = $_POST['Mar1'];
$Mar2 = $_POST['Mar2'];
$respuestaPa='';

if($Mar2 == 'por1'){
    $respuestaPa1 = 'cadenaPor';
}
if($Mar2 == 'ing1'){
    $respuestaPa1 = 'cadenaIng';
}
if($Mar2 == 'esp1'){
    $respuestaPa1 = 'cadenaEsp';
}


if($Mar1 == 'por'){
    $respuestaPa = $mar1->Portuguez($cadena_es_b,$respuestaPa1);
}
if($Mar1 == 'ing'){
    $respuestaPa = $mar1->Ingles($cadena_es_b,$respuestaPa1);
}
if($Mar1 == 'esp'){
    $respuestaPa = $mar1->Español($cadena_es_b,$respuestaPa1);
}
echo json_encode($respuestaPa);