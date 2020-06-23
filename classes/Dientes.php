<?php
include_once 'Database.php';

class Dientes
{
    public $id = '';

    public $ci = '';
    public  $div_md = '';
    public  $div_md1 = '';
    public  $div_md2 = '';
    public  $div_md3 = '';
    public  $div_md4 = '';
    public  $div_md5 = '';
    public  $div_md6 = '';
    public  $div_md7 = '';
    public  $div_md8 = '';
    public  $div_md9 = '';
    public  $div_md10 = '';
    public  $div_md11 = '';
    public  $div_md12 = '';
    public  $div_md13 = '';
    public  $div_md14 = '';
    public  $div_md15 = '';
    public  $div_md16 = '';
    public  $div_md17 = '';
    public  $div_md18 = '';
    public  $div_md19 = '';
    public  $div_md20 = '';
    public  $div_md21 = '';
    public  $div_md22 = '';
    public  $div_md23 = '';
    public  $div_md24 = '';
    public  $div_md25 = '';
    public  $div_md26 = '';
    public  $div_md27 = '';
    public  $div_md28 = '';
    public  $div_md29 = '';
    public  $div_md30 = '';
    public  $div_md31 = '';

    public  $div_arb = '';
    public  $div_arb1 = '';
    public  $div_arb2 = '';
    public  $div_arb3 = '';
    public  $div_arb4 = '';
    public  $div_arb5 = '';
    public  $div_arb6 = '';
    public  $div_arb7 = '';
    public  $div_arb8 = '';
    public  $div_arb9 = '';
    public  $div_arb10 = '';
    public  $div_arb11 = '';
    public  $div_arb12 = '';
    public  $div_arb13 = '';
    public  $div_arb14 = '';
    public  $div_arb15 = '';
    public  $div_arb16 = '';
    public  $div_arb17 = '';
    public  $div_arb18 = '';
    public  $div_arb19 = '';
    public  $div_arb20 = '';
    public  $div_arb21 = '';
    public  $div_arb22 = '';
    public  $div_arb23 = '';
    public  $div_arb24 = '';
    public  $div_arb25 = '';
    public  $div_arb26 = '';
    public  $div_arb27 = '';
    public  $div_arb28 = '';
    public  $div_arb29 = '';
    public  $div_arb30 = '';
    public  $div_arb31 = '';

    public  $div_der = '';
    public  $div_der1 = '';
    public  $div_der2 = '';
    public  $div_der3 = '';
    public  $div_der4 = '';
    public  $div_der5 = '';
    public  $div_der6 = '';
    public  $div_der7 = '';
    public  $div_der8 = '';
    public  $div_der9 = '';
    public  $div_der10 = '';
    public  $div_der11 = '';
    public  $div_der12 = '';
    public  $div_der13 = '';
    public  $div_der14 = '';
    public  $div_der15 = '';
    public  $div_der16 = '';
    public  $div_der17 = '';
    public  $div_der18 = '';
    public  $div_der19 = '';
    public  $div_der20 = '';
    public  $div_der21 = '';
    public  $div_der22 = '';
    public  $div_der23 = '';
    public  $div_der24 = '';
    public  $div_der25 = '';
    public  $div_der26 = '';
    public  $div_der27 = '';
    public  $div_der28 = '';
    public  $div_der29 = '';
    public  $div_der30 = '';
    public  $div_der31 = '';

    public  $div_abj = '';
    public  $div_abj1 = '';
    public  $div_abj2 = '';
    public  $div_abj3 = '';
    public  $div_abj4 = '';
    public  $div_abj5 = '';
    public  $div_abj6 = '';
    public  $div_abj7 = '';
    public  $div_abj8 = '';
    public  $div_abj9 = '';
    public  $div_abj10 = '';
    public  $div_abj11 = '';
    public  $div_abj12 = '';
    public  $div_abj13 = '';
    public  $div_abj14 = '';
    public  $div_abj15 = '';
    public  $div_abj16 = '';
    public  $div_abj17 = '';
    public  $div_abj18 = '';
    public  $div_abj19 = '';
    public  $div_abj20 = '';
    public  $div_abj21 = '';
    public  $div_abj22 = '';
    public  $div_abj23 = '';
    public  $div_abj24 = '';
    public  $div_abj25 = '';
    public  $div_abj26 = '';
    public  $div_abj27 = '';
    public  $div_abj28 = '';
    public  $div_abj29 = '';
    public  $div_abj30 = '';
    public  $div_abj31 = '';

