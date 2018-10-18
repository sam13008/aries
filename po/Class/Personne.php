<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Personne
 *
 * @author ikh
 */

// Abstract personne permet d bloquer qu lon puisse instancier une personne on pourra instancier un stagiaire ou formateur qui heritera de la classe personne 
abstract class Personne {
    
    /**
     *
     * @var string
     */
    public $nom;
    public $prenom = "mickey";
    
    protected $age;
    protected $genre;
    protected $id;
    const TETE= 1 ;
    
    public static $population=0;
    
    public function __construct($nom="duck", $prenom="daffy", $age=50) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->age = $age;
        self::$population++;
    }

    
  public function getAge(){
      
      return $this -> age;
         
  }
  
  public function setAge(int $age) {
      
      $this->age = $age;
      
      
  }
    
  public function getNom() {
      return $this->nom;
  }

  public function getPrenom() {
      return $this->prenom;
  }

  public function setNom($nom) {
      $this->nom = $nom;
      return $this;
  }

  public function setPrenom($prenom) {
      $this->prenom = $prenom;
      return $this;
  }
  
  public function writeTete(){
      
      echo self::TETE;
      
  }
// this fait reference a une instance self fait reference a la classe elle meme

    public static function printPopulation(){
        
        echo self::$population;
        /* 
         * this est intrdit car on appelle pas une instanc mais la variable qui est dan la classe et            * qui nst pas lié a une instance car static
         */
         
    }
    
    public function parler($message){
        echo "<h1>" . $message . "</h1>";

        
    }
    
    public function getGenre() {
        return $this->genre;
    }

    public function setGenre($genre) {
        $this->genre = $genre;
        return $this;
    }

// le but est de pouvoir imposer au classe fille de surcharger la methode ecrire
    public abstract function ecrire($texte);
    
    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
        return $this;
    }


    
    
    
    
    
    
    
    
    
    
}
