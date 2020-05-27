<?php


include_once '../classes/Users.php';

$user = new Users();

$obtenerUsuarios = $user->getUsers();
echo json_encode($obtenerUsuarios);