    public  $div_izq = '';
    public  $div_izq1 = '';
    public  $div_izq2 = '';
    public  $div_izq3 = '';
    public  $div_izq4 = '';
    public  $div_izq5 = '';
    public  $div_izq6 = '';
    public  $div_izq7 = '';
    public  $div_izq8 = '';
    public  $div_izq9 = '';
    public  $div_izq10 = '';
    public  $div_izq11 = '';
    public  $div_izq12 = '';
    public  $div_izq13 = '';
    public  $div_izq14 = '';
    public  $div_izq15 = '';
    public  $div_izq16 = '';
    public  $div_izq17 = '';
    public  $div_izq18 = '';
    public  $div_izq19 = '';
    public  $div_izq20 = '';
    public  $div_izq21 = '';
    public  $div_izq22 = '';
    public  $div_izq23 = '';
    public  $div_izq24 = '';
    public  $div_izq25 = '';
    public  $div_izq26 = '';
    public  $div_izq27 = '';
    public  $div_izq28 = '';
    public  $div_izq29 = '';
    public  $div_izq30 = '';
    public  $div_izq31 = '';





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

    public function insertDientesm1($ci,$div_md,$div_md1,$div_md2,$div_md3,$div_md4,$div_md5,$div_md6,$div_md7,$div_md8,$div_md9,$div_md10,$div_md11,$div_md12,$div_md13,$div_md14,$div_md15,$div_md16,$div_md17,$div_md18,$div_md19,$div_md20,$div_md21,$div_md22,$div_md23,$div_md24,$div_md25,$div_md26,$div_md27,$div_md28,$div_md29,$div_md30,$div_md31
        ,$div_arb,$div_arb1,$div_arb2,$div_arb3,$div_arb4,$div_arb5,$div_arb6,$div_arb7,$div_arb8,$div_arb9,$div_arb10,$div_arb11,$div_arb12,$div_arb13,$div_arb14,$div_arb15,$div_arb16,$div_arb17,$div_arb18,$div_arb19,$div_arb20,$div_arb21,$div_arb22,$div_arb23,$div_arb24,$div_arb25,$div_arb26,$div_arb27,$div_arb28,$div_arb29,$div_arb30,$div_arb31
        ,$div_der,$div_der1,$div_der2,$div_der3,$div_der4,$div_der5,$div_der6,$div_der7,$div_der8,$div_der9,$div_der10,$div_der11,$div_der12,$div_der13,$div_der14,$div_der15,$div_der16,$div_der17,$div_der18,$div_der19,$div_der20,$div_der21,$div_der22,$div_der23,$div_der24,$div_der25,$div_der26,$div_der27,$div_der28,$div_der29,$div_der30,$div_der31
        ,$div_abj,$div_abj1,$div_abj2,$div_abj3,$div_abj4,$div_abj5,$div_abj6,$div_abj7,$div_abj8,$div_abj9,$div_abj10,$div_abj11,$div_abj12,$div_abj13,$div_abj14,$div_abj15,$div_abj16,$div_abj17,$div_abj18,$div_abj19,$div_abj20,$div_abj21,$div_abj22,$div_abj23,$div_abj24,$div_abj25,$div_abj26,$div_abj27,$div_abj28,$div_abj29,$div_abj30,$div_abj31
        ,$div_izq,$div_izq1,$div_izq2,$div_izq3,$div_izq4,$div_izq5,$div_izq6,$div_izq7,$div_izq8,$div_izq9,$div_izq10,$div_izq11,$div_izq12,$div_izq13,$div_izq14,$div_izq15,$div_izq16,$div_izq17,$div_izq18,$div_izq19,$div_izq20,$div_izq21,$div_izq22,$div_izq23,$div_izq24,$div_izq25,$div_izq26,$div_izq27,$div_izq28,$div_izq29,$div_izq30,$div_izq31)
    {
        $query = "INSERT INTO diagnostico_sm (CI,SD18_M,SD17_M,SD16_M,SD15_M,SD14_M,SD13_M,SD12_M,SD11_M,SI21_M,SI22_M,SI23_M,SI24_M,SI25_M,SI26_M,SI27_M,SI28_M) VALUES ('$ci','$div_md','$div_md1','$div_md2','$div_md3','$div_md4','$div_md5','$div_md6','$div_md7','$div_md8','$div_md9','$div_md10','$div_md11','$div_md12','$div_md13','$div_md14','$div_md15')";
        $result=mysqli_query($this->cconexion,$query);
        //echo $result;

    }
    public function insertDientesm2($ci,$div_md,$div_md1,$div_md2,$div_md3,$div_md4,$div_md5,$div_md6,$div_md7,$div_md8,$div_md9,$div_md10,$div_md11,$div_md12,$div_md13,$div_md14,$div_md15,$div_md16,$div_md17,$div_md18,$div_md19,$div_md20,$div_md21,$div_md22,$div_md23,$div_md24,$div_md25,$div_md26,$div_md27,$div_md28,$div_md29,$div_md30,$div_md31
    ,$div_arb,$div_arb1,$div_arb2,$div_arb3,$div_arb4,$div_arb5,$div_arb6,$div_arb7,$div_arb8,$div_arb9,$div_arb10,$div_arb11,$div_arb12,$div_arb13,$div_arb14,$div_arb15,$div_arb16,$div_arb17,$div_arb18,$div_arb19,$div_arb20,$div_arb21,$div_arb22,$div_arb23,$div_arb24,$div_arb25,$div_arb26,$div_arb27,$div_arb28,$div_arb29,$div_arb30,$div_arb31
    ,$div_der,$div_der1,$div_der2,$div_der3,$div_der4,$div_der5,$div_der6,$div_der7,$div_der8,$div_der9,$div_der10,$div_der11,$div_der12,$div_der13,$div_der14,$div_der15,$div_der16,$div_der17,$div_der18,$div_der19,$div_der20,$div_der21,$div_der22,$div_der23,$div_der24,$div_der25,$div_der26,$div_der27,$div_der28,$div_der29,$div_der30,$div_der31
    ,$div_abj,$div_abj1,$div_abj2,$div_abj3,$div_abj4,$div_abj5,$div_abj6,$div_abj7,$div_abj8,$div_abj9,$div_abj10,$div_abj11,$div_abj12,$div_abj13,$div_abj14,$div_abj15,$div_abj16,$div_abj17,$div_abj18,$div_abj19,$div_abj20,$div_abj21,$div_abj22,$div_abj23,$div_abj24,$div_abj25,$div_abj26,$div_abj27,$div_abj28,$div_abj29,$div_abj30,$div_abj31
    ,$div_izq,$div_izq1,$div_izq2,$div_izq3,$div_izq4,$div_izq5,$div_izq6,$div_izq7,$div_izq8,$div_izq9,$div_izq10,$div_izq11,$div_izq12,$div_izq13,$div_izq14,$div_izq15,$div_izq16,$div_izq17,$div_izq18,$div_izq19,$div_izq20,$div_izq21,$div_izq22,$div_izq23,$div_izq24,$div_izq25,$div_izq26,$div_izq27,$div_izq28,$div_izq29,$div_izq30,$div_izq31)
    {
    $query = "INSERT INTO diagnostico_im (CI,II_38M,II_37M,II_36M,II_35M,II_34M,II_33M,II_32M,II_31M,ID_41M,ID_42M,ID_43M,ID_44M,ID_45M,ID_46M,ID_47M,ID_48M) VALUES ('$ci','$div_md16','$div_md17','$div_md18','$div_md19','$div_md20','$div_md21','$div_md22','$div_md23','$div_md24','$div_md25','$div_md26','$div_md27','$div_md28','$div_md29','$div_md30','$div_md31')";
    $result=mysqli_query($this->cconexion,$query);
    //echo $result;
    }

