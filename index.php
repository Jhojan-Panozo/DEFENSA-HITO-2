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
            <h1 class="formulario__titulo">Registro de Usuarios</h1>


            <input class="formulario__input" type="text" name="ci" v-model ="ci" required>
            <label class="formlario__label" for="texto">CI: </label>

            <input class="formulario__input" type="text" name="nombre" v-model ="nombre" required>
            <label class="formlario__label" for="texto">Nombre: </label>

            <input class="formulario__input" type="text" name="apellido_p" v-model ="apellido_p" required>
            <label class="formlario__label" for="texto">Apellido Paterno: </label>

            <input class="formulario__input" type="text" name="apellido_m" v-model ="apellido_m" required>
            <label class="formlario__label" for="texto">Apellido Materno: </label>

            <input class="formulario__input" type="text"name="celular" v-model ="celular" required>
            <label class="formlario__label" for="texto">Celular: </label>

            <input class="formulario__input" type="text"name="gmail" v-model ="gmail" required>
            <label class="formlario__label" for="texto">Gmail: </label>

            <input class="formulario__input" type="text"name="t_usuario" v-model ="t_usuario" required>
            <label class="formlario__label" for="texto">Tipo de Usuario: </label>

            <input class="formulario__input" type="text"name="usuario" v-model ="usuario" >
            <label class="formlario__label" for="texto">Usuario: </label>

            <input class="formulario__input" type="text"name="contrasena" v-model ="contrasena" >
            <label class="formlario__label" for="texto">Contraseña: </label>

            <input class="formlario__submit" type="submit" value="Agregar" v-on:click="GuardarRUsuarios"/>
        </form>
        <h2>Listado de Usuario</h2>
        <!--<pre>{{ $data }}</pre>-->
        <div v-for="user in arrayDeUsuario">
            <div>Usuario : {{ user.CI }},{{ user.NOMBRE }}</div>
        </div>
    </main>
    <!-- Importamos Vue.js y Axios.js -->
    <script src="Js/vue.js"></script>
    <script src="Js/axios.min.js"></script>
    <!-- Importamos nuestra app js -->
    <script src="Js/app_proyecto_a.js"></script>
    <script src="Js/form.js"></script>
</div>
<!--index_RUsuario-->
</body>
</html>