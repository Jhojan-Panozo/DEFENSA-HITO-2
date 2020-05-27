<?php

include_once 'Database.php';

class DatosHieneSignos
{
    public $id = '';

    public $ci = '';
    public  $cepillo = '';
    public  $dentrifico = '';
    public  $tiempo = '';
    public  $tdentrifico = '';
    public  $cepillado = '';
    public  $tcepillado = '';
    public  $mango = '';
    public  $cerdas = '';
    public  $mondadientes = '';
    public  $lengua = '';
    public  $dental = '';
    public  $saludb = '';
    public  $arterial = '';
    public  $pulso = '';
    public  $respiracion = '';
    public  $temperatura = '';
    public  $peso = '';
    public  $talla = '';


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

    public function insertHigieneSignos($ci,$cepillo,$dentrifico,$tiempo,$tdentrifico,$cepillado,$tcepillado,$mango,$cerdas,$mondadientes,$lengua,$dental,$saludb,$arterial,$pulso,$respiracion,$temperatura,$peso,$talla)
    {
        $query = "INSERT INTO higiene_bucal (CI,CEPILLO,DENTRIFICO,TIEMPO,TIPO_DENTRIFICO,ID_TECNICAS,TAMANO,MANGO,CERDAS,MONDADIENTES,LENGUA,HILO_DENTAL,SALUD_BUCAL) VALUES ('$ci','$cepillo','$dentrifico','$tiempo','$tdentrifico','$cepillado','$tcepillado','$mango','$cerdas','$mondadientes','$lengua','$dental','$saludb')";
        $result=mysqli_query($this->cconexion,$query);
        //echo $result;
    }
    public function insertHigieneSignos2($ci,$cepillo,$dentrifico,$tiempo,$tdentrifico,$cepillado,$tcepillado,$mango,$cerdas,$mondadientes,$lengua,$dental,$saludb,$arterial,$pulso,$respiracion,$temperatura,$peso,$talla)
    {
        $query = "INSERT INTO signos_vitales (ID_SIGNOS,PRESION,PULSO,RESPIRACION,TEMPERATURA,PESO,TALLA) VALUES ('$ci','$arterial','$pulso','$respiracion','$temperatura','$peso','$talla')";
        $result=mysqli_query($this->cconexion,$query);
        //echo $result;
    }

}