<?php
  class Client {
    private $nom;
    private $prenom;

    public function __construct($nom, $prenom) {
      $this->nom = $nom;
      $this->prenom = $prenom;
    }

    public function allerAuRestaurant($restaurant) {
      echo 'Moi '.$this->prenom.', je vais manger chez '.$restaurant->getNom();
      echo '<br>';
      $restaurant->afficheMenu();
    }
  }