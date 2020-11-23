<?php
  class Restaurant {
    private $nom;
    private $menu;

    public function __construct($nom, $menu) {
      $this->nom = $nom;
      $this->menu = $menu;
    }

    public function afficheMenu() {
      echo 'Voici le menu mon cher client :<br>';
      $this->menu->display();
    }

    public function getNom() {
      return $this->nom;
    }
  }