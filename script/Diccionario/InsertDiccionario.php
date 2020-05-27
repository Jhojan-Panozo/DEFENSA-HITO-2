<?php

include_once '../../classes/Diccionary.php';

$cod=$_POST['cod'];
$cadena_es = $_POST['cadena_es'];
$cadena_in = $_POST['cadena_in'];
$cadena_por = $_POST['cadena_por'];


$user=new Diccionary();
$user->insertdiccionary($cadena_es,$cadena_in,$cadena_por);
//$user->redirecToIndex();