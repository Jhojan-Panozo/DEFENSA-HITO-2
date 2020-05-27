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


    <title>Document</title>
</head>
<body>
<!-- Swiper -->
<div class="swiper-container">
    <div class="swiper-wrapper">
        <div class="swiper-slide">
            <div class="imgBx">
                <img src="img/inicio.jpg">
            </div>
            <div class="details">
                <h3>Jhonh Doe<br><span>Web desagner</span></h3>
            </div>
        </div>
        <div class="swiper-slide">
            <div class="imgBx">
                <img src="img/background3.jpg">
            </div>
            <div class="details">
                <h3>Jhonh Doe<br><span>Web desagner</span></h3>
            </div>
        </div>
        <div class="swiper-slide">
            <div class="imgBx">
                <img src="img/img22.jpg">
            </div>
            <div class="details">
                <h3>Jhonh Doe<br><span>Web desagner</span></h3>
            </div>
        </div>
        <div class="swiper-slide">
            <div class="imgBx">
                <img src="img/background2.jpg">
            </div>
            <div class="details">
                <h3>Jhonh Doe<br><span>Web desagner</span></h3>
            </div>
        </div>
        <div class="swiper-slide">
            <div class="imgBx">
                <img src="img/img23.jpg">
            </div>
            <div class="details">
                <h3>Jhonh Doe<br><span>Web desagner</span></h3>
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

</body>
</html>