<?php
  include('./PizzaBaseTomate.php');
  include('./PizzaBaseCremeFraiche.php');

  class Menu {
    private $listePizzaTomate;
    private $listePizzaCremeFraiche;

    public function __construct($listePizza) {
      $this->setListePizza($listePizza);
    }

    // setter qui me permet de remplir listePizzaTomate et listePizzaCremeFraiche
    // à partir d'une seule variable (il va regarder le type de chacun des éléments pour 
    // les répartir au bon endroit)
    public function setListePizza ($listePizza) {
      foreach($listePizza as $pizza) {
        $typePizza = get_class($pizza);
        switch($typePizza){
          // si l'élément courant est à base de tomate
          case 'PizzaBaseTomate':
            // je l'ajoute à mon tableau de pizza à base de tomate
            $this->listePizzaTomate[] = $pizza;
          break;
          // si l'élément courant est à base de creme fraiche
          case 'PizzaBaseCremeFraiche':
            // je l'ajoute à mon tableau de pizza à base de creme fraiche
            $this->listePizzaCremeFraiche[] = $pizza;
          break;
          default:
          break;
        }
      }
    }

    public function display () {
      echo '<h1>Pizzas base tomate</h1>';
      $this->displayListPizza($this->listePizzaTomate);
      echo '<h1>Pizzas base crème fraîche</h1>';
      $this->displayListPizza($this->listePizzaCremeFraiche);
    }

    private function displayListPizza ($listePizza) {
      foreach($listePizza as $pizza) {
        if (get_class($pizza) == 'PizzaBaseTomate' || get_class($pizza) == 'PizzaBaseCremeFraiche') {
          $pizza->display();
        }
      }
    }
  }
