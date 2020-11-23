<?php
  include_once('./Pizza.php');

  class PizzaBaseTomate extends Pizza {

    public function __construct($nom, $listeIngredients, $prix) {
      parent::__construct($nom, $listeIngredients, $prix);
      $this->listeIngredients = array_merge(array('base tomate'), $this->listeIngredients);
    }

    public function display(){
      echo '<div style="color: red;">';
      
      parent::display();
      
      echo '</div>';
    }
  }
