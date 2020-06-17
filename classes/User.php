<?php

include_once 'Database.php';

class User
{
    public $ciUser = '';
    public $email = '';
    public  $isMayor = '';
    public  $lastName = '';
    public  $name = '';
    public  $passwordUser = '';
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

    public function insertaUsuarios($ciUser,$name,$lastName,$email,$isMayor,$passwordUser)
    {
        $query = "INSERT INTO usuario VALUES ('$ciUser','$name','$lastName','$email','$isMayor','$passwordUser')";
        $result=mysqli_query($this->cconexion,$query);
        //echo $result;
    }

    public function redirecToIndex()
    {
        header("Location: http://proyecto.es/");
        die();
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



    public function selectUsuarios()
    {
        $query = "SELECT * FROM usuario";
        $result=mysqli_query($this->cconexion,$query);
        echo "<table border='1'>
            <tr>
                <th>Usuario</th>
                <th>Password</th>
                <th>edad</th>
            </tr>";

        while ($row=mysqli_fetch_array($result))
        {
            echo"<tr>";
            echo"<td>".$row['name'].'</td>';
            echo"<td>".$row['lastname'].'</td>';
            echo"<td>".$row['email'].'</td>';
            echo"</tr>";
        }
        echo"</table>";
    }

    public function updateUsuarios($ciUser,$name,$lastName,$email,$isMayor,$passwordUser)
    {
        $query = "UPDATE usuario SET (name='$name') Where ciUser='$ciUser' ";
        $result=mysqli_query($this->cconexion,$query);
        echo $result;
    }

    public function eliminaUsers($ciUser)
    {
        $query = "DELETE FROM usuario Where ciUser='$ciUser' ";
        $result=mysqli_query($this->cconexion,$query);
        echo $result;
    }

    public function verUsuario($ciUser){
        $query = "SELECT (us.name) FROM usuario AS us WHERE us.ciUser ='$ciUser'";
        $result = mysqli_query($this->cconexion, $query);

        $row = mysqli_fetch_assoc($result);
        $respuestaUS = $row;
        while ($row = mysqli_fetch_assoc($result)) {
            $respuestaUS = $row;
        }

        return $respuestaUS;
    }
}