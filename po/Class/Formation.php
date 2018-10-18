<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Formation
 *
 * @author ikh
 */
class Formation {
    
    private $id, $nom, $image;
    private $erreur=[];
    
    public function getId() {
        return $this->id;
    }

    public function getNom() {
        return $this->nom;
    }

    public function getImage() {
        return $this->image;
    }

    public function getErreur() {
        return $this->erreur;
    }

    public function setId($id) {
        $this->id = $id;
        return $this;
    }

    public function setNom($nom) {
        if (strlen($nom) >= 2){
        $this->nom = $nom;}
    else {
    $this->erreurs[] = "Nom invalide";
}
        
        return $this;
    }

    public function setImage($image) {
        $this->image = $image;
        return $this;
    }

    public function setErreur($erreur) {
        $this->erreur = $erreur;
        return $this;
    }


    
    
    
}
