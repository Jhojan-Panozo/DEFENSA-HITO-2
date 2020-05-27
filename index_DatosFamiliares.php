<!doctype html>
<html lang="en" xmlns:v-on="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="css/datos_personales.css" type="text/css" rel="stylesheet" media="">

    <title>Document</title>
</head>
<body>

<div class="cuadro3">
    <main>
        <form action="" class="formulario" method="post" v-on:submit.prevent>
            <h1 class="formulario__titulo">Datos Familiares</h1>


            <input class="formulario__input" type="text" name="nombre_p" v-model ="nombre_p" required>
            <label class="formlario__label" for="texto">Nombre del Padre: </label>

            <input class="formulario__input" type="text" name="ocupacion_p" v-model ="ocupacion_p" required>
            <label class="formlario__label" for="texto">Ocupacion: </label>

            <input class="formulario__input" type="text" name="nombre_m" v-model ="nombre_m" required>
            <label class="formlario__label" for="texto">Nombre de la madre: </label>

            <input class="formulario__input" type="text" name="ocupacion_m" v-model ="ocupacion_m" required>
            <label class="formlario__label" for="texto">Ocupacion: </label>

            <input class="formulario__input" type="text"name="antecedentes" v-model ="antecedentes" required>
            <label class="formlario__label" for="texto">Antecedentes Familiares: </label>


            <input class="formlario__submit" type="submit" value="Agregar" v-on:click="GuardarDatosFamiliares"/>

        </form>
    </main>
    <!-- Importamos Vue.js y Axios.js -->
    <script src="Js/vue.js"></script>
    <script src="Js/axios.min.js"></script>
    <!-- Importamos nuestra app js -->
    <script src="Js/app_proyecto.js"></script>
    <script src="Js/form.js"></script>
</div>

</body>
</html>