<?php


include_once '../classes/Materia.php';

$materia = new Materia();

$obtenerMateria = $materia->getMateria();
echo json_encode($obtenerMateria);