<?php

include_once '../../classes/Diccionary.php';

$cadena_es_bo=$_POST['cadena_es_bo'];

if (isset($_POST['cadena_es_bo'])){
    $cadena_es_bo=$_POST['cadena_es_bo'];
}

$user=new Diccionary();
$user->eliminaDiccionario($cadena_es_bo);