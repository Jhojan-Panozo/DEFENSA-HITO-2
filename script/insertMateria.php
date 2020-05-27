<?php

include_once '../classes/Materia.php';
$cod=$_POST['cod'];
$nombress = $_POST['nombress'];


if (isset($_POST['cod'])){
    $ci=$_POST['cod'];
}
if (isset($_POST['nombress'])){
    $nombress = $_POST['nombress'];
}


$user=new Materia();
$user->insertaMateria($cod,$nombress);
//$user->redirecToIndex();
