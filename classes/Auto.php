<?php


class Auto
{
//definimos las variables o atributos
    public $marca = '';
    public $color = '';
    public $nroDePuertas = 0;
    public static $precio = 30000;

    /**
     * Auto constructor.
     * @param string $marca
     * @param string $color
     * @param int $nroDePuertas
     */
    public function __construct($marca, $color, $nroDePuertas)
    {
        $this->marca = $marca;
        $this->color = $color;
        $this->nroDePuertas = $nroDePuertas;
    }


    //metodos o funciones publicos
    public function imprimir()
    {
        echo 'Marca : ' . $this->marca . '<br>';
        echo 'Color : ' . $this->color . '<br>';
        echo 'Puertas : ' . $this->nroDePuertas . '<br>';
    }

    //metodos o funciones estaticos
    public static function imprimirPrecioUnico ()
    {
        echo 'Precio Unico : ' . self::$precio . '<br>';
    }


}