    public function insertDientesa1($ci,$div_md,$div_md1,$div_md2,$div_md3,$div_md4,$div_md5,$div_md6,$div_md7,$div_md8,$div_md9,$div_md10,$div_md11,$div_md12,$div_md13,$div_md14,$div_md15,$div_md16,$div_md17,$div_md18,$div_md19,$div_md20,$div_md21,$div_md22,$div_md23,$div_md24,$div_md25,$div_md26,$div_md27,$div_md28,$div_md29,$div_md30,$div_md31
        ,$div_arb,$div_arb1,$div_arb2,$div_arb3,$div_arb4,$div_arb5,$div_arb6,$div_arb7,$div_arb8,$div_arb9,$div_arb10,$div_arb11,$div_arb12,$div_arb13,$div_arb14,$div_arb15,$div_arb16,$div_arb17,$div_arb18,$div_arb19,$div_arb20,$div_arb21,$div_arb22,$div_arb23,$div_arb24,$div_arb25,$div_arb26,$div_arb27,$div_arb28,$div_arb29,$div_arb30,$div_arb31
        ,$div_der,$div_der1,$div_der2,$div_der3,$div_der4,$div_der5,$div_der6,$div_der7,$div_der8,$div_der9,$div_der10,$div_der11,$div_der12,$div_der13,$div_der14,$div_der15,$div_der16,$div_der17,$div_der18,$div_der19,$div_der20,$div_der21,$div_der22,$div_der23,$div_der24,$div_der25,$div_der26,$div_der27,$div_der28,$div_der29,$div_der30,$div_der31
        ,$div_abj,$div_abj1,$div_abj2,$div_abj3,$div_abj4,$div_abj5,$div_abj6,$div_abj7,$div_abj8,$div_abj9,$div_abj10,$div_abj11,$div_abj12,$div_abj13,$div_abj14,$div_abj15,$div_abj16,$div_abj17,$div_abj18,$div_abj19,$div_abj20,$div_abj21,$div_abj22,$div_abj23,$div_abj24,$div_abj25,$div_abj26,$div_abj27,$div_abj28,$div_abj29,$div_abj30,$div_abj31
        ,$div_izq,$div_izq1,$div_izq2,$div_izq3,$div_izq4,$div_izq5,$div_izq6,$div_izq7,$div_izq8,$div_izq9,$div_izq10,$div_izq11,$div_izq12,$div_izq13,$div_izq14,$div_izq15,$div_izq16,$div_izq17,$div_izq18,$div_izq19,$div_izq20,$div_izq21,$div_izq22,$div_izq23,$div_izq24,$div_izq25,$div_izq26,$div_izq27,$div_izq28,$div_izq29,$div_izq30,$div_izq31)
    {
        $query = "INSERT INTO diagnostico_sa (CI,SD_18A,SD_17A,SD_16A,SD_15A,SD_14A,SD_13A,SD_12A,SD_11A,SI_21A,SI_22A,SI_23A,SI_24A,SI_25A,SI_26A,SI_27A,SI_28A) VALUES ('$ci','$div_arb','$div_arb1','$div_arb2','$div_arb3','$div_arb4','$div_arb5','$div_arb6','$div_arb7','$div_arb8','$div_arb9','$div_arb10','$div_arb11','$div_arb12','$div_arb13','$div_arb14','$div_arb15')";
        $result=mysqli_query($this->cconexion,$query);
        //echo $result;
    }
    public function insertDientesa2($ci,$div_md,$div_md1,$div_md2,$div_md3,$div_md4,$div_md5,$div_md6,$div_md7,$div_md8,$div_md9,$div_md10,$div_md11,$div_md12,$div_md13,$div_md14,$div_md15,$div_md16,$div_md17,$div_md18,$div_md19,$div_md20,$div_md21,$div_md22,$div_md23,$div_md24,$div_md25,$div_md26,$div_md27,$div_md28,$div_md29,$div_md30,$div_md31
        ,$div_arb,$div_arb1,$div_arb2,$div_arb3,$div_arb4,$div_arb5,$div_arb6,$div_arb7,$div_arb8,$div_arb9,$div_arb10,$div_arb11,$div_arb12,$div_arb13,$div_arb14,$div_arb15,$div_arb16,$div_arb17,$div_arb18,$div_arb19,$div_arb20,$div_arb21,$div_arb22,$div_arb23,$div_arb24,$div_arb25,$div_arb26,$div_arb27,$div_arb28,$div_arb29,$div_arb30,$div_arb31
        ,$div_der,$div_der1,$div_der2,$div_der3,$div_der4,$div_der5,$div_der6,$div_der7,$div_der8,$div_der9,$div_der10,$div_der11,$div_der12,$div_der13,$div_der14,$div_der15,$div_der16,$div_der17,$div_der18,$div_der19,$div_der20,$div_der21,$div_der22,$div_der23,$div_der24,$div_der25,$div_der26,$div_der27,$div_der28,$div_der29,$div_der30,$div_der31
        ,$div_abj,$div_abj1,$div_abj2,$div_abj3,$div_abj4,$div_abj5,$div_abj6,$div_abj7,$div_abj8,$div_abj9,$div_abj10,$div_abj11,$div_abj12,$div_abj13,$div_abj14,$div_abj15,$div_abj16,$div_abj17,$div_abj18,$div_abj19,$div_abj20,$div_abj21,$div_abj22,$div_abj23,$div_abj24,$div_abj25,$div_abj26,$div_abj27,$div_abj28,$div_abj29,$div_abj30,$div_abj31
        ,$div_izq,$div_izq1,$div_izq2,$div_izq3,$div_izq4,$div_izq5,$div_izq6,$div_izq7,$div_izq8,$div_izq9,$div_izq10,$div_izq11,$div_izq12,$div_izq13,$div_izq14,$div_izq15,$div_izq16,$div_izq17,$div_izq18,$div_izq19,$div_izq20,$div_izq21,$div_izq22,$div_izq23,$div_izq24,$div_izq25,$div_izq26,$div_izq27,$div_izq28,$div_izq29,$div_izq30,$div_izq31)
    {
        $query = "INSERT INTO diagnostico_ia (CI,II_38A,II_37A,II_36A,II_35A,II_34A,II_33A,II_32A,II_31A,ID_41A,ID_42A,ID_43A,ID_44A,ID_45A,ID_46A,ID_47A,ID_48A) VALUES ('$ci','$div_arb16','$div_arb17','$div_arb18','$div_arb19','$div_arb20','$div_arb21','$div_arb22','$div_arb23','$div_arb24','$div_arb25','$div_arb26','$div_arb27','$div_arb28','$div_arb29','$div_arb30','$div_arb31')";
        $result=mysqli_query($this->cconexion,$query);
        //echo $result;
    }

