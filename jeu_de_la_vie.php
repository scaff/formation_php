<?php
  $plateau = array(
//         0  1  2  3  4
    array( 0, 0, 0, 0, 0 ), // 0
    array( 0, 1, 1, 0, 0 ), // 1
    array( 0, 1, 1, 0, 0 ), // 2
    array( 0, 1, 1, 0, 0 ), // 3
    array( 0, 0, 1, 0, 0 )  // 4
                            // 5
  );




  // https://fr.wikipedia.org/wiki/Jeu_de_la_vie

  // premier exercice : afficher un plateau de jeu (afficher un tableau à 2 dimensions)

  function afficherTableau ($plateauAAfficher) {
    // pour chaque élément de $plateauAAfficher que j'appelle $ligne
    foreach($plateauAAfficher as $ligne) {
    // pour chaque élément de $ligne que j'appelle $cellule
      foreach($ligne as $cellule) {
        print_r($cellule);
        echo ' ';
      }
      echo '<br>';
    }
  }

  echo 'Affichage du tableau $plateau <br>';
  afficherTableau($plateau);




  // deuxième exercice : écrire une fonction qui pour une position donnée et un tableau donné
  // retourne le nombre de voisin vivants

  // pour la cellule colonne 3, ligne 2, les voisins ont pour coordonnées : 

  // [
  //   [(2 , 1), (3 , 1), (4 , 1)],
  //   [(2 , 2), (3 , 2), (4 , 2)],
  //   [(2 , 3), (3 , 3), (4 , 3)],
  // ]

  // CECI N'EST PAS DU PHP !!!!!
  // $tableau_exemple = [
  //   [ (numColonne - 1, numLigne - 1), (numColonne, numLigne - 1), (numColonne + 1, numLigne - 1) ],
  //   [ (numColonne - 1, numLigne),     (numColonne, numLigne),     (numColonne + 1, numLigne) ],
  //   [ (numColonne - 1, numLigne + 1), (numColonne, numLigne + 1), (numColonne + 1, numLigne + 1) ],
  // ]


  function getNbVoisinsVivants ($numColonne, $numLigne, $plateau) {
    $nbVoisinVivants = 0;

    // on parcourt la liste des lignes voisines qui vont de ligne - 1 à ligne + 1
    for ($ligne = $numLigne - 1; $ligne <= $numLigne + 1; $ligne++) {
      // on parcourt la liste des cellules voisines qui vont de colonne - 1 à colonne + 1
      for ($colonne = $numColonne - 1; $colonne <= $numColonne + 1; $colonne++) {
        // on ne compte pas la cellule du centre
        $isCelluleDuCentre = ($ligne == $numLigne && $colonne == $numColonne);
        
        // on evite de sortir du tableau (si numColonne = 0 & si numColonne > taille du tableau, de même pour numLigne)
        $isBordHaut = ($numLigne <= 0);
        $isBordGauche = ($numColonne <= 0);
        $isBordBas = ($ligne >= count($plateau));
        $isBordDroit = ($colonne >= count($plateau[0]));
        
        if (!($isCelluleDuCentre || $isBordHaut || $isBordGauche || $isBordDroit || $isBordBas)) {
          $nbVoisinVivants = $nbVoisinVivants + $plateau[$ligne][$colonne];
        }
      }
    }

    return $nbVoisinVivants;
  }

  echo getNbVoisinsVivants(0, 2, $plateau);

  // troisième exercice : écrire une fonction qui pour une position donnée et un tableau donné 
  // retourne l'état prochain de la celulle à cette position

  function getCellNextState ($numColonne, $numLigne, $tableau) {
    $nbVoisin = getNbVoisinsVivants ($numColonne, $numLigne, $tableau);

    $sousPopulation = $nbVoisin < 2;
    $surPopulation = $nbVoisin > 3;
    $naissance = $nbVoisin == 3;
    $aucunChangement = $nbVoisin == 2;

    if ($sousPopulation || $surPopulation) {
      return 0;
    }
    if ($naissance) {
      return 1;
    }
    if ($aucunChangement) {
      return $tableau[$numLigne][$numColonne];
    }
  }

  echo '<br> Nouvel etat (2, 3)';
  echo getCellNextState(2, 3, $plateau);

  // quatrième exercice : afficher le nouvel état du tableau


