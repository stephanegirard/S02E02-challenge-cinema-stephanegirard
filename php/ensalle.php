<?php
    require_once "template/header.php";
?>

<main class="main-container">
<section>

    <?php 

        // On défini un tableau de films

        $films = [
            "Harry Potter à l'école des sorciers",
            "Divergente",
            "Ace Ventura",
            "Wayne's World",
            "Le cinquième élément",
            "Un sixième élément"
        ];

        //var_dump($films);
    
    ?>

    <h2 class="page__title">Page en salle</h2>

    <h3>Voici la liste des films : </h3>

    <ul>

    <?php
        // On veut utiliser une boucle for pour
        // parcourir le tableau et afficher les films

        // for(condition initiale;condition finale; pas de la boucle)
        // définir une variable qui va nous permettre
        // de faire défiler un indice de tableau

        // la variable $indice peut être nommée comme
        // vous le souhaitez (count, i, etc.) !

for ($indice = 0; $indice < 6; $indice ++) {
    //var_dump($indice);

    // par contre comment le for comprend que
    // c'est le tableau précédent qu'il faut prendre ?
            
    // Ici on parcours 6 fois la boucle,
    // On veut donc pouvoir récupérer à chaque passage
    // la valeur comprise dans la case qu'on est en train
    // de parcourir

    // Par exemple, $indice = 0
    // Pour récupérer la valeur du film à la case 0
    // $titre = $films[$indice]

    //var_dump($films[$indice]);?>

    <?php echo "<li>".$films[$indice]."</li>"; ?>

    <?php
        }
    ?>

    </ul>

</section>
<section>
    <?php 

        // On définit un tableau de salles

        $salles = [
            "Athéna",
            "Dyonisos",
            "Hadès",
            "Zeus"
        ];
    ?>
        <h3>Salles</h3>
    
    <ul>
    <?php
        for ($ind = 0; $ind < 4; $ind ++) {
            ?>
    
            <?php echo "<li>".$salles[$ind]."</li>"; ?>

            <?php
                }
            ?>
        
            </ul>
        
        </section>
        

    
</section>
</main>

<?php
    require_once "template/footer.php";
?>