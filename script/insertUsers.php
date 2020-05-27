<?php

include_once '../classes/Users.php';
$ci=$_POST['ci'];
$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$email = $_POST['email'];
$esmayor = $_POST['esmayor'];
$password = $_POST['password'];

if (isset($_POST['ci'])){
    $ci=$_POST['ci'];
}
if (isset($_POST['nombres'])){
    $nombres = $_POST['nombres'];
}
if (isset($_POST['apellidos'])){
    $apellidos = $_POST['apellidos'];
}
if (isset($_POST['email'])){
    $email = $_POST['email'];
}
if (isset($_POST['esmayor'])){
    $esmayor=1;
}else{
    $esmayor=0;
}
if (isset($_POST['password'])){
    $password = $_POST['password'];
}


$user=new Users();
$user->insertaUsuarios($ci,$nombres,$apellidos,$email,$esmayor,$password);


//$user->redirecToIndex();
//$user->selectUsuarios();
//$user->updateUsuarios($ci,$nombres,$apellidos,$email,$esmayor,$password);


/**
//echo 'Nombres : ' . $nombres . '<br>';
//echo 'Apellidos : ' . $apellidos . '<br>';
//echo 'Email : ' . $email . '<br>';
//echo 'Es mayor de edad : ' . $esmayor . '<br>';
//echo 'Pasword : ' . $password . '<br><hr>';
//
//echo 'imprimiendo todo el array $_POST con foreach' . '<br><hr>';
//foreach ($_POST as $key => $value) {
//    echo $key . ':' . $value . '<br>';
//
//}*/