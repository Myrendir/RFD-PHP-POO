<?php

class Voiture extends Vehicule
{
    public $couleur;
    public $marque;
    public $capaciteReservoir;
    public $qteCarburantRestant;
    public $consomInstantanee;

    public function __construct($couleur, $reservoir)
    {
        $this->couleur = $couleur;
        $this->capaciteReservoir = $reservoir;
    }

    public function afficherMessageALaCon()
    {
        echo "Message inutile";
    }

    public function peindreVoiture($couleur)
    {
        $this->couleur = $couleur;
    }


    public function calculerKmRestante($qteRestante, $consommation)
    {
        $reserve = $this->capaciteReservoir * 5 / 100;
        return ($qteRestante - $reserve) / $consommation * 100;
    }

    public function __destruct()
    {
        echo "Ich bin tot !";
    }
}

