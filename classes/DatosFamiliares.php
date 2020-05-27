<?php

include_once 'Database.php';

class DatosFamiliares
{
    public $id = '';

    public $ci = '';
    public  $nombre_p = '';
    public  $ocupacion_p = '';
    public  $nombre_m = '';
    public  $ocupacion_m = '';
    public  $antecedentes = '';


    public $respuestaPa;
    public $respuestaPa1;

    public  $cconexion = '';

    /**
     * Users constructor.
     */
    public function __construct()
    {
        $database = new Database();
        $database->getConexion();
        $this->cconexion = $database->con;
        $this->respuestaPa="";
    }

    public function insertDatosFamiliares($ci,$nombre_p,$ocupacion_p,$nombre_m,$ocupacion_m,$antecedentes)
    {
        $query = "INSERT INTO datos_familiares (ID_DATOS_DAMILIARES,NOMBRE_P,OCUPACION_P,NOMBRE_M,OCUPACION_M,ANTECEDENTES) VALUES ('$ci','$nombre_p','$ocupacion_p','$nombre_m','$ocupacion_m','$antecedentes')";
        $result=mysqli_query($this->cconexion,$query);
        //echo $result;
    }


}