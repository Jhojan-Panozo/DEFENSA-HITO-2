<?php

include_once 'Database.php';

class Diccionary
{
    public $id = '';
    public $cadenaEsp = '';
    public  $cadenaPor = '';
    public  $cadenaIng = '';
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

    public function insertdiccionary($cadenaEsp,$cadenaPor,$cadenaIng )
    {
        $query = "INSERT INTO diccionario (cadenaEsp,cadenaPor,cadenaIng) VALUES ('$cadenaEsp','$cadenaPor','$cadenaIng')";
        $result=mysqli_query($this->cconexion,$query);
        //echo $result;
    }

    public function Ingles($cadenaPor,$respuestaPa1)
    {
        $query = "SELECT cadenaIng FROM diccionario where $respuestaPa1 = '$cadenaPor'";
        $result=mysqli_query($this->cconexion,$query);
        $row = mysqli_fetch_assoc($result);
        $respuestaPa = $row;
        while ($row = mysqli_fetch_assoc($result)) {
            $respuestaPa = $row;
        }

        return $respuestaPa;
    }

    public function Portuguez($cadenaIng,$respuestaPa1)
    {
        $query = "SELECT cadenaPor FROM diccionario where $respuestaPa1 = '$cadenaIng'";
        $result=mysqli_query($this->cconexion,$query);
        $row = mysqli_fetch_assoc($result);
        $respuestaPa = $row;
        while ($row = mysqli_fetch_assoc($result)) {
            $respuestaPa = $row;
          }

        return $respuestaPa;
    }
    public function Español($cadenaEsp,$respuestaPa1)
    {
        $query = "SELECT cadenaEsp FROM diccionario where $respuestaPa1 = '$cadenaEsp'";
        $result=mysqli_query($this->cconexion,$query);
        $row = mysqli_fetch_assoc($result);
        $respuestaPa = $row;
        while ($row = mysqli_fetch_assoc($result)) {
            $respuestaPa = $row;
        }

        return $respuestaPa;
    }


    public function eliminaDiccionario($id )
    {
        $query = "DELETE FROM diccionario Where id='$id' ";
        $result=mysqli_query($this->cconexion,$query);
        echo $result;
    }



    public function buscarPalabra($id)
    {
        $query = "SELECT id FROM diccionario where id = '$id'";
        $result=mysqli_query($this->cconexion,$query);

        return $result->num_rows;
    }



}