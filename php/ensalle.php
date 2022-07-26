<?php
    require_once "template/header.php";
?>

<main class="main-container">
<section>

    <?php 

        $films = [
            "Harry Potter à l'école des sorciers",
            "Divergente",
            "Ace Ventura",
            "Wayne's World",
            "Le cinquième élément",
            "Un sixième élément"
        ];  
    ?>

    <h2 class="page__title">Page en salle</h2>

    <h3>Voici la liste des films : </h3>

    <ul>

        <?php
            
            for ($indice = 0; $indice < 6; $indice ++) {
        ?>

        <?php echo "<li>".$films[$indice]."</li>"; ?>
    </ul>

    <?php
        }
    ?>

    <?php
            // On définit un tableau de salles
        $rooms = [
            'Athéna',
            'Dyonisos',
            'Hadès',
            'Zeus'
        ];
    ?>

    <h3>Voici la liste des salles : </h3>

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

</main>

<?php
    require_once "template/footer.php";
?>