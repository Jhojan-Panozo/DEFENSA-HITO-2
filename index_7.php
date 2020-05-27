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
        <label for='cadena_es' >CADENA EN ESP:</label>
        <input type="text" name="cadena_es" v-model ="cadena_es" /></br>
        <br></br>
        <label for='cadena_in' >CADENA EN ING:</label>
        <input type="text" name="cadena_in" v-model ="cadena_in"/></br>
        <br></br>
        <label for='cadena_por' >CADENA EN POR:</label>
        <input type="text" name="cadena_por" v-model ="cadena_por"/></br>

        <input type="submit" value="Agregar" v-on:click="AgregarPalabra"/>

    </form>

<!--    <h2>BUSCAR EN EL DICCIONARIO</h2>-->
<!--    <form method="post" v-on:submit.prevent>-->
<!--        <label for='cadena_es_b' >Cadena en español a buscarse:</label>-->
<!--        <input type="text" name="cadena_es_b" v-model ="cadena_es_b" /></br>-->
<!--        <label for='Mar' >Ingles:</label>-->
<!--        <input type="radio" name="Mar" value="ing" v-model ="Mar1"/></br>-->
<!---->
<!--        <label for='Mar' >Portuguez:</label>-->
<!--        <input type="radio" name="Mar" value="por" v-model ="Mar1"/></br>-->
<!---->
<!--        <label for='cadena_tra' >Cadena traducida:</label>-->
<!--        <input type="text" name="cadena_tra" v-model ="cadena_tra"/></br>-->
<!---->
<!--        <input type="submit" value="Agregar" v-on:click="BuscarPalabra"/>-->
<!---->
<!--    </form>-->
<!---->
<!--    <form method="post" v-on:submit.prevent>-->
<!--        <label for='cadena_es_bo'>CADENA EN ESP ID:</label>-->
<!--        <input type="text" name="cadena_es_bo" v-model ="cadena_es_bo" /></br>-->
<!---->
<!--        <input type="submit" value="Eliminar" v-on:click="Eliminar_Pa"/>-->
<!---->
<!--    </form>-->


    <h2>BUSCAR EN EL DICCIONARIO</h2>
    <form method="post" v-on:submit.prevent>
        <label for='cadena_es_b' >Cadena Origin:</label>
        <input type="text" name="cadena_es_b" v-model ="cadena_es_b" /></br>
        <label for='Mar' >Español:</label>
        <input type="radio" name="Mar" value="esp1" v-model ="Mar2"/></br>

        <label for='Mar' >Ingles:</label>
        <input type="radio" name="Mar" value="ing1" v-model ="Mar2"/></br>

        <label for='Mar' >Portuguez:</label>
        <input type="radio" name="Mar" value="por1" v-model ="Mar2"/></br>

        <label for='cadena_tra' >Cadena traducida:</label>
        <input type="text" name="cadena_tra" v-model ="cadena_tra"/></br>
        <label for='Mar' >Español:</label>
        <input type="radio" name="Mar1" value="esp" v-model ="Mar1"/></br>

        <label for='Mar' >Ingles:</label>
        <input type="radio" name="Mar1" value="ing" v-model ="Mar1"/></br>

        <label for='Mar' >Portuguez:</label>
        <input type="radio" name="Mar1" value="por" v-model ="Mar1"/></br>

        <input type="submit" value="Agregar" v-on:click="traPalabra"/>
    </form>


</main>
<!-- Importamos Vue.js y Axios.js -->
<script src="js/vue.js"></script>
<script src="js/axios.min.js"></script>
<!-- Importamos nuestra app js -->
<script src="js/app.js"></script>

</body>
</html>

