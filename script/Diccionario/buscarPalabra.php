<?php
include_once '../../classes/Diccionary.php';
$mar1=new Diccionary();

$cadena_es_b = $_POST['cadena_es_b'];
$Mar1 = $_POST['Mar1'];
$respuestaPa='';

if($Mar1 == 'por'){
    $respuestaPa = $mar1->Portuguez($cadena_es_b);
}
else{
    $respuestaPa = $mar1->Ingles($cadena_es_b);
}

echo json_encode($respuestaPa);
