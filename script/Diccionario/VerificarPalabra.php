<?php

include_once '../../classes/Diccionary.php';

$bdic = new Diccionary();

$cadena_es_bo=$_POST['cadena_es_bo'];
$res_Veri=$_POST['res_Veri'];
$respuesta='';

$res_Veri=$bdic->buscarPalabra($cadena_es_bo);

$respuesta=$res_Veri;
echo json_encode($respuesta);

//echo json_encode($res_Veri);
//if($res_Veri==0)
//{
//    $res_Veri='no existe';
//}
//else{
//    $res_Veri='existe';
//}