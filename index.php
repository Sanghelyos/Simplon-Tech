<!doctype html>

<head>
    <meta charset="utf-8">
    <title>Simplon-Tech</title>
    <link rel="stylesheet" type="text/css" href="css/reset.css">
    <link rel="stylesheet" type="text/css" href="css/style-global.css">
    <link rel="stylesheet" type="text/css" href="css/style-home.css">
    <!-- LOAD JQUERY LIBRARY -->
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.js"></script>

    <!-- LOADING FONTS AND ICONS -->
    <link href="https://fonts.googleapis.com/css?family=Abel&display=swap" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Raleway%3A800%2C500%2C400" rel="stylesheet" property="stylesheet"
        type="text/css" media="all" />


    <link rel="stylesheet" type="text/css" href="revolution/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css">
    <link rel="stylesheet" type="text/css" href="revolution/fonts/font-awesome/css/font-awesome.css">

    <!-- REVOLUTION STYLE SHEETS -->
    <link rel="stylesheet" type="text/css" href="revolution/css/settings.css">
    <!-- REVOLUTION LAYERS STYLES -->


    <link rel="stylesheet" type="text/css" href="revolution/css/layers.css">

    <!-- REVOLUTION NAVIGATION STYLES -->
    <link rel="stylesheet" type="text/css" href="revolution/css/navigation.css">

    <!-- REVOLUTION JS FILES -->
    <script type="text/javascript" src="revolution/js/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="revolution/js/jquery.themepunch.revolution.min.js"></script>

    <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
    <script type="text/javascript" src="revolution/js/extensions/revolution.extension.actions.min.js"></script>
    <script type="text/javascript" src="revolution/js/extensions/revolution.extension.carousel.min.js"></script>
    <script type="text/javascript" src="revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script type="text/javascript" src="revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script type="text/javascript" src="revolution/js/extensions/revolution.extension.migration.min.js"></script>
    <script type="text/javascript" src="revolution/js/extensions/revolution.extension.navigation.min.js"></script>
    <script type="text/javascript" src="revolution/js/extensions/revolution.extension.parallax.min.js"></script>
    <script type="text/javascript" src="revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script type="text/javascript" src="revolution/js/extensions/revolution.extension.video.min.js"></script>

</head>

<body>
    <?php
    include 'headernavbar.php';
    ?>

    <section class="slider-home">
        <?php
        include 'slider.php';
        ?>
    </section>

    <section class="home-text">
        <div class="home-text-title">
            <p class="home-text-title-pri">Simplon Tech</p>
            <p class="home-text-title-sec">Achetez simple, achetez Simplon</p>
        </div>
        <div class="home-text-text">
            <p class="home-text-text-pri">Depuis plusieurs années, Simplon Tech propose des gammes d’ordinateurs
                destinés à tous types d’usages. Que ce soit pour jouer aux meilleurs AAA ou à la dernière bouse de
                Bethesda.</p>
            <p class="home-text-text-sec">Les produits de Simplon Tech ne se limitent pas au jeux, nous choisissons les
                meilleurs composants pour vous permettre de travailler dans tous les milieux.</p>
            <p class="home-text-text-ter">Nous avons tout de même ce qu’il vous faut si votre utilisation des
                ordinateurs se limite au traitement de texte.</p>
        </div>

    </section>
    <?php
    include 'footer.php';
    ?>
    <!--<script src="js/scripts.js"></script>-->
</body>

</html>