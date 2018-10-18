<?php

include "autoLoad.php";

$formateur = new Formateur();
$stagiaire = new Stagiaire("ikh@ikh.fr","ikh", "sam", 18);

$formateur->ecrire("je suis formateur");

$stagiaire->addNote(14);
$stagiaire->addNote(16)->addNote(13); //  possible car return $this dans la fonction add Note

$formateur->evaluerNote(19,$stagiaire);
var_dump($stagiaire);