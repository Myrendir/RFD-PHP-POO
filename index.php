<?php
include "./classes/Voiture.php";

$gerard = new Voiture();

$gerard->couleur = "Bleu";
$gerard->marque = "Renault Fuego";
$gerard->afficherMessageALaCon();

var_dump($gerard);

$gerard->peindreVoiture("vert pomme");

var_dump($gerard);
