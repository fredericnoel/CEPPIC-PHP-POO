<?php

require_once './classes/Voiture.php';

$voiture1 = new Voiture();
$voiture1->couleur = "rouge";
$voiture1->masse = 1200;
$voiture1->vitesse = 30;

echo $voiture1->afficherEnergieCinetique();
echo "<br />";
$voiture1->masse = 1190;
echo $voiture1->afficherEnergieCinetique();


/*
$voiture2 = new Voiture();
$voiture2->couleur = "vert";

var_dump($voiture1);
var_dump($voiture2);

$voiture1->afficherMessage();*/