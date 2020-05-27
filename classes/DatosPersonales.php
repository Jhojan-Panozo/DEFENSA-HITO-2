<?php

include_once 'Database.php';

class DatosPersonales
{
    public $id = '';

    public $ci = '';
    public  $nombre = '';
    public  $pellido_p = '';
    public  $pellido_m = '';
    public  $domicilio = '';
    public  $telefono = '';
    public  $celular = '';
    public  $edad = '';
    public  $masculino = '';
    public  $estado_c = '';
    public  $religion = '';
    public  $ocupacion = '';
    public  $direccion = '';
    public  $fecha_n = '';
    public  $escolaridad = '';

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

    public function insertDatosPersonales($ci,$nombre,$pellido_p,$pellido_m,$domicilio,$telefono,$celular,$edad,$masculino,$estado_c,$religion,$ocupacion,$direccion,$fecha_n,$escolaridad )
    {
        $query = "INSERT INTO datos_personales (CI,NOMBRE,APELLIDO_P,APELLIDO_M,DOMICILIO,TELEFONO,CELULAR,EDAD,SEXO,ESTADO_CIVIL,RELIGION,ID_OCUPACION,DIRECCION,FECHA_NACIMIENTO,ESCOLARIDAD) VALUES ('$ci','$nombre','$pellido_p','$pellido_m','$domicilio','$telefono','$celular','$edad','$masculino','$estado_c','$religion','$ocupacion','$direccion','$fecha_n','$escolaridad')";
        $result=mysqli_query($this->cconexion,$query);
        //echo $result;
    }


}