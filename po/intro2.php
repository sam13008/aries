<?php

include "autoLoad.php";

$formateur = new Formateur();
$stagiaire = new Stagiaire("ikh@ikh.fr","ikh", "sam", 18);

$formateur->ecrire("je suis formateur");