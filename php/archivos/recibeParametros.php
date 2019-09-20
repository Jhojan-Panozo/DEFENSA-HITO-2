<?php

$nombre=$_GET['VAR_NOMBRE'];
$apellido=$_GET['VAR_APELLIDO'];
$edad=$_GET['VAR_EDAD'];
$edad=21;
$direccion=$_GET['VAR_DIRECCION'];
$celular=$_GET['VAR_CELULAR'];
$celular=65509404;


define('MAX_FILAS', 1);
define('MAX_COLS', 1);
echo '<table>';
for($j=1;$j<=MAX_COLS;$j++)
{
    echo '<tr>';
    echo "<td>";
    if (is_string($nombre)) {
        echo ' NOMBRE: '.$nombre.' ....../'.'<br>';
    }

    if (is_string($apellido)) {
        echo ' APELLIDO: '.$apellido.' ....../'.'<br>';
    }

    if (is_string($edad)) {
        echo ' EDAD: '.$edad.' ....../'.'<br>';
    }


    if (is_string($direccion)) {
        echo ' DIRECCION: '.$direccion.' ....../'.'<br>';
    }

    if (is_string($celular)) {
        echo ' CELULAR: '.$celular.' ....../'.'<br>';
    }
    echo "</td>";
    for($i=1;$i<=MAX_FILAS;$i++)
    {
        echo "<td>";
        if (is_int($nombre)) {
            echo ' NOMBRE: '.$nombre.'<br>';
        }

        if (is_int($apellido)) {
            echo ' APELLIDO: '.$apellido.'<br>';
        }

        if (is_int($edad)) {
            echo ' EDAD: '.$edad.'<br>';
        }


        if (is_int($direccion)) {
            echo ' Direccion: '.$direccion.'<br>';
        }

        if (is_int($celular)) {
            echo ' CELULAR: '.$celular.'<br>';
        }
        echo "</td>";
    }
    echo '</tr>';
}
echo '</table>';


?>




