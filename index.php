<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="templates/style.css">
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
    <script src="lib/fa.js"></script>
</head>
<body>
    <?php
        include "templates/header.php";
    ?>
    <div id="mainContent">
        <div class="article">
            <div class="contenu">
                <h2>EXPÉRIENCES PROFESSIONELLES</h2>
                <ul>
                    <li>Avril 2020 : Stage en entreprise - Entreprise</li>
                    <li class="desc">Création d'un site internet sur le thème ... </li>
                </ul>
            </div>
        </div>
    <div class="article">
        <div class="contenu">
            <h2>COMPÉTENCES</h2>
            <ul>
                <li>Analyser les besoins spécifiés par un cahier des charges</li>
                <li>Rédiger les lignes de codes nécessaires à la création d’un produit web</li>
                <li>Appliquer les règles de navigation, créer des liens entre les pages</li>
                <li>Développer les interfaces</li>
                <li>Corriger et optimiser les fonctionnalités</li>
                <li>Assurer les corrections suite aux problèmes soulevés (bugs)</li>
                <li>Prendre en compte les évolutions des solutions techniques existantes</li>
            </ul>
        </div>

    </div>
    <div class="article">
        <div class="contenu">
            <h2>LANGUAGES</h2>
            <div id="logoBlock">
                <i class="fab fa-html5"></i>
                <i class="fab fa-css3-alt"></i>
                <i class="fab fa-js-square"></i>
                <i class="fab fa-php"></i>
                <i class="fab fa-bootstrap"></i>
            </div>
        </div>


    </div>
    <div class="article">
        <div class="contenu">
            <h2>FORMATION</h2>
            <ul>
                <li>Octobre 2019 - Mai 2020</li>
                <li class="desc">UPTO Fourmies - Formation développeur web et mobile</li>
            </ul>
        </div>
    </div>
    <div class="article">
        <div class="contenu">
            <h2>CONTACT</h2>
            <form action="form.php" method="post">
                <label for="nom">Nom</label><input type="text" id="nom" name="nom"><br>
                <label for="prenom">Prénom</label><input type="text" id="prenom" name="prenom"><br>
                <label for="mail">Mail</label><input type="email" id="mail" name="mail"><br>
                <label for="text">Remarques complémentaires</label><textarea id="text" name="texte"></textarea>
                <input type="submit">
            </form>

        </div>
    </div>
</div>
    <?php
        include "templates/footer.php";
    ?>

</body>
</html>