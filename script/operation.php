<?php
include_once '../classes/Operation.php';
$Operaciones=new Operation();

$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$operation = $_POST['operation'];
$respuesta=0;


if($operation == 'SUMA'){
    $respuesta = $Operaciones->sumar($num1,$num2);
}else
if($operation == 'RESTA'){
    $respuesta = $Operaciones->resta($num1,$num2);
}
if($operation == 'MULTIPLICA'){
    $respuesta = $Operaciones->multiplica($num1,$num2);
}
if($operation == 'DIVIDE'){
    $respuesta = $Operaciones->dividir($num1,$num2);
}

echo json_encode($respuesta);