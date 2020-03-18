<!doctype html>

<head>
    <meta charset="utf-8">
    <title>Simplon-Tech</title>
    <link rel="stylesheet" type="text/css" href="css/reset.css">
    <link rel="stylesheet" type="text/css" href="css/style-global.css">
    <link rel="stylesheet" type="text/css" href="css/style-contact.css">
    <link href="https://fonts.googleapis.com/css?family=Abel&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/scrollreveal"></script>

</head>

<body>
    <?php
    include 'headernavbar.php';
    ?>
    <section class="home-text">
        <div class="home-text-title headline">
            <p class="home-text-title-sec">Intéressé par l’un de nos produits ?</p>
            <p class="home-text-title-sec">Une question vous viens à l’esprit ?</p>
            <p class="home-text-title-sec">Alors n’hésitez pas à nous contacter via le formulaire ci dessous.</p>
        </div>
    </section>
    <section class="formulaire headline">
    <form action="contact.php">
    <div>
    <input style="margin-right: 50px;" type="text" id="fname" name="firstname" placeholder="Prénom">

    <input type="text" id="lname" name="lastname" placeholder="Nom">
    </div>
    <input type="text" id="email" name="mail" placeholder="Adresse mail"><br>
    <input type="text" id="tel" name="telephone" placeholder="Téléphone (optionnel)">

    <textarea id="message" name="msg" placeholder="Message" style="height:200px"></textarea>

    <input type="submit" value="Envoyer">
  </form>
    </section>
    <?php
        if( !empty($_POST['mail']) && !empty($_POST['msg']) && !empty($_POST['lastname']) && !empty($_POST['firstname']) )
        {
            $from = $_POST['mail'];

            $tel = $_POST['telephone'];

            $lname = $_POST['lastname'];

            $fname = $_POST['firstname'];
 
            $to = 'pecheux@simplon-charleville.fr';
         
            $message =  $_POST['lastname'] ."<br>".$_POST['firstname'] ."<br>". $_POST['telephone'] ."<br>". $_POST['msg'];
         
            $headers = "De:" . $_POST['mail'];
         
            mail($to, "Simplon-Tech Contact", $message, $headers);
            echo '<div>Votre message a bien été envoyé !</div>';
        }
 ?>
<div id="map-edit">
<div id="map"></div>
<!-- Replace the value of the key parameter with your own API key. -->

    <?php
    
    include 'footer.php';
    
    ?>
    <script src="js/reveal.js"></script>
    <script src="js/map.js"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAWKzDMlh4vSUxC4DBZ89izeUZyegv1wCI&callback=initMap"></script>
</body>

</html>