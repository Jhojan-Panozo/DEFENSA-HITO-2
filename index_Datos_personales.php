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

<section>
    <div class="prueba"></div>
    <div class="cuadro2">
        <main>
            <form method="post" v-on:submit.prevent>
                <div class="forma_DPersonales">
                    <label for="texto">Fecha de Admision: </label>
                    <input type="date" placeholder="" name="fecha_ad" v-model ="fecha_ad" required>
                </div>
                <div class="forma_DPersonales">
                    <label for="texto">Motivo de consulta: </label>
                    <input type="text" placeholder="Por que motivo se atiende" name="motivo" v-model ="motivo" required>
                </div>
                <br>
                <br>
                <label for="texto">CI: </label>
                <input id="ci" type="text" placeholder="Ej: 13096013" name="ci" v-model ="ci" required>
                <br>
                <br>
                <label for="texto">Nombre: </label>
                <input type="text" placeholder="Ej: Jhojan" name="nombre" v-model ="nombre" required>
                <br>
                <br>
                <label for="texto">Apellido Paterno: </label>
                <input type="text" placeholder="Ej: Panozo" name="pellido_p" v-model ="pellido_p" required>
                <br>
                <br>
                <label for="texto">Apellido Materno: </label>
                <input type="text" placeholder="Ej: Perez" name="pellido_m" v-model ="pellido_m" required>
                <br>
                <br>
                <label for="texto">Domicilio: </label>
                <input type="text" placeholder="Ej: Av.Los Angeles" name="domicilio" v-model ="domicilio" required>
                <br>
                <br>
                <label for="texto">Telefono: </label>
                <input type="text" placeholder="Ej: 4757145" name="telefono" v-model ="telefono" required>
                <br>
                <br>
                <label for="texto">Celular: </label>
                <input type="text" placeholder="Ej: 65509404" name="celular" v-model ="celular" required>
                <br>
                <br>
                <label for="texto">Edad: </label>
                <input type="text" placeholder="Ej: 18" name="edad" v-model ="edad" required>
                <br>
                <br>
                <input type="radio"  name="radio" name="masculino" v-model ="masculino" checked><label for="blanco">Masculino</label>
                <input type="radio"  name="radio" name="femenino" v-model ="femenino" ><label for="negro">Femenino</label>
                <br>
                <br>
                <label >Estado Civil: </label>
                <select name="estado_c" v-model ="estado_c">
                    <option>Soltero/a</option>
                    <option>Casado/a</option>
                    <option>Divorciado/a</option>
                    <option>Viudo/a </option>
                </select>
                <br>
                <br>
                <label for="texto">Religion: </label>
                <input type="text" placeholder="Ej: Evangelico" name="religion" v-model ="religion" required>
                <br>
                <br>
                <label >Ocupacion: </label>
                <select name="ocupacion" v-model ="ocupacion">
                    <option>Vendedor</option>
                    <option>Mesero</option>
                    <option>Taxista</option>
                    <option>Comerciante</option>
                </select>
                <br>
                <br>
                <label for="texto">Direccion: </label>
                <input type="text" placeholder="Ej: Siglo XX" name="direccion" v-model ="direccion" required>
                <br>
                <br>
                <label for="texto">Fecha de nacimiento: </label>
                <input type="date" placeholder="Ej: 04-01-1998" name="fecha_n" v-model ="fecha_n" required>
                <br>
                <br>
                <label for="texto">Escolaridad: </label>
                <input type="text" placeholder="Ej: Secundario" name="escolaridad" v-model ="escolaridad" required>
                <br>
                <br>


                <input type="submit" value="Agregar" v-on:click="AgregarPalabra" onclick="ci_igual()"/>

            </form>
        </main>
        <!-- Importamos Vue.js y Axios.js -->
        <script src="Js/vue.js"></script>
        <script src="Js/axios.min.js"></script>
        <!-- Importamos nuestra app js -->
        <script src="Js/app_proyecto.js"></script>
        <script src="Js/proyect.js"></script>
    </div>
</section>
</body>
</html>