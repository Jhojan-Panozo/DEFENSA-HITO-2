<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<center><h3>Formulario</h3>
<form>
    <label for="texto">Entrada de texto</label>
    <input id="texto" type="text" placeholder="entrada de texto" value="Jhojan" readonly required>
    <br>
    <label for="correo">Entrada de texto</label>
    <input id="correo" type="email" placeholder="entrada de correo" value="" required>
    <br>
    <label for="pass">Entrada de texto</label>
    <input id="pass" type="password" placeholder="entrada de contraseña" value="" required>
    <br>
    <label >Entrada de texto</label>
    <input type="number" value="1" min="0" max="3" >
    <br>
    <label >Entrada de texto</label>
    <select>
        <option>Option 1</option>
        <option>Option 2</option>
        <option>Option 3</option>
    </select>
    <br>
    <input type="checkbox" id="rojo"><label for="rojo">Rojo</label>
    <input type="checkbox" id="amarillo"><label for="amarillo">amarillo</label>
    <input type="checkbox" id="verde"><label for="verde">verde</label>
    <br>
    <input type="radio" id="blanco" name="radio" checked><label for="blanco">blanco</label>
    <input type="radio" id="negro" name="radio"><label for="negro">negro</label>
    <br>
    <input type="submit" value="Enviar Formulario">

</form></center>




<header>
    <div id="logotipo">Logotipo</div>
</header>
<nav>Cabezote</nav>
<section>Barra Navegador</section>

<aside>
<div class="noticias">Noticia 1</div>
<div class="noticias">Noticia 2</div>
<div class="noticias">Noticia 3</div>
</aside>

<article>Columna</article>
<h1>Titulo</h1>
<p>Esto es <b>parrafo</b>, <br>Esto es un salgo de linea,como estas</p>
<hr>
<a href="#">vinculo</a>

<hr>
<figure>
    <img src="img/images.jpg">
</figure>
<figcaption>Pie de pagina</figcaption>

<ol>
    <li>Animal1</li>
    <li>Animal2</li>
    <li>Animal3</li>
</ol>
<ul>
    <li>Animal1</li>
    <li>Animal2</li>
    <li>Animal3</li>
</ul>

<table border="1" bgcolor="#a52a2a">
    <thead>
    <tr>
        <th>Mes</th>
        <th>Ahorro</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <th>Enero</th>
        <th>100</th>
    </tr>
    <tr>
        <th>Febrero</th>
        <th>100</th>
    </tr>
    </tbody>
</table>

<h1>Resultados del examen</h1>
<p>Carlos: <meter value="91" min="0" max="100" high="90"></meter> </p>
<p>Andres: <meter value="60" min="0" max="100" high="90"></meter> </p>
<p>Roberto: <meter value="85" min="0" max="100" high="90"></meter> </p>

<h1>Resultados de ventas</h1>
<p>Enero: <progress value="91" min="0" max="100" ></progress> </p>
<p>Febrero: <progress value="60" min="0" max="100" ></progress> </p>

<video autoplay controls loop width="500" height="300">
<!--    OGG-->
<!--    MP4-->
<!--    WEBM-->
<!--    URL CONVERTIDOR https://www.online-convert.com/-->

    <source src="Video/Sea%20-%204006.mp4" type="video/mp4">
    <source src="Video/Sea%20-%204006.webm" type="video/webm">

</video>

<iframe width="500" height="300" src="https://www.youtube.com/embed/unEHw8Oy9zw" frameborder="0" allowfullscreen></iframe>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1903.237936483338!2d-66.12223570109734!3d-17.436923116543035!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x93e375b6aced9a0d%3A0x6b42059dbc6ccbf1!2sAv%20Los%20Angeles%2C%20Cochabamba!5e0!3m2!1ses-419!2sbo!4v1584895048669!5m2!1ses-419!2sbo" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>


<footer>Este es el pie de pagina</footer>

</body>
</html>
