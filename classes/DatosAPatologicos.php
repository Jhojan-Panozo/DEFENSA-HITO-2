<?php

include_once 'Database.php';

class DatosAPatologicos
{
    public $id = '';

    public $ci = '';
    public $tratamiento_m = '';
    public $medicamentos = '';
    public $alergias = '';
    public $enfermedades = '';
    public $gastricas = '';
    public $hepatitis = '';
    public $tuberculosis = '';
    public $venerias = '';
    public $embarazada = '';
    public $intermedio = '';
    public $post_exodoncia = '';
    public $anticonceptivos = '';
    public $asma = '';
    public $epilepsia = '';
    public $renal = '';
    public $chagas = '';
    public $diabetes = '';
    public $sida = '';
    public $leusemia = '';
    public $osteoporosis = '';
    public $hemofilia = '';
    public $herpes = '';
    public $cancer = '';
    public $comentario = '';

    public $respuestaPa;
    public $respuestaPa1;

    public $cconexion = '';

    /**
     * Users constructor.
     */
    public function __construct()
    {
        $database = new Database();
        $database->getConexion();
        $this->cconexion = $database->con;
        $this->respuestaPa = "";
    }

    public function insertAPatologico($ci,$tratamiento_m,$medicamentos,$alergias,$enfermedades,$gastricas,$hepatitis,$tuberculosis,$venerias,$embarazada,$intermedio,$post_exodoncia,$anticonceptivos,$asma,$epilepsia,$renal,$chagas,$diabetes,$sida,$leusemia,$osteoporosis,$hemofilia,$herpes,$cancer,$comentario )
    {
        $query = "INSERT INTO antecedentes_patologicos (CI,TRATAMIENTO_M,MEDICAMENTOS,ALERGIAS,ENFERMEDADES,GASTRICAS,HEPATITIS,TUBERCULOSIS,VENEREAS,EMBARAZADA,INTERMEDIO,POST_EXODONCIA,ANTICONCEPTIVOS,ASMA,EPILEPSIA,RENAL,CHAGAS,DIABETES,SIDA,LEUCEMIA,OSTEOPOROSIS,HEMOFILIA,HERPES,CANCER,COMENTARIOS) VALUES ('$ci','$tratamiento_m','$medicamentos','$alergias','$enfermedades','$gastricas','$hepatitis','$tuberculosis','$venerias','$embarazada','$intermedio','$post_exodoncia','$anticonceptivos','$asma','$epilepsia','$renal','$chagas','$diabetes','$sida','$leusemia','$osteoporosis','$hemofilia','$herpes','$cancer','$comentario')";
        $result = mysqli_query($this->cconexion, $query);
        //echo $result;
    }
}

