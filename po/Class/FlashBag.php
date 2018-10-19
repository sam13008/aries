<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of FlashBag
 *
 * @author ikh
 */
class FlashBag {
   
    public function addMessage(string $message) {
    $_SESSION["flash"] = $message;
    
}


public function getMessage() {
    $message = NULL;
    if(isset($_SESSION["flash"])){
    $message = $_SESSION["flash"];
    unset($_SESSION["flash"]);
}
return $message;

    }
    
    public function hasMessage(){
    return isset($_SESSION["flash"]);
    
    }




    }