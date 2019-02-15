<?php
include "./classes/Vehicule.php";
include "./classes/Voiture.php";
include "./functions/debug.php";

$gerard = new Voiture("Jaune");

//$gerard->couleur = "Bleu";
$gerard->marque = "Renault Fuego";
$gerard->afficherMessageALaCon();


$gerard->peindreVoiture("vert pomme");


$gerard->vitesse = 30;
$gerard->masse = 1075;

$gerard->conso = 0.06;
$gerard->carbu = 30;

debug($gerard);

echo $gerard->calculerEnergieCinetique() . "Joules<br />";

debug($gerard);

echo $gerard->calculerDistanceRestante() . "Km<br />";

