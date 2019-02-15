<?php

include  "./classes/Paresoleil.php";
include "./classes/Vehicule.php";
include "./classes/Voiture.php";
include "./classes/Coupe.php";
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

$gerard->portes = 3;
$gerard->vitres = 4;
$gerard->hauteur = 1;


//echo $gerard->calculerEnergieCinetique() . "Joules<br />";



//echo $gerard->calculerDistanceRestante() . "Km<br />";

$caisse = new Coupe("Rouge");
$caisse->setMessage("Forever forever");
echo $caisse->getMessage();