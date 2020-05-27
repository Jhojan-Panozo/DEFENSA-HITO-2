<?php

include_once '../../classes/Data_base.php';

//$user=new database();

$engine=$_POST['engine'];
$host = $_POST['host'];
$users = $_POST['users'];
$password = $_POST['password'];
$database = $_POST['database'];
//$port = $_POST['port'];
$port = '';
$user=new data_base();
$port=$user->getConexion($host,$users,$password,$database);

echo json_encode($port);
