<?php

include_once 'Database.php';

class Materia
{
    public $idMAt = '';
    public $codMat = '';
    public  $desMat = '';

    public  $cconexion = '';

    /**
     * Users constructor.
     */
    public function __construct()
    {
        $database = new Database();
        $database->getConexion();
        $this->cconexion = $database->con;
    }

    public function insertaMateria($codMat,$desMat)
    {
        $query = "INSERT INTO materia (codMat,desMat) VALUES ('$codMat','$desMat')";
        $result=mysqli_query($this->cconexion,$query);
        //echo $result;
    }

    public function redirecToIndex()
    {
        header("Location: http://proyecto.es/");
        die();
    }

    public function getMateria()
    {
        $query = "SELECT * FROM materia";
        $result = mysqli_query($this->cconexion, $query);

        $arrayDeMateria = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $arrayDeMateria[] = $row;
        }

        return $arrayDeMateria;
    }



}