    public function insertDientesd1($ci,$div_md,$div_md1,$div_md2,$div_md3,$div_md4,$div_md5,$div_md6,$div_md7,$div_md8,$div_md9,$div_md10,$div_md11,$div_md12,$div_md13,$div_md14,$div_md15,$div_md16,$div_md17,$div_md18,$div_md19,$div_md20,$div_md21,$div_md22,$div_md23,$div_md24,$div_md25,$div_md26,$div_md27,$div_md28,$div_md29,$div_md30,$div_md31
        ,$div_arb,$div_arb1,$div_arb2,$div_arb3,$div_arb4,$div_arb5,$div_arb6,$div_arb7,$div_arb8,$div_arb9,$div_arb10,$div_arb11,$div_arb12,$div_arb13,$div_arb14,$div_arb15,$div_arb16,$div_arb17,$div_arb18,$div_arb19,$div_arb20,$div_arb21,$div_arb22,$div_arb23,$div_arb24,$div_arb25,$div_arb26,$div_arb27,$div_arb28,$div_arb29,$div_arb30,$div_arb31
        ,$div_der,$div_der1,$div_der2,$div_der3,$div_der4,$div_der5,$div_der6,$div_der7,$div_der8,$div_der9,$div_der10,$div_der11,$div_der12,$div_der13,$div_der14,$div_der15,$div_der16,$div_der17,$div_der18,$div_der19,$div_der20,$div_der21,$div_der22,$div_der23,$div_der24,$div_der25,$div_der26,$div_der27,$div_der28,$div_der29,$div_der30,$div_der31
        ,$div_abj,$div_abj1,$div_abj2,$div_abj3,$div_abj4,$div_abj5,$div_abj6,$div_abj7,$div_abj8,$div_abj9,$div_abj10,$div_abj11,$div_abj12,$div_abj13,$div_abj14,$div_abj15,$div_abj16,$div_abj17,$div_abj18,$div_abj19,$div_abj20,$div_abj21,$div_abj22,$div_abj23,$div_abj24,$div_abj25,$div_abj26,$div_abj27,$div_abj28,$div_abj29,$div_abj30,$div_abj31
        ,$div_izq,$div_izq1,$div_izq2,$div_izq3,$div_izq4,$div_izq5,$div_izq6,$div_izq7,$div_izq8,$div_izq9,$div_izq10,$div_izq11,$div_izq12,$div_izq13,$div_izq14,$div_izq15,$div_izq16,$div_izq17,$div_izq18,$div_izq19,$div_izq20,$div_izq21,$div_izq22,$div_izq23,$div_izq24,$div_izq25,$div_izq26,$div_izq27,$div_izq28,$div_izq29,$div_izq30,$div_izq31)
    {
        $query = "INSERT INTO diagnostico_sd (CI,SD_18D,SD_17D,SD_16D,SD_15D,SD_14D,SD_13D,SD_12D,SD_11D,SI_21D,SI_22D,SI_23D,SI_24D,SI_25D,SI_26D,SI_27D,SI_28D) VALUES ('$ci','$div_der','$div_der1','$div_der2','$div_der3','$div_der4','$div_der5','$div_der6','$div_der7','$div_der8','$div_der9','$div_der10','$div_der11','$div_der12','$div_der13','$div_der14','$div_der15')";
        $result=mysqli_query($this->cconexion,$query);
        //echo $result;
    }
    public function insertDientesd2($ci,$div_md,$div_md1,$div_md2,$div_md3,$div_md4,$div_md5,$div_md6,$div_md7,$div_md8,$div_md9,$div_md10,$div_md11,$div_md12,$div_md13,$div_md14,$div_md15,$div_md16,$div_md17,$div_md18,$div_md19,$div_md20,$div_md21,$div_md22,$div_md23,$div_md24,$div_md25,$div_md26,$div_md27,$div_md28,$div_md29,$div_md30,$div_md31
        ,$div_arb,$div_arb1,$div_arb2,$div_arb3,$div_arb4,$div_arb5,$div_arb6,$div_arb7,$div_arb8,$div_arb9,$div_arb10,$div_arb11,$div_arb12,$div_arb13,$div_arb14,$div_arb15,$div_arb16,$div_arb17,$div_arb18,$div_arb19,$div_arb20,$div_arb21,$div_arb22,$div_arb23,$div_arb24,$div_arb25,$div_arb26,$div_arb27,$div_arb28,$div_arb29,$div_arb30,$div_arb31
        ,$div_der,$div_der1,$div_der2,$div_der3,$div_der4,$div_der5,$div_der6,$div_der7,$div_der8,$div_der9,$div_der10,$div_der11,$div_der12,$div_der13,$div_der14,$div_der15,$div_der16,$div_der17,$div_der18,$div_der19,$div_der20,$div_der21,$div_der22,$div_der23,$div_der24,$div_der25,$div_der26,$div_der27,$div_der28,$div_der29,$div_der30,$div_der31
        ,$div_abj,$div_abj1,$div_abj2,$div_abj3,$div_abj4,$div_abj5,$div_abj6,$div_abj7,$div_abj8,$div_abj9,$div_abj10,$div_abj11,$div_abj12,$div_abj13,$div_abj14,$div_abj15,$div_abj16,$div_abj17,$div_abj18,$div_abj19,$div_abj20,$div_abj21,$div_abj22,$div_abj23,$div_abj24,$div_abj25,$div_abj26,$div_abj27,$div_abj28,$div_abj29,$div_abj30,$div_abj31
        ,$div_izq,$div_izq1,$div_izq2,$div_izq3,$div_izq4,$div_izq5,$div_izq6,$div_izq7,$div_izq8,$div_izq9,$div_izq10,$div_izq11,$div_izq12,$div_izq13,$div_izq14,$div_izq15,$div_izq16,$div_izq17,$div_izq18,$div_izq19,$div_izq20,$div_izq21,$div_izq22,$div_izq23,$div_izq24,$div_izq25,$div_izq26,$div_izq27,$div_izq28,$div_izq29,$div_izq30,$div_izq31)
    {
        $query = "INSERT INTO diagnostico_id (CI,II_38D,II_37D,II_36D,II_35D,II_34D,II_33D,II_32D,II_31D,ID_41D,ID_42D,ID_43D,ID_44D,ID_45D,ID_46D,ID_47D,ID_48D) VALUES ('$ci','$div_der16','$div_der17','$div_der18','$div_der19','$div_der20','$div_der21','$div_der22','$div_der23','$div_der24','$div_der25','$div_der26','$div_der27','$div_der28','$div_der29','$div_der30','$div_der31')";
        $result=mysqli_query($this->cconexion,$query);
        //echo $result;
    }


