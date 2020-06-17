<?php


include_once '../../classes/RegUsuario.php';

$user = new RegUsuario();

$obtenerUsuarios = $user->getUsers();
echo json_encode($obtenerUsuarios);