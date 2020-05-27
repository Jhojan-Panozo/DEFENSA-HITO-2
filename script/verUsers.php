<?php

include_once '../classes/Users.php';

$ci=$_POST['ci'];

if (isset($_POST['ci'])){
    $ci=$_POST['ci'];
}

//$verUsuarios = $user->verUsuario();
//echo json_encode($verUsuarios);
$user=new Users();
$respuestaUs=$user->verUsuario($ci);
echo json_encode($respuestaUs);