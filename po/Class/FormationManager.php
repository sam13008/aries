<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of FormationManager
 *
 * @author ikh
 */
class FormationManager {

    /**
     *
     * @var PDO
     */
    private $pdo;
    
    public function __construct(PDO $pdo) {
        $this->pdo = $pdo;
    }

    public function create(Formation $formation) {
        $sql = "INSERT INTO formation values(null,? ,?)";
                $pdoSt = $this->pdo->prepare($sql);
        $pdoSt->execute([$formation->getNom(), $formation->getImage()]);
        
    }
    
    
}
