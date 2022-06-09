<?php

class Voiture {
    private string $couleur;
    private int $masse;
    private string $marque;
    private float $vitesse = 0;

    public function __construct(string $color, int $mass, string $brand)
    {
        $this->couleur = $color;
        $this->masse = $mass;
        $this->marque = $brand;
    }

    // getter (ou assesseur)
    public function getCouleur(): string
    {
        return $this->couleur;
    }

    // setter (mutateur)
    public function setCouleur(string $color): void
    {
        $this->couleur = $color;
    }

    public function afficherMessage()
    {
        echo "Je suis une voiture";
    }

    public function afficherEnergieCinetique(): float
    {
        return 0.5 * $this->masse * ($this->vitesse ** 2);
    }

    public function __destruct()
    {
        echo "<p>Object destroyed</p>";
    }
}
