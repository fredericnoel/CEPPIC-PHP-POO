<?php

class Vehicule
{
    protected int $masse;
    protected float $vitesse = 0;
    protected int $capacite;
    protected string $marque;

    public function afficherEnergieCinetique(): float
    {
        return 0.5 * $this->masse * ($this->vitesse ** 2);
    }
}
