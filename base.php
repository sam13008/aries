<?php

$nom = "carlier";
$var = "nom";
echo '$var';

$a = 1;
$b = & $a;
$a++;
echo '$a';
echo '$b';
unset($a);
$tab = [1, 2, 3];

foreach ($tab as &$value) {

    $value *= 2;
}
unset($value);
var_dump($tab);

function bonjour($nom) {

    echo "bonjour " . $nom;
}

bonjour("robert");


$prix = 10;

function ttc(&$ht) {

    return $prix = $ht * 1.20;
}

echo ttc($prix);
var_dump($prix);

function ttc2() {

    global $prix;
}

define("MA_CONSTANTE", 13);
echo MA_CST;

$fonction = "ttc";
$fonction(10);

/*
  : string sert a typer le retour de la fonction
  typer une variale sert a etre certain d'avoir une chaine de caractre et non par exemple un boleen
  en php 7 : ?string peut servir a dire ca doit retourner string ou null

 */

/**
 * 
 * @param string $prenom
 * @return string
 */
function hello(string $prenom): string {

    return "hello " . $prenom;
}

echo hello("mickey");

$_GET["login"] = "Mickey";
echo htmlspecialchars($_GET["login"]);
