<?php
  class Personne {
    // déclaration des attributs (propriété de la classe)
    private $nom;
    private $prenom;
    private $age;
    private $poid;
    private $taille;
    public $toto = 'test';

    // le constructeur qui permet d'initialiser les attributs à l'instanciation
    // il est appelé quand on fait new NomDeClasse()
    // constructeur non obligatoire
    public function __construct($nom = 'Nom par défaut', $prenom = 'Prénom par défaut', $poid) {
      $this->nom = $nom;
      $this->prenom = $prenom;
      $this->age = 0;
      $this->poid = $poid;
    }
    
    // déclaration des méthodes (fonction de la classe)
    public function sePresenter() {
      $this->parler('Bonjour je m\'appelle '.$this->nom.' '.$this->prenom.'. J\'ai '.$this->age.' ans.<br>');
    }
    public function parler($choseADire) {
      if ($this->age <= 2) {
        echo 'areuh areuh <br>';
      } else {
        echo $choseADire;
      }
    }

    public function manger($poidAManger) {
      echo 'Je mange '.$poidAManger. 'kg<br>';
      $this->poid = $this->poid + $poidAManger;
    }

    // mutateur (ou setter en anglais)
    public function setAge($age) {
      if ($age <= 18) {
        $this->taille = $age * 10;
      } else {
        $this->taille = 180;
      }
      $this->age = $age;
    }
  }

  // on instancie la classe Personne sous la forme de l'objet $aby
  $jean = new Personne('Eude', 'Jean', 5);
  $jean->setAge(12);
  $jean->sePresenter();
  
  echo '<br>';
  echo '<br>';
  $aby = new Personne('Coly', 'Aby', 3);
  var_dump($aby);
  echo '<br>';
  $aby->sePresenter();
  $aby->manger(15);
  echo '<br>';

  var_dump($aby);
  echo '<br>';

  $aby->parler('Bonjour tout le monde');

  // toto étant un attribut public, on y a accès en dehors de la classe
  echo '<br> toto ';
  echo $aby->toto;
  
  // age étant un attribut private, on n'y a pas accès en dehors de la classe
  echo '<br> age ';
  // echo $aby->age;

  $aby->setAge(13);
  var_dump($aby);
