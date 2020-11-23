<?php
  class Pizza {
    // on protège les attributs autant que possible, on privilégie le private au maximum
    // et protected quand on veut que l'attribut soit aussi accessible par les enfants
    private $nom;
    protected $listeIngredients = array();
    private $prix;
    private $taille;
    private $paramParDefaut = 'mon param par défaut';

    public function __construct ($nom, $listeIngredients, $prix) {
      $this->setNom($nom);
      $this->setListeIngredients(array_merge($this->listeIngredients, $listeIngredients));
      // au lieu de :
      // $this->listeIngredients = array_merge($this->listeIngredients, $listeIngredients);
      // if (count($$this->listeIngredients) > 10) {
      //   $this->taille = 'XXL';
      // } else {
      //   $this->taille = 'S';
      // }
      $this->prix = $prix;
    }

    public function display() {
      echo '<b>'.$this->getNom().'</b><br>';
      echo $this->getPrix().'<br>';
      echo $this->taille.'<br>';
      echo '<ul>';
      foreach ($this->listeIngredients as $ingredient) {
        echo '<li>'.$ingredient.'</li>';
      }
      echo '</ul>';
    }
    
    // les getters et les setters
    // ils sont créés quand on a besoin de récupérer la valeur ou la modifier d'un attribut
    // en dehors de la classe
    // getters : toute fonction qui renvoie un attribut sous une forme ou sous une autre (brute, ou formattée)
    // par convention, un getter commence par get, suivi du nom de l'attribut à récupérer
    // setters : toute fonction qui affecte une valeur à un ou plusieurs attributs
    // par convention un setter commence par set, suivi du nom de l'attribut à modifier

    // getter simple (renvoi de valeur brute)
    public function getListeIngredients () {
      return $this->listeIngredients;
    }
    
    // getter plus complexe (formate la donnée avant de la renvoyer)
    public function getPrix () {
      return $this->prix.' $';
    }
    
    public function getNom () {
      return $this->nom;
    }

    // setter simple (affection d'une valeur d'un seul attribut)
    // affection : $nomVariable = 'valeur'
    public function setNom ($nom) {
      $this->nom = $nom;
    }

    // setter plus complexe (modifie la valeur de 2 attributs)
    public function setListeIngredients ($listeIngredients) {
      $this->listeIngredients = $listeIngredients;

      $this->setTaille($listeIngredients);
    }

    // setter plus complexe
    public function setTaille ($listeIngredients) {
      if (count($listeIngredients) > 10) {
        $this->taille = 'XXL';
      } else {
        $this->taille = 'S';
      }
    }
  }
  