<?php
  $plateau = array(
//         0  1  2  3  4
    array( 0, 0, 0, 0, 0 ), // 0
    array( 0, 1, 1, 0, 0 ), // 1
    array( 0, 0, 1, 0, 0 ), // 2
    array( 0, 0, 0, 0, 0 ), // 3
    array( 0, 0, 0, 0, 0 )  // 4
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

  // $tableau_exemple = [
  //   [ (numColonne - 1, numLigne - 1), (numColonne, numLigne - 1), (numColonne + 1, numLigne - 1) ],
  //   [ (numColonne - 1, numLigne),     (numColonne, numLigne),     (numColonne + 1, numLigne) ],
  //   [ (numColonne - 1, numLigne + 1), (numColonne, numLigne + 1), (numColonne + 1, numLigne + 1) ],
  // ]


  function getNbVoisinsVivants ($numColonne, $numLigne, $plateau) {
    
    return $nbVoisinVivants;
  }

  // troisième exercice : écrire une fonction qui pour une position donnée et un tableau donné 
  // retourne l'état prochain de la celulle à cette position

  // quatrième exercice : afficher le nouvel état du tableau


