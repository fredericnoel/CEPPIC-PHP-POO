<?php

spl_autoload_register(function($className) {
    require './classes/' . $className . '.php';
});

$voiture1 = new Voiture("vert", 1200, "BMW");

$voiture1->setCouleur("noir");
echo $voiture1->getCouleur();


/*
$voiture2 = new Voiture();
$voiture2->couleur = "vert";

var_dump($voiture1);
var_dump($voiture2);

$voiture1->afficherMessage();*/