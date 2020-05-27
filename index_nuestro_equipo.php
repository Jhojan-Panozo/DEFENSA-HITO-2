<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="css/swiper.min.css" type="text/css" rel="stylesheet" media="">
    <link rel="stylesheet" href="css/style.cambia.equipo.css" type="text/css" rel="stylesheet" media="">


    <link rel="stylesheet" href="css/style-equipo-trabajo.css" type="text/css" rel="stylesheet" media="">

    <link rel="stylesheet" href="css/style-footer.css" type="text/css" rel="stylesheet" media="">
    <link rel="stylesheet" href="css/menu_arriba.css" type="text/css" rel="stylesheet" media="">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>


    <title>Nuestro Equipo</title>
</head>
<!--////////////////////////////////////////////////////////////////////////////////////////////////-->
<header>
    <div class="nav1">
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="fas fa-bars"></i>
        </label>
        <label class="logo">Clinica Odontologica</label>
        <ul>
            <li><a href="index_inicio.php">Inicio</a></li>
            <li><a href="#">Acerca de</a></li>
            <li><a href="index_nuestro_equipo.php">Nuestro equipo</a></li>
            <li><a href="Index_Loguin.php">Sesion</a></li>
        </ul>
    </div>

<!--    <div id="logo">DENTISTA</div>-->
<!--    <div id="opcion1" class="Menu">Testimonios</div>-->
<!--    <div id="opcion2" class="Menu">Nuestro equipo</div>-->
<!--    <div id="opcion3" class="Menu">Acerca de</div>-->
<!--    <div id="opcion4" class="Menu">Inicio</div>-->
</header>
<!--////////////////////////////////////////////////////////////////////////////////////////////////-->
<nav>
    <div id="fondo1"></div>
    <div id="titulo"><h1 id="ti3">FAMILIA DENTAL</h1></div>

    <!-- Swiper -->
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="imgBx">
                    <img src="img/Dent15.jpg">
                </div>
                <div class="details">
                    <h3>Dr.Jhojan Panozo<br><span>Jefe de cirugia</span></h3>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="imgBx">
                    <img src="img/Dent17.jpg">
                </div>
                <div class="details">
                    <h3>Dr.Jhojan Panozo<br><span>Jefe de cirugia</span></h3>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="imgBx">
                    <img src="img/img22.jpg">
                </div>
                <div class="details">
                    <h3>Dr.Jhojan Panozo<br><span>Jefe de cirugia</span></h3>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="imgBx">
                    <img src="img/Den11.png">
                </div>
                <div class="details">
                    <h3>Dr.Jhojan Panozo<br><span>Jefe de cirugia</span></h3>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="imgBx">
                    <img src="img/img23.jpg">
                </div>
                <div class="details">
                    <h3>Dr.Jhojan Panozo<br><span>Jefe de cirugia</span></h3>
                </div>
            </div>
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
    </div>

    <!-- Swiper JS -->

    <script type="text/javascript" src="Js/swiper.min.js"></script>
    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper('.swiper-container', {
            effect: 'coverflow',
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: 'auto',
            coverflowEffect: {
                rotate: 60,
                stretch: 0,
                depth: 350,
                modifier: 1,
                slideShadows : true,
            },
            pagination: {
                el: '.swiper-pagination',
            },
        });
    </script>
</nav>
<!--////////////////////////////////////////////////////////////////////////////////////////////////-->
<body>
<div class="idnav">

    <div class="Perfil-profecional">
        <div id="fondo2"></div>
        <h2 class="Titulo-Perfil">Perfil Profecional</h2>
        <p class="Parrafo-Perfil">Es un profesional con vocación de servicio a la comunidad, Competencia científica y liderazgo social, capaz de desempeñarse en cualquiera de las áreas de la odontología; trabaja en su consultorio particular o en una institución, en investigación, docencia y/o administración y proyección social, bajo un enfoque crítico, analítico, creativo y propositivo, capaz de trabajar en equipos multi, inter y transdisciplinarios, haciendo uso eficiente de las tecnologías de la información y comunicación, dentro del marco del respeto en una praxis ética, apegada a normas y principios legales, morales y de bioseguridad, brindando una atención odontológica integral con calidez, respeto y empatía.</p>
    </div>
    <div class="Perfil-profecional1">
        <div class="Vision">
            <h2 class="Titulo-Perfil1">Vision</h2>
            <p class="Parrafo-Perfil">UNIFRANZ forma profesionales Odontólogos emprendedores, creativos y sensibles a la realidad social del entorno donde se desempeñan; la Carrera se caracteriza por la excelencia académica en el campo de la salud oral, aportando significativamente al desarrollo humano, científico y tecnológico de la salud del sistema estomatognático. Promueve permanentemente la innovación e investigación, participando activamente en proyectos de colaboración con universidades extranjeras e instituciones regionales afines al campo de la especialidad.</p>
        </div>
        <div class="fondo3"></div>
    </div>
    <div class="Perfil-profecional2">
        <div class="Mision">
            <h2 class="Titulo-Perfil1">Mision</h2>
            <p class="Parrafo-Perfil">La Carrera de Odontología pretende formar profesionales en el área de la salud, con dominio de las Competencias que hacen a un profesional altamente capacitado, con profundos valores éticos y morales, con un desempeño óptimo en el sector público y privado y con la capacidad de mejoramiento continuo acorde al constante desarrollo de la ciencia y la tecnología.</p>
        </div>
        <div id="fondo4"></div>
    </div>
</div>

</body>

<!--//////////////////////////////////////////////////////////////////////////////////////-->
<footer class="footer1">
    <div class="footer-top">
        <div class="col-lg-4 col-md-6 footer-info">
            <h3>Web Odontology</h3>
            <p>adsf asd asldkjfa hja dsfjh aslh als dlkasdhf jahfd
                asdlfkj has ldfjhasdkjhf alsf
                adfkjhas flajksdhf aasd asd a sdas das das dadsa </p>
        </div>
        <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <div class="border"></div>
            <ul>
                <li><a href="#">Inicio</a></li>
                <li><a href="#">Nuestro Equipo</a></li>
                <li><a href="#">Sesion</a></li>
            </ul>
        </div>
        <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contact Usuario</h4>
            <div class="border"></div>
            <ul>
                <li><i class="fa fa-map-marker" aria-hidden="true"></i>  Av.Santa Cruz y calle.Hercules</li>
                <li><i class="fa fa-phone" aria-hidden="true"></i> 65509404-4757145</li>
                <li><i class="fa fa-envelope" aria-hidden="true"></i> anngelito.l@gmail.com</li>
            </ul>
            <div class="social-links">
                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-whatsapp" aria-hidden="true"></i></a>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                &copy; Copyright<strong>WebsiteName</strong>.All Right Reserved
            </div>
            <div class="credits">
                Designed by<a href="#">WebsiteName</a>
            </div>
        </div>
    </div>
</footer>
</html>