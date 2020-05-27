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
    <div class="cuadro2">
        <main>
            <form action="" class="formulario" method="post" v-on:submit.prevent>
                <h1 class="formulario__titulo">Datos Personales</h1>

                <input class="formulario__input" type="date" placeholder="" name="fecha_ad" v-model ="fecha_ad" required>
                <label class="formlario__label_F" for="texto">Fecha de Admision: </label>

                <input class="formulario__input" type="text" name="motivo" v-model ="motivo" required>
                <label class="formlario__label" for="texto">Motivo de consulta: </label>

                <input class="formulario__input" type="text" name="ci" v-model ="ci" required>
                <label class="formlario__label" for="texto">CI: </label>

                <input class="formulario__input" type="text" name="nombre" v-model ="nombre" required>
                <label class="formlario__label"  for="texto">Nombre: </label>

                <input class="formulario__input" type="text" name="pellido_p" v-model ="pellido_p" required>
                <label class="formlario__label"  for="texto">Apellido Paterno: </label>

                <input class="formulario__input" type="text" name="pellido_m" v-model ="pellido_m" required>
                <label class="formlario__label"  for="texto">Apellido Materno: </label>

                <input class="formulario__input" type="text" name="domicilio" v-model ="domicilio" required>
                <label class="formlario__label"  for="texto">Domicilio: </label>

                <input class="formulario__input" type="text" name="telefono" v-model ="telefono" required>
                <label class="formlario__label"  for="texto">Telefono: </label>

                <input class="formulario__input" type="text" name="celular" v-model ="celular" required>
                <label class="formlario__label"  for="texto">Celular: </label>

                <input class="formulario__input" type="text" name="edad" v-model ="edad" required>
                <label class="formlario__label"  for="texto">Edad: </label>

                <div class="formulario__input_R">
                    <input type="radio"  name="radio" v-model ="masculino" checked>
                    <label class="formlario__label_R"  for="blanco">Masculino</label>

                    <input type="radio"  name="radio" v-model ="femenino" >
                    <label class="formlario__label_R"  for="negro">Femenino</label>
                </div>
                <label class="formlario__label_F" for="texto">Sexo:</label>

                <select class="formulario__input" name="estado_c" v-model ="estado_c">
                    <option class="formulario__input" >Soltero/a</option>
                    <option class="formulario__input" >Casado/a</option>
                    <option>Divorciado/a</option>
                    <option>Viudo/a </option>
                </select>
                <label class="formlario__label_F" >Estado Civil: </label>

                <input class="formulario__input" type="text" name="religion" v-model ="religion" required>
                <label class="formlario__label" for="texto">Religion: </label>

                <select class="formulario__input" name="ocupacion" v-model ="ocupacion">
                    <option>Vendedor</option>
                    <option>Mesero</option>
                    <option>Taxista</option>
                    <option>Comerciante</option>
                </select>
                <label class="formlario__label_F" >Ocupacion: </label>

                <input class="formulario__input" type="text" name="direccion" v-model ="direccion" required>
                <label class="formlario__label" for="texto">Direccion: </label>

                <input class="formulario__input" type="date" name="fecha_n" v-model ="fecha_n" required>
                <label class="formlario__label_F" for="texto">Fecha de nacimiento: </label>

                <input class="formulario__input" type="text" name="escolaridad" v-model ="escolaridad" required>
                <label class="formlario__label" for="texto">Escolaridad: </label>



                <input class="formlario__submit" type="submit" value="Agregar" v-on:click="AgregarPalabra"/>

            </form>


        </main>
        <!-- Importamos Vue.js y Axios.js -->
        <script src="Js/vue.js"></script>
        <script src="Js/axios.min.js"></script>
        <!-- Importamos nuestra app js -->
        <script src="Js/app_proyecto.js"></script>
        <script src="Js/form.js"></script>
    </div>
</section>
</body>
</html>