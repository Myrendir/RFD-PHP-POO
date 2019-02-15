<?php

class Voiture
{
    public $couleur;
    public $marque;

    public function afficherMessageALaCon() {
        echo "Message inutile";
    }

    public function peindreVoiture($couleur) {
        $this->couleur = $couleur;
    }
}