<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="templates/styleForm.css">
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
    <script src="lib/fa.js"></script>
</head>
<body>
<?php
include "templates/header.php";

$nom = $_POST["nom"];
$prenom = $_POST["prenom"];
$mail = $_POST["mail"];
$text = $_POST["texte"];
$sujet = "À propos du CV";
$destination = "yoshi59720@gmail.com";
mail($destination, $sujet, $text);
?>
<div id="mainContent">
<div class="article">
    <div class="contenu">
        <h2>Bonjour <?php echo $nom." ".$prenom ?></h2>
        <h3>Voici les informations que vous venez de me transmettre</h3>
        <ul>
            <li>Votre nom : <?php echo $nom?></li>
            <li>Votre prénom : <?php echo $prenom ?></li>
            <li>Votre mail : <?php echo $mail?></li>
            <li>Votre message : <?php echo $text?></li>
        </ul>
        <h3>Je vous remercie de l'attention portée à ce CV</h3>


    </div>
</div>
</div>




<?php
include "templates/footer.php";
?>
</body>
</html>