<?php
  class Pizza {
    private $nom;
    protected $listeIngredients = array();
    private $prix;
    private $taille;

    public function __construct ($nom, $listeIngredients, $prix, $taille) {
      $this->nom = $nom;
      $this->listeIngredients = array_merge($this->listeIngredients, $listeIngredients);
      $this->prix = $prix;
      $this->taille = $taille;
    }

    public function display() {
      echo '<b>'.$this->nom.'</b><br>';
      echo $this->prix.' €<br>';
      echo $this->taille.'<br>';
      echo '<ul>';
      foreach ($this->listeIngredients as $ingredient) {
        echo '<li>'.$ingredient.'</li>';
      }
      echo '</ul>';
    }
  }


  $pizza = new Pizza('reine', array('jambon', 'fromage'), 12, 'XXL');
  $pizza->display();