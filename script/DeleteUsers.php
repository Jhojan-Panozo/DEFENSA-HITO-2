<?php

include_once '../classes/Users.php';
$ci=$_POST['ci'];

if (isset($_POST['ci'])){
    $ci=$_POST['ci'];
}

$user=new Users();
$user->eliminaUsers($ci);