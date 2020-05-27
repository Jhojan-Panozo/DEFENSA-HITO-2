<?php


class Operation
{
    public $respuesta;
    /**
     * Operation constructor.
     */
    public function __construct()
    {
        $this->respuesta=0;
    }
    public function sumar($num1,$num2)
    {
        $suma = $num1 + $num2;
        $this-> respuesta = $suma;
        return $this->respuesta;
    }
    public function resta($num1,$num2)
    {
        $restar = $num1 - $num2;
        $this-> respuesta = $restar;
        return $this->respuesta;
    }
    public function multiplica($num1,$num2)
    {
        $multi = $num1 * $num2;
        $this-> respuesta = $multi;
        return $this->respuesta;
    }
    public function dividir($num1,$num2)
    {
        $div = $num1 / $num2;
        $this-> respuesta = $div;
        return $this->respuesta;
    }
}