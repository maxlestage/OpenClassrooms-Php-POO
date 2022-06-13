<?php

declare(strict_types=1);

class Pont
{
    // Définition de la propriété statique. Elle sera partagée
    public static int $nombrePietons = 0;

    // Je laisse volontairement la méthode non statique.
    // Seule la référence à la propriété est importante.
    public function nouveauPieton()
    {
        // Mise à jour de la propriété statique.
        self::$nombrePietons++;
    }
}

$pontLondres = new Pont;
$pontLondres->nouveauPieton();

$pontManhattan = new Pont;
$pontManhattan->nouveauPieton();

echo Pont::$nombrePietons;
