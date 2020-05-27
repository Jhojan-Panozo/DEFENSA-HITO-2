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

    <h2>INSERTAR A DICCIONARIO</h2>

    <form method="post" v-on:submit.prevent>
<!--        <label for='engine' >Engine:</label>-->
<!--        <input type="text" name="engine" v-model ="engine" /></br>-->
        <label for='host' >Host:</label>
        <input type="text" name="host" v-model ="host"/></br>
        <label for='user' >User:</label>
        <input type="text" name="users" v-model ="users"/></br>
        <label for='password' >Password:</label>
        <input type="text" name="password" v-model ="password"/></br>
        <label for='database' >Database:</label>
        <input type="text" name="database" v-model ="database"/></br>
        <label for='port' >Port:</label>
        <input type="text" name="port" v-model ="port"/></br>
        <br></br>


        <input type="submit" value="Test Connection" v-on:click="test_conection"/>

    </form>


</main>
<!-- Importamos Vue.js y Axios.js -->
<script src="js/vue.js"></script>
<script src="js/axios.min.js"></script>
<!-- Importamos nuestra app js -->
<script src="js/app.js"></script>

</body>
</html>



<!--http://localhost/DataBase/-->