<!-- CODE QUI SE REPETE -->

<?php 
    // Ici du code PHP
    // Je vais faire une inclusion
    // - include
    // - require
    // - require_once
    include "template/header.php";
?>

<!-- FIN DE CODE QUI SE REPETE -->

  <main class="main-container">
    <section>
      <h2 class="page__title">Tarifs</h2>
      <div class="prices__lists">

        <div class="prices__list">
          <h3 class="prices__list-title">
            A l'unité
          </h3>
          <ul>
            <li class="prices__item">
              <span class="prices__item-desc">Tarif Plein</span> <span class="prices__item-value">8,30 &euro;</span>
            </li>
            <li class="prices__item">
              <span class="prices__item-desc">Tarif Réduit</span> <span class="prices__item-value">6,80 &euro;</span>
            </li>
            <li class="prices__item">
              <span class="prices__item-desc">Tarif Enfant</span> <span class="prices__item-value">4,50 &euro;</span>
            </li>
            <li class="prices__item">
              <span class="prices__item-desc">Supplément 3D</span> <span class="prices__item-value">1,00 &euro;</span>
            </li>
          </ul>
        </div>

        <div class="prices__list">
          <h3 class="prices__list-title">
            Abonnement
          </h3>
          <ul>
            <li class="prices__item">
              <span class="prices__item-desc">5 places</span> <span class="prices__item-value">-10%</span>
            </li>
            <li class="prices__item">
              <span class="prices__item-desc">5 places -25ans </span> <span class="prices__item-value">-20%</span>
            </li>
          </ul>
        </div>
      </div>

      <div class="prices__description">
        <p class="prices__description-line">
          <strong class="prices__description-name">Tarif réduit</strong> pour les personnes de + de 60 ans et de moins de 16 ans
        </p>
        <p class="prices__description-line">
          <strong class="prices__description-name">Tarif enfant</strong> pour les - de 14 ans
        </p>
      </div>
    </section>

    <section>
        <?php

        // créer une variable $age avec la valeur 43

        $age = 43;

        // reprendre les conditions écrites dans le challenge
        
        $tarifPlein = 8.3;
        $tarifReduit = 6.8;
        $tarifEnfant = 4.5;

        $montant = 0;

        if($age < 14) {
            $montant = $tarifEnfant;
        } else if($age < 16 || $age > 60) {
            $montant = $tarifReduit;
        } else {
        // } else($age == 60) ne fonctionne pas !
            // si aucune des conditions n'est remplie
            // tous les autres cas !
            $montant = $tarifPlein;
        }

        //afficher l'âge et le tarif
        //var_dump($age);
        //var_dump($montant);
        
        ?>
    </section>



    <section>
      <h2 class="page__title">Tarif du capitaine</h2>

      <div class="prices__list">
        <h3 class="prices__list-title">
          <span class="prices__item-desc">Age</span> <span class="prices__item-value">Tarif unitaire</span>
        </h3>
        <ul>
          <li class="prices__item">
            <span class="prices__item-desc"><?php echo $age; ?> ans</span> <span class="prices__item-value"><?php echo $montant; ?> &euro;</span>
          </li>
        </ul>
      </div>

    </section>

    <section>

      <?php

        // écrire une boucle de 1 à 99
        // for(expr1;expr2;expr3)
        // - expr1 = valeur de départ de la boucle
        // - expr2 = valeur finale
        //    condition qui permet de dire à la boucle
        //    de continuer (l'expression doit renvoyer un booléen vrai/faux)
        // - expr3 = pas de la boucle (ici +1)

        // $i désigne la variable d'indice de la boucle
        // $i => Indice
        

      ?>

      <h2 class="page__title">Tarif âge par âge</h2>
      
      <div class="prices">
        <div class="prices__list">
          <h3 class="prices__list-title">
            <span class="prices__item-desc">Age</span> 
            <span class="prices__item-value">Tarif unitaire</span>
            <span class="prices__item-abo">Tarif abonnement</span>
          </h3>
          <ul>

            <?php 

                // On peut également déinir un tableau qui contient
                // les âges et les montants

                // une nouvelle variable qu'on appelle un tableau (ou array)


                // Un tableau qui contient les ages avec les montants
                // $montants[CLE] = VALEUR;
                // CLE = ?
                // VALEUR = ?
                // montants[age] = montant

                // 

                for ($age=1; $age<=99; $age++) {


                  // pour chaque âge, calculer le tarif de la place, 
                  // avec la réduction de l'abonnemenent
                    // le pourcentage de réduction n'est pas le même selon l'âge
                    // le pourcentage de réduction s'applique sur le tarif plein, 
                    // réduit ou enfant, selon l'âge
                  // générer le code HTML pour afficher le tarif (à droite du tarif du ticket)


                  // Les lignes de codes ci-dessous
                  // seront exécutées 99 fois (voir le contenu de la boucle)

                  $montant = 0;

                  if($age < 14) {
                      $montant = $tarifEnfant;
                  } else if($age < 16 || $age > 60) {
                      $montant = $tarifReduit;
                  } else {
                      // } else($age == 60) ne fonctionne pas !
                      // si aucune des conditions n'est remplie
                      // tous les autres cas !
                      $montant = $tarifPlein;
                  }


                  // Prix abonnement sans réduction = 5 * montant calculé selon l'âge
                  // Si la personne a moins de 25 ans => on va avoir 20% de réduction
                  // Sinon 25ans et plus, on va appliquer 10% de réduction

                  $prixAbonnement = $montant * 5;      
                  
                  $pourcentageReduction = 0;
                  if($age < 25) {
                    $pourcentageReduction = 20;
                  } else {
                    $pourcentageReduction = 10;
                  }

                  $prixTotal = $prixAbonnement - ($prixAbonnement * $pourcentageReduction / 100)

            ?>

            <li class="prices__item">
              <span class="prices__item-desc"><?php echo $age ?> ans</span> 
              <span class="prices__item-value"><?php echo $montant ?> &euro;</span>
              <span class="prices__item"><?php echo $prixTotal ?> &euro;</span>
            </li>

            <?php
                }
            ?>
          </ul>
        </div>
      </div>

    </section>

  </main>

<!-- CODE QUI SE REPETE -->

<?php 
    // Ici du code PHP
    // Je vais faire une inclusion
    // - include
    // - require
    // - require_once
    include "template/footer.php";
?>

<!-- FIN DE CODE QUI SE REPETE -->
