<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Stagiaire
 *
 * @author ikh
 */

// extends sert a faire heriter le stagiaire de la classe personne
class Stagiaire extends Personne{
    protected $email;
    
    public function __construct($email,$nom, $prenom, $age) {
        $this->email = $email;
        parent::__construct($nom, $prenom, $age);
        /*
        parent sert a initialiser la fonction construct de la classe personnage
        */
        }

    
    public function getEmail() {
        
        return $this->email;
        
    }
    
    public function setEmail($email) {
        $this->email = $email;
        return $this;
    }
    
    //surcharge
     public function parler($message, $color="red"){
        echo "<h1 style=color:" . $color .">" . $message . "</h1>";
        
        
        
    }
    // final permet de ne pas pouvoir surcharger dautre parametre la methode ecrire
    final public function ecrire($texte, $support="ecran") {
        echo "$texte" . "sur" . $support;
}
    
    
}
