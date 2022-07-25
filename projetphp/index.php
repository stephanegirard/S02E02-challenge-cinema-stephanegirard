<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon projet HTML</title>
</head>
<body>
    <?php

        // 0- Je suis parti d'une structure de fichiers HTML
        //    que je vais rendre dynamique grâce à PHP
        // 1- J'ai renommé mes fichiers HTML, en PHP
        // 2- J'ai factorisé les parties qui se répètent
        //    dans les différents fichiers (par exemple la navigation)
        //    pour n'avoir à modifier qu'une seule fois les liens
        //    dans mes pages
        // 3- J'utilise la directive include pour inclure une partie
        //    de mon site, dans toutes les pages de mon site.
        // 4- J'ai maintenant un site plus facilement maintenable.

        // On factorise le fichier de navigation
        // nav.php
        include "nav.php";

        $montitre = "Mon projet PHP";

        // si is3D est vrai
        if($is3D == true) {
            // alors, exécuter le bloc de code suivant
            
        }
    ?>
    <h1><?php echo $montitre; ?></h1>
</body>
</html>