    public function insertDientesab1($ci,$div_md,$div_md1,$div_md2,$div_md3,$div_md4,$div_md5,$div_md6,$div_md7,$div_md8,$div_md9,$div_md10,$div_md11,$div_md12,$div_md13,$div_md14,$div_md15,$div_md16,$div_md17,$div_md18,$div_md19,$div_md20,$div_md21,$div_md22,$div_md23,$div_md24,$div_md25,$div_md26,$div_md27,$div_md28,$div_md29,$div_md30,$div_md31
        ,$div_arb,$div_arb1,$div_arb2,$div_arb3,$div_arb4,$div_arb5,$div_arb6,$div_arb7,$div_arb8,$div_arb9,$div_arb10,$div_arb11,$div_arb12,$div_arb13,$div_arb14,$div_arb15,$div_arb16,$div_arb17,$div_arb18,$div_arb19,$div_arb20,$div_arb21,$div_arb22,$div_arb23,$div_arb24,$div_arb25,$div_arb26,$div_arb27,$div_arb28,$div_arb29,$div_arb30,$div_arb31
        ,$div_der,$div_der1,$div_der2,$div_der3,$div_der4,$div_der5,$div_der6,$div_der7,$div_der8,$div_der9,$div_der10,$div_der11,$div_der12,$div_der13,$div_der14,$div_der15,$div_der16,$div_der17,$div_der18,$div_der19,$div_der20,$div_der21,$div_der22,$div_der23,$div_der24,$div_der25,$div_der26,$div_der27,$div_der28,$div_der29,$div_der30,$div_der31
        ,$div_abj,$div_abj1,$div_abj2,$div_abj3,$div_abj4,$div_abj5,$div_abj6,$div_abj7,$div_abj8,$div_abj9,$div_abj10,$div_abj11,$div_abj12,$div_abj13,$div_abj14,$div_abj15,$div_abj16,$div_abj17,$div_abj18,$div_abj19,$div_abj20,$div_abj21,$div_abj22,$div_abj23,$div_abj24,$div_abj25,$div_abj26,$div_abj27,$div_abj28,$div_abj29,$div_abj30,$div_abj31
        ,$div_izq,$div_izq1,$div_izq2,$div_izq3,$div_izq4,$div_izq5,$div_izq6,$div_izq7,$div_izq8,$div_izq9,$div_izq10,$div_izq11,$div_izq12,$div_izq13,$div_izq14,$div_izq15,$div_izq16,$div_izq17,$div_izq18,$div_izq19,$div_izq20,$div_izq21,$div_izq22,$div_izq23,$div_izq24,$div_izq25,$div_izq26,$div_izq27,$div_izq28,$div_izq29,$div_izq30,$div_izq31)
    {
        $query = "INSERT INTO diagnostico_sab (CI,SD_18A,SD_17A,SD_16A,SD_15A,SD_14A,SD_13A,SD_12A,SD_11A,SI_21A,SI_22A,SI_23A,SI_24A,SI_25A,SI_26A,SI_27A,SI_28A) VALUES ('$ci','$div_abj','$div_abj1','$div_abj2','$div_abj3','$div_abj4','$div_abj5','$div_abj6','$div_abj7','$div_abj8','$div_abj9','$div_abj10','$div_abj11','$div_abj12','$div_abj13','$div_abj14','$div_abj15')";
        $result=mysqli_query($this->cconexion,$query);
        //echo $result;
    }
    public function insertDientesab2($ci,$div_md,$div_md1,$div_md2,$div_md3,$div_md4,$div_md5,$div_md6,$div_md7,$div_md8,$div_md9,$div_md10,$div_md11,$div_md12,$div_md13,$div_md14,$div_md15,$div_md16,$div_md17,$div_md18,$div_md19,$div_md20,$div_md21,$div_md22,$div_md23,$div_md24,$div_md25,$div_md26,$div_md27,$div_md28,$div_md29,$div_md30,$div_md31
        ,$div_arb,$div_arb1,$div_arb2,$div_arb3,$div_arb4,$div_arb5,$div_arb6,$div_arb7,$div_arb8,$div_arb9,$div_arb10,$div_arb11,$div_arb12,$div_arb13,$div_arb14,$div_arb15,$div_arb16,$div_arb17,$div_arb18,$div_arb19,$div_arb20,$div_arb21,$div_arb22,$div_arb23,$div_arb24,$div_arb25,$div_arb26,$div_arb27,$div_arb28,$div_arb29,$div_arb30,$div_arb31
        ,$div_der,$div_der1,$div_der2,$div_der3,$div_der4,$div_der5,$div_der6,$div_der7,$div_der8,$div_der9,$div_der10,$div_der11,$div_der12,$div_der13,$div_der14,$div_der15,$div_der16,$div_der17,$div_der18,$div_der19,$div_der20,$div_der21,$div_der22,$div_der23,$div_der24,$div_der25,$div_der26,$div_der27,$div_der28,$div_der29,$div_der30,$div_der31
        ,$div_abj,$div_abj1,$div_abj2,$div_abj3,$div_abj4,$div_abj5,$div_abj6,$div_abj7,$div_abj8,$div_abj9,$div_abj10,$div_abj11,$div_abj12,$div_abj13,$div_abj14,$div_abj15,$div_abj16,$div_abj17,$div_abj18,$div_abj19,$div_abj20,$div_abj21,$div_abj22,$div_abj23,$div_abj24,$div_abj25,$div_abj26,$div_abj27,$div_abj28,$div_abj29,$div_abj30,$div_abj31
        ,$div_izq,$div_izq1,$div_izq2,$div_izq3,$div_izq4,$div_izq5,$div_izq6,$div_izq7,$div_izq8,$div_izq9,$div_izq10,$div_izq11,$div_izq12,$div_izq13,$div_izq14,$div_izq15,$div_izq16,$div_izq17,$div_izq18,$div_izq19,$div_izq20,$div_izq21,$div_izq22,$div_izq23,$div_izq24,$div_izq25,$div_izq26,$div_izq27,$div_izq28,$div_izq29,$div_izq30,$div_izq31)
    {
        $query = "INSERT INTO diagnostico_iab (CI,II_38A,II_37A,II_36A,II_35A,II_34A,II_33A,II_32A,II_31A,ID_41A,ID_42A,ID_43A,ID_44A,ID_45A,ID_46A,ID_47A,ID_48A) VALUES ('$ci','$div_abj16','$div_abj17','$div_abj18','$div_abj19','$div_abj20','$div_abj21','$div_abj22','$div_abj23','$div_abj24','$div_abj25','$div_abj26','$div_abj27','$div_abj28','$div_abj29','$div_abj30','$div_abj31')";
        $result=mysqli_query($this->cconexion,$query);
        //echo $result;
    }


