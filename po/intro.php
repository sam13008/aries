<?php

function autoLoad($class){
    $file = 'Class/'. $class . ".php";
    if (file_exists($file)){
    include $file;
}
}
spl_autoload_register("autoLoad");
/*
include "Class/Personne.php";
include "Class/Stagiaire.php";
include "Class/Formateur.php";
 */
$personne = new Personne();
// var_dump($personne);
$personne->nom = "Duck";
// var_dump($personne);

/* $personne2 = new Personne();
var_dump($personne2);
$personne->nom = "Mousse";
var_dump($personne2);
 */

/* $personne-> age = 70; pas possible car protected il faudra utiliser les getter et setter la methode qui contient les getter et setter doit etre public  pour y acceder.
 
 */



$personne->setAge(80);
echo $personne->getAge();
// var_dump($personne->setNom("duck"));

//var_dump(Personne::TETE);
// les :: sont des opérateeurs de résolution de portée


// var_dump(Personne::$population);

Personne::printPopulation();

$stagiaire = new Stagiaire("si@eee.fr","thauvin", "robert", 18);
var_dump($stagiaire);

$stagiaire->parler("hello World", "blue");
$formateur = new Formateur("thauvin", "robert", 40);


$formateur->testVisibilite();
     