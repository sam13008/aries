<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Formateur
 *
 * @author ikh
 */

// final permet de ne pas pouvoir faire heriter la classe formateur
final class Formateur extends Personne {
   
    
    private $numero;
    
    public function testVisibilite() {
        
        echo $this->getGenre();
        
    }
    
    
    public function getNumero() {
        return $this->numero;
    }

    public function setNumero($numero) {
        $this->numero = $numero;
        return $this;
    }

    public function ecrire($texte) {
        echo $texte;
}
    
    
    
    
    
    
}
