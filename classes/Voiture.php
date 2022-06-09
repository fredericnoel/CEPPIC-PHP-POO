<?php

class Voiture {
    public string $couleur;
    public int $masse;
    public string $marque;
    public float $vitesse = 0;

    public function afficherMessage()
    {
        echo "Je suis une voiture";
    }

    public function afficherEnergieCinetique(): float
    {
        return 0.5 * $this->masse * ($this->vitesse ** 2);
    }
}
