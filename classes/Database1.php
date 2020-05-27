<?php


class Database1
{
    public $server;
    public $user;
    public $password;
    public $database;
    public  $con;

    /**
     * Database constructor.
     * @param $server
     * @param $user
     * @param $password
     * @param $database
     */
    public function __construct()
    {
        $this->server = '127.0.0.1';
        $this->user = 'root';
        $this->password = '';
        $this->database = 'progra';
        //$this->puertodb = '3306';
    }

    public  function getConexion()
    {
        $this->con = new mysqli($this->server,$this->user,$this->password,$this->database)
        or die('Error al intentar conectarse');
    }
}

//----------------------------------------------
//public $server;
//public $users;
//public $password;
//public $database;
//public  $con;
//public $port;
//
///**
// * Database constructor.
// * @param $server
// * @param $user
// * @param $password
// * @param $database
// */
//public function __construct()
//{
//    $this->port="";
////        $this->server = '127.0.0.1';
////        $this->user = 'root';
////        $this->password = '';
////        $this->database = 'progra';
////        //$this->puertodb = '3306';
//}
//
//public  function getConexion($server,$users,$password,$database)
//{
//    $this->server = $server;
//    $this->users = $users;
//    $this->password = $password;
//    $this->database = $database;
//
//    $this->con = new mysqli($this->server,$this->users,$this->password,$this->database);
//    $this->con->connect_errno;
//    $port=con;
//    return $port;
//    //or die('Error al intentar conectarse');
//    //$port = mysqli_fetch_assoc(con);
//    //return $port;
//    //or die('Error al intentar conectarse');
//}
