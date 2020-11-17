<?php
  $array = [ 19, 34, 10, 2, -7, 1000 ];
  // on compare 19 et 34
  // le plus grand c'est 34

  // on compare 34 et 10
  // le plus grand c'est 34

  // on compare 34 et 2
  // le plus grand c'est 34

  // fin du tableau donc le plus grand c'est 34


  $array2 = [ 19, 34, 10, 2, 99 ];
  // on compare 19 et 34
  // le plus grand c'est 34

  // on compare 34 et 10
  // le plus grand c'est 34

   // on compare 34 et 2
   // le plus grand c'est 34

   // on compare 34 et 99
   // le plus grand c'est 99

   // fin du tableau donc le plus grand c'est 99



  // fonction à ne pas utiliser (donnée à titre d'exemple)
  function maximumAvecIndice ($tableau) {
    $maximumTemporaire = $tableau[0];
    $indexMaxTemporaire = 0;

    foreach($tableau as $key => $elem) {
      if ($elem > $maximumTemporaire) {
        $maximumTemporaire = $elem;
        $indexMaxTemporaire = $key;
      }
    }

    // pour envoyer plusieurs valeurs de retour, il suffit d'utiliser un tableau associatif
    return array('indiceMax' => $indexMaxTemporaire, 'valeurMax' => $maximumTemporaire);
  }











  function valeurMaximum ($tableau) {
  $maximumTemporaire = $tableau[0];

  foreach($tableau as $elem) {
    if ($elem > $maximumTemporaire) {
      $maximumTemporaire = $elem;
    }
  }

  return $maximumTemporaire;
  }

  function indexDuMaximum ($tableau) {
    $maximumTemporaire = $tableau[0];
    $indexTemporaire = 0;
    // pour chacun des éléments du tableau
    foreach($tableau as $key => $elem) {
      // on vérifie si l'élément courant est plus grand que le maximum temporaire
      if ($elem > $maximumTemporaire) {
        // auquel cas, c'est lui le nouveau maximum temporaire, c'est lui qui nous intéresse
        $maximumTemporaire = $elem;
        $indexTemporaire = $key;
      }
    }

    return $indexTemporaire;
  }

  function retireMaxDuTableau ($tableau) {
    $newTableau = array();
    $indexDuMax = indexDuMaximum($tableau);
    
    // pour chacun des éléments du tableau
    foreach($tableau as $key => $elem) {
      // on vérifie si son index est celui du maximum du tableau
      if ($key != $indexDuMax) {
        // si ce n'est pas le cas, on ajoute cet élément à newTableau
        array_push($newTableau, $elem);
      }

    }

    // a la fin, on a un tableau de taille n-1
    return $newTableau;
  }

  function triTableauDecroissant ($tableau) {
    // on récupère le maximum du tableau
    // $maximumTableau = maximum($tableau)['valeurMax'];
    // $tableauTrie = array();

    // // on ajoute dans tableauTrie le plus grand nombre de tableau
    // array_push($tableauTrie, $maximumTableau);

    // // on a un nouveau tableau a trier (tableau privé de son maximum)
    // $newTableauATrier = retireMaxDuTableau($tableau);
    $newTableauATrier = $tableau;
    $tableauTrie = array();
    foreach($tableau as $elem) {

      $maximumTableau = valeurMaximum($newTableauATrier);
      array_push($tableauTrie, $maximumTableau);
      $newTableauATrier = retireMaxDuTableau($newTableauATrier);
    }

    return $tableauTrie;
  }
  echo '<pre> RESULTAT FINAL ';
  var_dump(triTableauDecroissant($array));
  echo '</pre>';
?>