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
    
    public function __construct(array $request = []) {
        if($request) {
            $this->hydratation($request);
        }
    }

    
    
    private function hydratation(array $request ) {
        if($request){
        foreach ($request as $key => $value) {
            $setter = "set" .ucfirst($key);
            //permet de creer par exemple le setName en fontion des cle du post
            if (method_exists($this, $setter)){
                //peermt de verifier qu par exemple il ny a pas un token dans larray
                $this->$setter($value);
            }

}
        }     
    }

    
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
    $this->erreur[] = "Nom invalide";
}
        
        return $this;
    }

    public function setImage($image) {
         if ($image !== ""){
        
         $this->image = $image;
         
         }
         
        return $this;
    }

    public function setErreur($erreur) {
        $this->erreur = $erreur;
        return $this;
    }


    
    
    
}
