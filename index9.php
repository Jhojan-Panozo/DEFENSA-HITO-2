<!doctype html>
<html lang="en" xmlns:v-on="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<main >
<!--    <form method="post" action="script/manageUser.php">-->
    <form method="post" v-on:submit.prevent>
        <label for='ci' >CI:</label><input type="text" name="ci" v-model ="ci" /></br>
        <label for='nombre' >Nombre:</label><input type="text" name="nombres" v-model ="nombres"/></br>
        <label for='apellidos' >Apellidos:</label><input type="text" name="apellidos" v-model ="apellidos"/></br>
        <label for='email' >Email:</label><input type="email" name="email" v-model ="email"/></br>
        <label for='esmayor' >Mayor de edad:</label><input type="radio" name="esmayor" v-model ="esmayor"/></br>
        <label for='password' >Password:</label><input type="password" name="password" v-model ="password"/></br>
        <input type="submit" value="Go" v-on:click="registrarUsuario"/>

    </form>
    <br></br>

    <form method="post" v-on:submit.prevent>
        <label for='cod' >Codigo Materia:</label><input type="text" name="cod" v-model ="cod"/></br>
        <label for='nombre' >Nombre:</label><input type="text" name="nombress" v-model ="nombress"/></br>
        <input type="submit" value="Go" v-on:click="registrarMateria"/>
    </form>
    <br></br>

    <form method="post" v-on:submit.prevent>
        <label for='ci' >CI:</label>
        <input type="text" name="ci" v-model ="ci" /></br>
        <label for='respuestaUS' >Respuesta:</label>
        <input type="text" name="respuestaUS" v-model ="respuestaUS" /></br>
        <input type="submit" value="Eliminar" v-on:click="versiExiste"/>

    </form>

    <h2>Listado de Usuarios</h2>
    <!--<pre>{{ $data }}</pre>-->
    <div v-for="user in arrayDeUsuarios">
        <div>User : {{ user.ciUser }},{{ user.name }}, {{ user.lastname }}</div>
    </div>

    <h2>Listado de Materias</h2>
    <!--<pre>{{ $data }}</pre>-->
    <div v-for="user in arrayDeMateria">
        <div>Materia : {{ user.codMat }},{{ user.desMat }}</div>
    </div>

    <br></br>


    <form method="post" v-on:submit.prevent>
        <div>
            <label for='num1' >Numero Uno:</label>
            <input type="text" name="num1" v-model ="num1"/></br>
        </div>
        <div>
            <label for='num2' >Numero Dos:</label>
            <input type="text" name="num2" v-model ="num2"/></br>
        </div>
        <div>
            <label for='operation' >Operacion:</label>
            <input type="text" name="operation" v-model ="operation"/></br>
        </div>
        <div>
            <label for='respuesta' >Respuesta:</label>
            <input type="text" name="respuesta" v-model ="respuesta"/></br>
        </div>
        <input type="submit" value="Calcular Operacion" v-on:click="calcularOperation"/>
    </form>
</main>

<!-- Importamos Vue.js y Axios.js -->
<script src="js/vue.js"></script>
<script src="js/axios.min.js"></script>
<!-- Importamos nuestra app js -->
<script src="js/app.js"></script>


<?php
//include_once 'script/manageAuto.php';
//?>

<!---->
<!--<p> HOLA MUNDO----Programacion avanzada !!!</p>-->
<!--<a href="php/archivos/recibeParametros.php?VAR_NOMBRE=Jhojan&VAR_APELLIDO=Panozo Perez&VAR_EDAD=21&VAR_DIRECCION=AV Los Angeles&VAR_CELULAR=65509404">Click Aqui</a>-->

</body>
</html>

<!--html:5 + tap-->
<!--control+d--copiar imagen-->
<!--ctl+clik...vaciar constructor-->
<!--ctrl+alt+fecha..retrocederatras-->
