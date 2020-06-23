<?php
//include_once 'Database.php';
//session_start();
//
//if(isset($_POST['username']) && ($_POST['password']))
//    $username=$_POST['username'];
//    $password=$_POST['password'];
//
//    $db = new Database();
//    $query = $db->con()->prepare('SELECT*FROM registro_u WHERE USUARIO = :username AND CONTRASENA = :password');
//    $query->execute(['username' => $$username, 'password' => $password]);
//    $row = $query->fetch(PDO::FETCH_NUM);
//    if($row == true){
//
//    }else{
//        echo "El usuario es incorrecto";
//    }

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style-loguin.css" type="text/css" rel="stylesheet" media="">
    <title>Loguin</title>
</head>
<body>
<div class="Loguin">
    <div class="login-box" action="#" method="POST">
        <h1>Login DR.</h1>
        <div class="textbox">
            <h5>USUARIO</h5>
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Example: Jhojan">
        </div>
        <div class="textbox">
            <h5>CONTRASEÑA</h5>
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Example: ********">
        </div>
        <a href="index_menu.php"><input type="button" class="btn" value="ACCEDER" ></a>
        <h4>Iniciar sesion para ingresar al sistema</h4>
    </div>
</div>

</body>
</html>