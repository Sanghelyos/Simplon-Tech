<!doctype html>

<head>
    <meta charset="utf-8">
    <title>Simplon-Tech</title>
    <link rel="stylesheet" type="text/css" href="css/reset.css">
    <link rel="stylesheet" type="text/css" href="css/style-global.css">
    <link rel="stylesheet" type="text/css" href="css/style-catalogue.css">
    <link href="https://fonts.googleapis.com/css?family=Abel&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js" type="text/javascript"
        type="text/javascript"></script>
    <link rel="stylesheet" href="css/prettyPhoto.css" type="text/css" media="screen" title="prettyPhoto main stylesheet"
        charset="utf-8" />
    <script src="js/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>
</head>

<body>
    <?php
    include 'headernavbar.php';
    include 'products.php';
    include 'footer.php';
    ?>
    <!--<script src="js/scripts.js"></script>-->
    <script type="text/javascript" charset="utf-8">
               $(document).ready(function(){
                 $("a[rel^='prettyPhoto']").prettyPhoto({social_tools:''});
               });
             </script>
</body>

</html>