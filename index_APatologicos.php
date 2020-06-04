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
            <h1 class="formulario__titulo">Antecedentes Patologicos</h1>

            <div class="formulario__input_R">
                <input type="radio"  name="radio" v-model ="tratamiento_m" checked>
                <label class="formlario__label_R" for="blanco">Si</label>
                <input type="radio"  name="radio" v-model ="tratamiento_m" >
                <label class="formlario__label_R" for="negro">No</label>
            </div>
            <label class="formlario__label_F" for="texto">¿Esta en tratamiento medico?</label>

            <div class="formulario__input_R">
                <input type="radio"  name="radio1" v-model ="medicamentos" checked>
                <label class="formlario__label_R" for="blanco">Si</label>
                <input type="radio"  name="radio1" v-model ="medicamentos" >
                <label class="formlario__label_R" for="negro">No</label>
            </div>
            <label class="formlario__label_F" for="texto">¿Toma medicamentos actualmente?</label>

            <div class="formulario__input_R">
                <input type="radio"  name="radio2" v-model ="alergias" checked>
                <label class="formlario__label_R" for="blanco">Si</label>
                <input type="radio"  name="radio2" v-model ="alergias" >
                <label class="formlario__label_R" for="negro">No</label>
            </div>
            <label class="formlario__label_F" for="texto">¿Alergias?</label>

            <div class="formulario__input_R">
                <input type="radio"  name="radio3" v-model ="enfermedades" checked>
                <label class="formlario__label_R" for="blanco">Si</label>
                <input type="radio"  name="radio3" v-model ="enfermedades" >
                <label class="formlario__label_R" for="negro">No</label>
            </div>
            <label class="formlario__label_F" for="texto">¿Enfermedades cardiovasculares?</label>

            <div class="formulario__input_R">
                <input type="radio"  name="radio4" v-model ="gastricas" checked>
                <label class="formlario__label_R" for="blanco">Si</label>
                <input type="radio"  name="radio4" v-model ="gastricas" >
                <label class="formlario__label_R" for="negro">No</label>
            </div>
            <label class="formlario__label_F" for="texto">¿Ulseras gastricas?</label>

            <div class="formulario__input_R">
                <input type="radio"  name="radio5" v-model ="hepatitis" checked>
                <label class="formlario__label_R" for="blanco">Si</label>
                <input type="radio"  name="radio5" v-model ="hepatitis" >
                <label class="formlario__label_R" for="negro">No</label>
            </div>
            <label class="formlario__label_F" for="texto">¿Hepatitis?</label>

            <div class="formulario__input_R">
                <input type="radio"  name="radio6" v-model ="tuberculosis" checked>
                <label class="formlario__label_R" for="blanco">Si</label>
                <input type="radio"  name="radio6" v-model ="tuberculosis" >
                <label class="formlario__label_R" for="negro">No</label>
            </div>
            <label class="formlario__label_F" for="texto">¿Tuberculosis?</label>

            <div class="formulario__input_R">
                <input type="radio"  name="radio7" v-model ="venerias" checked>
                <label class="formlario__label_R" for="blanco">Si</label>
                <input type="radio"  name="radio7" v-model ="venerias" >
                <label class="formlario__label_R" for="negro">No</label>
            </div>
            <label class="formlario__label_F" for="texto">¿Enfermedades Venerias?</label>

            <div class="formulario__input_R">
                <input type="radio"  name="radio8" v-model ="embarazada" checked>
                <label class="formlario__label_R" for="blanco">Si</label>
                <input type="radio"  name="radio8" v-model ="embarazada" >
                <label class="formlario__label_R" for="negro">No</label>
            </div>
            <label class="formlario__label_F" for="texto">¿Esta usted Embarazada?</label>

            <div class="formulario__input_R">
                <input type="radio"  name="radio9" v-model ="intermedio" checked>
                <label class="formlario__label_R" for="blanco">Si</label>
                <input type="radio"  name="radio9" v-model ="intermedio" >
                <label class="formlario__label_R" for="negro">No</label>
            </div>
            <label class="formlario__label_F" for="texto">¿Ha sido intervenido quirurgicamente?</label>

            <div class="formulario__input_R">
                <input type="radio"  name="radio10" v-model ="post_exodoncia" checked>
                <label class="formlario__label_R" for="blanco">Si</label>
                <input type="radio"  name="radio10" v-model ="post_exodoncia" >
                <label class="formlario__label_R" for="negro">No</label>
            </div>
            <label class="formlario__label_F" for="texto">¿Tuvo alguna complicacion post-Exodoncia?</label>

            <div class="formulario__input_R">
                <input type="radio"  name="radio11" v-model ="anticonceptivos" checked>
                <label class="formlario__label_R" for="blanco">Si</label>
                <input type="radio"  name="radio11" v-model ="anticonceptivos" >
                <label class="formlario__label_R" for="negro">No</label>
            </div>
            <label class="formlario__label_F" for="texto">¿Toma anticonceptivos?</label>

            <div class="formulario__input_R">
                <input type="radio"  name="radio12" v-model ="asma" checked>
                <label class="formlario__label_R" for="blanco">Si</label>
                <input type="radio"  name="radio12" v-model ="asma" >
                <label class="formlario__label_R" for="negro">No</label>
            </div>
            <label class="formlario__label_F" for="texto">¿Asma?</label>

            <div class="formulario__input_R">
                <input type="radio"  name="radio13" v-model ="epilepsia" checked>
                <label class="formlario__label_R" for="blanco">Si</label>
                <input type="radio"  name="radio13" v-model ="epilepsia" >
                <label class="formlario__label_R" for="negro">No</label>
            </div>
            <label class="formlario__label_F" for="texto">¿Epilepsia?</label>

            <div class="formulario__input_R">
                <input type="radio"  name="radio14" v-model ="renal" checked>
                <label class="formlario__label_R" for="blanco">Si</label>
                <input type="radio"  name="radio14" v-model ="renal" >
                <label class="formlario__label_R" for="negro">No</label>
            </div>
            <label class="formlario__label_F" for="texto">¿Enfermedad renal?</label>

            <div class="formulario__input_R">
                <input type="radio"  name="radio15" v-model ="chagas" checked>
                <label class="formlario__label_R" for="blanco">Si</label>
                <input type="radio"  name="radio15" v-model ="chagas" >
                <label class="formlario__label_R" for="negro">No</label>
            </div>
            <label class="formlario__label_F" for="texto">¿Chagas?</label>

            <div class="formulario__input_R">
                <input type="radio"  name="radio16" v-model ="diabetes" checked>
                <label class="formlario__label_R" for="blanco">Si</label>
                <input type="radio"  name="radio16" v-model ="diabetes" >
                <label class="formlario__label_R" for="negro">No</label>
            </div>
            <label class="formlario__label_F" for="texto">¿Diabetes?</label>

            <div class="formulario__input_R">
                <input type="radio"  name="radio17" v-model ="sida" checked>
                <label class="formlario__label_R" for="blanco">Si</label>
                <input type="radio"  name="radio17" v-model ="sida" >
                <label class="formlario__label_R" for="negro">No</label>
            </div>
            <label class="formlario__label_F" for="texto">¿Sida-VIH?</label>

            <div class="formulario__input_R">
                <input type="radio"  name="radio18" v-model ="leusemia" checked>
                <label class="formlario__label_R" for="blanco">Si</label>
                <input type="radio"  name="radio18" v-model ="leusemia" >
                <label class="formlario__label_R" for="negro">No</label>
            </div>
            <label class="formlario__label_F" for="texto">¿Leusemia?</label>

            <div class="formulario__input_R">
                <input type="radio"  name="radio19" v-model ="osteoporosis" checked>
                <label class="formlario__label_R" for="blanco">Si</label>
                <input type="radio"  name="radio19" v-model ="osteoporosis" >
                <label class="formlario__label_R" for="negro">No</label>
            </div>
            <label class="formlario__label_F" for="texto">¿Osteoporosis?</label>

            <div class="formulario__input_R">
                <input type="radio"  name="radio20" v-model ="hemofilia" checked>
                <label class="formlario__label_R" for="blanco">Si</label>
                <input type="radio"  name="radio20" v-model ="hemofilia" >
                <label class="formlario__label_R" for="negro">No</label>
            </div>
            <label class="formlario__label_F" for="texto">¿Hemofilia?</label>

            <div class="formulario__input_R">
                <input type="radio"  name="radio21" v-model ="herpes" checked>
                <label class="formlario__label_R" for="blanco">Si</label>
                <input type="radio"  name="radio21" v-model ="herpes" >
                <label class="formlario__label_R" for="negro">No</label>
            </div>
            <label class="formlario__label_F" for="texto">¿Herpes Zoster?</label>

            <div class="formulario__input_R">
                <input type="radio"  name="radio22" v-model ="cancer" checked>
                <label class="formlario__label_R" for="blanco">Si</label>
                <input type="radio"  name="radio22" v-model ="cancer" >
                <label class="formlario__label_R" for="negro">No</label>
            </div>
            <label class="formlario__label_F" for="texto">Cancer</label>

            <input class="formulario__input" type="text" name="talla" v-model ="comentario" required>
            <label class="formlario__label" for="texto">Comentario: </label>

            <input  class="formlario__submit" type="submit" value="Agregar" v-on:click="GuardarAPatologicos"/>

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