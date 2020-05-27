<?php


class Database
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
        $this->database = 'odontologia';//progra
        //$this->puertodb = '3306';
    }

    public  function getConexion()
    {
        $this->con = new mysqli($this->server,$this->user,$this->password,$this->database)
        or die('Error al intentar conectarse');
    }
}
