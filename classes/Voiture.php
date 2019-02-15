<?php

class Voiture extends Vehicule
{
    public $couleur;
    public $marque;

    public function __construct($couleur)
    {
        $this->couleur = $couleur;
    }

    public function afficherMessageALaCon()
    {
        echo "Message inutile";
    }

    public function peindreVoiture($couleur)
    {
        $this->couleur = $couleur;
    }

    public function __destruct()
    {
        echo "Ich bin tot !";
    }
}

