<?php

include_once '../../classes/Database.php';

//$user=new database();

$engine=$_POST['engine'];
$host = $_POST['host'];
$users = $_POST['users'];
$password = $_POST['password'];
$database = $_POST['database'];
//$port = $_POST['port'];
$port = '';
$user=new database();
$port=$user->getConexion($host,$users,$password,$database);

echo json_encode($port);

//$user->getConexion1($host,$user,$password,$database);
//$user->redirecToIndex();