<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style_diente.css" type="text/css" rel="stylesheet" media="">

    <title>Diente</title>
</head>
<body>
<div class="diente_div" >
    <input type="submit" value="Enviar_0" id="div_md" onclick="enviarTexto('div_md')">
    <input type="submit" value="Enviar_1" id="div_arb" onclick="enviarTexto('div_arb')">
    <input type="submit" value="Enviar_2" id="div_der" onclick="enviarTexto('div_der')">
    <input type="submit" value="Enviar_3" id="div_abj" onclick="enviarTexto('div_abj')">
    <input type="submit" value="Enviar_4" id="div_izq" onclick="enviarTexto('div_izq')">
</div>
<input type="text" value="inputText"  id="inputText"  readonly="readonly">
<br>
<h1 id="lado_diente"></h1>
<br>
<select name="diente_tratamiento" id="tooth" onchange="cambiaColor(this)">
    <option value="red">Rojo</option>
    <option value="blue">Azul</option>
    <option value="green">Verde</option>
</select>
<!--<input type="submit" value="inputText"  id="inputText1"  onclick="colordiente('inputText1')">-->
<!--<input type="submit" value="inputText"  id="inputText1"  onclick="colordiente('inputText1')">-->


<script>
    function enviarTexto(text) {
        var texto=document.getElementById(text).value;
        document.getElementById('inputText').value=texto;
        document.getElementById('lado_diente').textContent=texto;
    }
    function cambiaColor(x) {
        console.log(x.value);

        var toothcolor = document.getElementById('div_md');
        toothcolor.style.backgroundColor =x.value;
    }

</script>



</body>
</html>