    public function insertDientesi1($ci,$div_md,$div_md1,$div_md2,$div_md3,$div_md4,$div_md5,$div_md6,$div_md7,$div_md8,$div_md9,$div_md10,$div_md11,$div_md12,$div_md13,$div_md14,$div_md15,$div_md16,$div_md17,$div_md18,$div_md19,$div_md20,$div_md21,$div_md22,$div_md23,$div_md24,$div_md25,$div_md26,$div_md27,$div_md28,$div_md29,$div_md30,$div_md31
        ,$div_arb,$div_arb1,$div_arb2,$div_arb3,$div_arb4,$div_arb5,$div_arb6,$div_arb7,$div_arb8,$div_arb9,$div_arb10,$div_arb11,$div_arb12,$div_arb13,$div_arb14,$div_arb15,$div_arb16,$div_arb17,$div_arb18,$div_arb19,$div_arb20,$div_arb21,$div_arb22,$div_arb23,$div_arb24,$div_arb25,$div_arb26,$div_arb27,$div_arb28,$div_arb29,$div_arb30,$div_arb31
        ,$div_der,$div_der1,$div_der2,$div_der3,$div_der4,$div_der5,$div_der6,$div_der7,$div_der8,$div_der9,$div_der10,$div_der11,$div_der12,$div_der13,$div_der14,$div_der15,$div_der16,$div_der17,$div_der18,$div_der19,$div_der20,$div_der21,$div_der22,$div_der23,$div_der24,$div_der25,$div_der26,$div_der27,$div_der28,$div_der29,$div_der30,$div_der31
        ,$div_abj,$div_abj1,$div_abj2,$div_abj3,$div_abj4,$div_abj5,$div_abj6,$div_abj7,$div_abj8,$div_abj9,$div_abj10,$div_abj11,$div_abj12,$div_abj13,$div_abj14,$div_abj15,$div_abj16,$div_abj17,$div_abj18,$div_abj19,$div_abj20,$div_abj21,$div_abj22,$div_abj23,$div_abj24,$div_abj25,$div_abj26,$div_abj27,$div_abj28,$div_abj29,$div_abj30,$div_abj31
        ,$div_izq,$div_izq1,$div_izq2,$div_izq3,$div_izq4,$div_izq5,$div_izq6,$div_izq7,$div_izq8,$div_izq9,$div_izq10,$div_izq11,$div_izq12,$div_izq13,$div_izq14,$div_izq15,$div_izq16,$div_izq17,$div_izq18,$div_izq19,$div_izq20,$div_izq21,$div_izq22,$div_izq23,$div_izq24,$div_izq25,$div_izq26,$div_izq27,$div_izq28,$div_izq29,$div_izq30,$div_izq31)
    {
        $query = "INSERT INTO diagnostico_si (CI,SD_18I,SD_17I,SD_16I,SD_15I,SD_14I,SD_13I,SD_12I,SD_11I,SI_21I,SI_22I,SI_23I,SI_24I,SI_25I,SI_26I,SI_27I,SI_28I) VALUES ('$ci','$div_izq','$div_izq1','$div_izq2','$div_izq3','$div_izq4','$div_izq5','$div_izq6','$div_izq7','$div_izq8','$div_izq9','$div_izq10','$div_izq11','$div_izq12','$div_izq13','$div_izq14','$div_izq15')";
        $result=mysqli_query($this->cconexion,$query);
        //echo $result;
    }
    public function insertDientesi2($ci,$div_md,$div_md1,$div_md2,$div_md3,$div_md4,$div_md5,$div_md6,$div_md7,$div_md8,$div_md9,$div_md10,$div_md11,$div_md12,$div_md13,$div_md14,$div_md15,$div_md16,$div_md17,$div_md18,$div_md19,$div_md20,$div_md21,$div_md22,$div_md23,$div_md24,$div_md25,$div_md26,$div_md27,$div_md28,$div_md29,$div_md30,$div_md31
        ,$div_arb,$div_arb1,$div_arb2,$div_arb3,$div_arb4,$div_arb5,$div_arb6,$div_arb7,$div_arb8,$div_arb9,$div_arb10,$div_arb11,$div_arb12,$div_arb13,$div_arb14,$div_arb15,$div_arb16,$div_arb17,$div_arb18,$div_arb19,$div_arb20,$div_arb21,$div_arb22,$div_arb23,$div_arb24,$div_arb25,$div_arb26,$div_arb27,$div_arb28,$div_arb29,$div_arb30,$div_arb31
        ,$div_der,$div_der1,$div_der2,$div_der3,$div_der4,$div_der5,$div_der6,$div_der7,$div_der8,$div_der9,$div_der10,$div_der11,$div_der12,$div_der13,$div_der14,$div_der15,$div_der16,$div_der17,$div_der18,$div_der19,$div_der20,$div_der21,$div_der22,$div_der23,$div_der24,$div_der25,$div_der26,$div_der27,$div_der28,$div_der29,$div_der30,$div_der31
        ,$div_abj,$div_abj1,$div_abj2,$div_abj3,$div_abj4,$div_abj5,$div_abj6,$div_abj7,$div_abj8,$div_abj9,$div_abj10,$div_abj11,$div_abj12,$div_abj13,$div_abj14,$div_abj15,$div_abj16,$div_abj17,$div_abj18,$div_abj19,$div_abj20,$div_abj21,$div_abj22,$div_abj23,$div_abj24,$div_abj25,$div_abj26,$div_abj27,$div_abj28,$div_abj29,$div_abj30,$div_abj31
        ,$div_izq,$div_izq1,$div_izq2,$div_izq3,$div_izq4,$div_izq5,$div_izq6,$div_izq7,$div_izq8,$div_izq9,$div_izq10,$div_izq11,$div_izq12,$div_izq13,$div_izq14,$div_izq15,$div_izq16,$div_izq17,$div_izq18,$div_izq19,$div_izq20,$div_izq21,$div_izq22,$div_izq23,$div_izq24,$div_izq25,$div_izq26,$div_izq27,$div_izq28,$div_izq29,$div_izq30,$div_izq31)
    {
        $query = "INSERT INTO diagnostico_ii (CI,II_38I,II_37I,II_36I,II_35I,II_34I,II_33I,II_32I,II_31I,ID_41I,ID_42I,ID_43I,ID_44I,ID_45I,ID_46I,ID_47I,ID_48I) VALUES ('$ci','$div_izq16','$div_izq17','$div_izq18','$div_izq19','$div_izq20','$div_izq21','$div_izq22','$div_izq23','$div_izq24','$div_izq25','$div_izq26','$div_izq27','$div_izq28','$div_izq29','$div_izq30','$div_izq31')";
        $result=mysqli_query($this->cconexion,$query);
        //echo $result;
    }
}