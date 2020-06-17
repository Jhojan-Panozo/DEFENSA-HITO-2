<?php

include_once 'Database.php';

class RegUsuario
{
    public $ci = '';
    public  $nombre = '';
    public  $apellido_p = '';
    public  $apellido_m = '';
    public  $celular = '';
    public  $gmail = '';
    public  $t_usuario = '';
    public  $usuario = '';
    public  $contrasena = '';


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

    public function insertUsuario($ci,$nombre,$apellido_p,$apellido_m,$celular,$gmail,$t_usuario,$usuario,$contrasena)
    {
        $query = "INSERT INTO registro_u (ID_REGISTRO_U,CI,NOMBRE,APELLIDO_P,APELLIDO_M,CELULAR,GMAIL,TIPO_USUARIO,USUARIO,CONTRASENA) VALUES ('','$ci','$nombre','$apellido_p','$apellido_m','$celular','$gmail','$t_usuario','$usuario','$contrasena')";
        $result=mysqli_query($this->cconexion,$query);
        //echo $result;
    }

    public function getUsers()
    {
        $query = "SELECT * FROM registro_u";
        $result = mysqli_query($this->cconexion, $query);

        $arrayDeUsuario = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $arrayDeUsuario[] = $row;
        }

        return $arrayDeUsuario;
    }

}