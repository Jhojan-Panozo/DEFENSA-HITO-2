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


<div class="cuadro2">
    <main>
        <form action="" class="formulario" method="post" v-on:submit.prevent>
            <h1 class="formulario__titulo">Higiene Bucal y Signos Vitales</h1>

            <div class="formulario__input_R">
                <input type="radio"  name="radio" v-model ="cepillo" checked>
                <label class="formlario__label_R" for="blanco">Si</label>
                <input type="radio"  name="radio" v-model ="cepillo" >
                <label class="formlario__label_R" for="negro">No</label>
            </div>
            <label class="formlario__label_F" for="texto">Usa Cepillo:</label>

            <div class="formulario__input_R">
                <input type="radio"  name="radio1" v-model ="dentrifico" checked>
                <label class="formlario__label_R" for="blanco">Si</label>
                <input type="radio"  name="radio1" v-model ="dentrifico" >
                <label class="formlario__label_R" for="negro">No</label>
            </div>
            <label class="formlario__label_F" for="texto">Usa dentrifico:</label>

            <input class="formulario__input" type="text" name="tiempo" v-model ="tiempo" required>
            <label class="formlario__label" for="texto">tiempo: </label>

            <input class="formulario__input" type="text" name="tdentrifico" v-model ="tdentrifico" required>
            <label class="formlario__label" for="texto">Tipo de dentrifico: </label>

            <select class="formulario__input" name="cepillado" v-model ="cepillado">
                <option>Normal</option>
                <option>Bronceado</option>
                <option>Natacion</option>
                <option>balet </option>
            </select>
            <label class="formlario__label_F">Tecnica de cepillado: </label>

            <select class="formulario__input" name="tcepillado" v-model ="tcepillado">
                <option>Chiquito</option>
                <option>Mediano</option>
                <option>Grande</option>
            </select>
            <label class="formlario__label_F">tamaño de cepillo: </label>

            <input class="formulario__input" type="text" name="mango" v-model ="mango" required>
            <label class="formlario__label" for="texto">Mango: </label>

            <input class="formulario__input" type="text" name="cerdas" v-model ="cerdas" required>
            <label class="formlario__label" for="texto">Cerdas: </label>

            <div class="formulario__input_R">
                <input type="radio"  name="radio2" v-model ="mondadientes" checked>
                <label class="formlario__label_R" for="blanco">Si</label>
                <input type="radio"  name="radio2" v-model ="mondadientes" >
                <label class="formlario__label_R" for="negro">No</label>
            </div>
            <label class="formlario__label_F" for="texto">Usa mondadientes:</label>

            <div class="formulario__input_R">
                <input type="radio"  name="radio3" v-model ="lengua" checked>
                <label class="formlario__label_R" for="blanco">Si</label>
                <input type="radio"  name="radio3" v-model ="lengua" >
                <label class="formlario__label_R" for="negro">No</label>
            </div>
            <label class="formlario__label_F" for="texto">Se cepilla la lengua:</label>

            <div class="formulario__input_R">
                <input type="radio"  name="radio4" v-model ="dental" checked>
                <label class="formlario__label_R" for="blanco">Si</label>
                <input type="radio"  name="radio4" v-model ="dental" >
                <label class="formlario__label_R" for="negro">No</label>
            </div>
            <label class="formlario__label_F" for="texto">Usa Hilo Dental:</label>

            <div class="formulario__input_R">
                <input type="radio"  name="radio5" v-model ="saludb" checked>
                <label class="formlario__label_R" for="blanco">Si</label>
                <input type="radio"  name="radio5" v-model ="saludb" >
                <label class="formlario__label_R" for="negro">No</label>
            </div>
            <label class="formlario__label_F" for="texto">La interesa su salud Bocal:</label>

            <input class="formulario__input" type="text" name="arterial" v-model ="arterial" required>
            <label class="formlario__label" for="texto">Precion arterial: </label>

            <input class="formulario__input" type="text" name="pulso" v-model ="pulso" required>
            <label class="formlario__label" for="texto">Pulso: </label>

            <input class="formulario__input" type="text" name="respiracion" v-model ="respiracion" required>
            <label class="formlario__label" for="texto">Respiracion: </label>

            <input class="formulario__input" type="text" name="temperatura" v-model ="temperatura" required>
            <label class="formlario__label" for="texto">Temperatura: </label>

            <input class="formulario__input" type="text" name="peso" v-model ="peso" required>
            <label class="formlario__label" for="texto">Peso: </label>

            <input class="formulario__input" type="text" name="talla" v-model ="talla" required>
            <label class="formlario__label" for="texto">Talla: </label>

            <input  class="formlario__submit" type="submit" value="Agregar" v-on:click="GuardarHigieneBucal"/>

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
