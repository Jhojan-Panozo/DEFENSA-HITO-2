<!doctype html>
<html lang="en" xmlns:v-on="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/menu_iz.css" type="text/css" rel="stylesheet" media="">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">


    <title>Menu</title>
</head>
<!--////////////////////////////////////////////////////////////-->

<!--header area start-->
<header>
    <label for="check">
        <i class="fas fa-bars" id="sidebar_btn"></i>
    </label>
    <div class="left_area">
        <h3>FAMILIA DENTAL <span>UNIFRANZ</span></h3>
    </div>
    <div class="right_area">
        <a href="index_inicio.php" class="logout_btn">Salir</a>
    </div>
</header>

<!--////////////////////////////////////////////////////////////-->

<body>
<input type="checkbox" id="check">

<!--header area end-->
<!--sidebar start-->
<div class="sidebar">
    <center>
        <img src="img/Den11.png" class="profile_image" alt="">
        <h4>Nombre Doctor</h4>
    </center>
<!--    <a href="#"><i class="fas fa-desktop"></i><span>Datos Personales</span></a>-->
<!--    <a href="#"><i class="fas fa-cogs"></i><span>Antecedentes Patologicos</span></a>-->
<!--    <a href="#"><i class="fas fa-table"></i><span>Higiene Bucal</span></a>-->
<!--    <a href="#"><i class="fas fa-th"></i><span>Signos Vitales</span></a>-->
<!--    <a href="#"><i class="fas fa-info-circle"></i><span>Odontograma</span></a>-->
<!--    <a href="#"><i class="fas fa-sliders-h"></i><span>Notas</span></a>-->
    <ul>
        <li>
            <a href="javascript:void(0)" class="item" id="item_1" data-src="index_DPersonales.php"><i class="fas fa-desktop"></i><span>Datos Personales</span></a>
        </li>
        <li>
            <a href="javascript:void(0)" class="item" id="item_2" data-src="index_DatosFamiliares.php"><i class="fas fa-table"></i><span>Datos Familiares</span></a>
        </li>
        <li>
            <a href="javascript:void(0)" class="item" id="item_3" data-src="index_APatologicos.php"><i class="fas fa-th"></i><span>Antecedentes Patologicos</span></a>
        </li>
        <li>
            <a href="javascript:void(0)" class="item" id="item_3" data-src="index_Higiene_Bucal.php"><i class="fas fa-sliders-h"></i><span>Higiene Bucal y signos vitales</span></a>
        </li>
        <li>
            <a href="javascript:void(0)" class="item" id="item_3" data-src="index.php"><i class="fas fa-cogs"></i><span>Odontograma</span></a>
        </li>
    </ul>
</div>
<script>

    var items = document.querySelectorAll(".item"); // obtenemos todos los elementos con la clase "item"
    items.forEach(function(item) { // recorremos los elementos
        item.addEventListener("click", function() { // creamos un listener para escuchar el click
            var src = item.dataset.src; // obtenemos el src que pondremos luego al iframe
            var iframe = document.querySelector(".page"); // obtenemos el iframe con clase "page"
            iframe.setAttribute("src", src); // ponemos el atributo "src" al iframe
        });
    });
</script>
<!--sidebar end-->
<!--////////////////////////////////////////////////////////////-->
<section>
<!--    <iframe src="index_DatosFamiliares.php">-->
    <iframe class="page">
<!--    <iframe src="index_DPersonales.php">-->
<!--    <iframe src="index_Higiene_Bucal.php">-->
</section>
<!--////////////////////////////////////////////////////////////-->
</body>
</html>