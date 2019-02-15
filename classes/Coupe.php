<?php

final class Coupe extends Voiture
{
    use Paresoleil;

    public $portes;
    public $vitres;
    public $hauteur;

    public function setMessage($msg)
    {
        $this->message = $msg;
    }
}