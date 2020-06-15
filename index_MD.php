<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mineria de Datos</title>
</head>
<style>
    *{
        margin: 0;
        padding: 0;

    }
    body{
        justify-content: center;
        align-items: center;
        width: 100%;
        height: 100vh;
    }
    .MD_todo{
        top: 15vh;
        right: -20%;
        width: 1000px;
        height: 500px;
        display: grid;
        position: relative;
    }
    .MD_titulo{
        /*display: flex;*/
        /*////arriba-izquierda-abajo-derecha*/
        position: relative;
        width: 100%;
        height: 80px;
        /*display: flex;*/
    }
    .MD_titulo h2{
        text-align: center;
        position: relative;
        color: red;

    }
    .MD_Stitulo{
        /*display: flex;*/
        /*////arriba-izquierda-abajo-derecha*/
        position: relative;
        width: 100%;
        height: 40px;
        /*display: flex;*/
    }
    .MD_Stitulo h3{
        margin: 10px;
        color: darkred;

    }
    .MD_separacion{
        /*display: flex;*/
        /*////arriba-izquierda-abajo-derecha*/
        position: relative;
        width: 100%;
        height: 300px;
        /*display: flex;*/
    }
    .MD_separacion p{
        margin: 10px;
        text-align: justify;
    }
    .MD_Res{
        /*display: flex;*/
        /*////arriba-izquierda-abajo-derecha*/
        position: relative;
        width: 100%;
        height: 90px;
        /*display: flex;*/
    }
    .MD_Res  p{
        margin: 10px;
        text-align: justify;
    }
</style>

<body>
<div class="MD_todo">
    <div class="MD_titulo"><h2>Analisis de Sentimiento</h2></div>
    <div class="MD_Stitulo"><h3>Articulo</h3></div>
    <div class="MD_separacion"><p>El mundo mira hoy, con preocupación y temor, la evolución de la situación en China, donde a finales del año 2019 se registró un aumento de pacientes con infección respiratoria infectados por un nuevo coronavirus, localizado en la ciudad de Wuhan.
            La aparición de una nueva enfermedad infecciosa supone siempre una situación compleja, especialmente si lo hace como una epidemia de extensión o gravedad significativas. Los casos aumentaron rápidamente en Wuhan y en la provincia de Hubei, extendiéndose en menor número y con cadenas de transmisión limitadas por toda China. Hay casos importados y casos secundarios en más de 24 países. El 30 de enero de 2020 la OMS declaró esta epidemia como una Emergencia de Salud Pública de Interés Internacional.
            El virus ha sido identificado y secuenciado genéticamente1. Está relacionado con otros coronavirus que circulan entre los murciélagos (incluyendo el SARS coronavirus), por lo que se considera que su reservorio natural más probable son estos mamíferos voladores. El huésped intermediario, probablemente otro mamífero, no ha sido identificado aún. El punto de contacto con los seres humanos pudo ser un mercado de animales vivos de Wuhan, hoy clausurado2,3.
            Es posible que durante varias semanas este virus pasara desapercibido, en una ciudad de 11 millones de habitantes y al inicio de la temporada estacional de gripe, hasta que se dio la alerta por el aumento de casos graves (neumonía), y se logró aislar e identificar el coronavirus en varios pacientes. El salto ocasional de un virus de un animal al hombre (spillover) es habitual entre los coronavirus. Así sucedió con el SARS en 2002-2003 y con el MERS desde 2012. Está demostrado que el se transmite de forma eficiente de persona a persona, habiéndose identificado agrupaciones de casos intrafamiliares y de transmisión a personal sanitario.</p></div>
    <div class="MD_Stitulo"><h3>La respuesta del analisi de sentimiento es:  </h3></div>
    <div class="MD_Res"><p>
            Precisión positiva = 0.0% via 1 ejemplos<br>
            Precisión negativa = 100.0% via 1 ejemplos<br>
            Sentiment(polarity=-0.07652236652236652, subjectivity=0.45423160173160165) <br><br>Esto quiere decir que el articulo tiene un impacto negativa ya que la polaridad es negativa</p></div>


</div>
</body>
</html>