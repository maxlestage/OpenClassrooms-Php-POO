<?php

declare(strict_types=1);

class Pont
{
    public static function validerTaille(float $taille): bool
    {
        if ($taille < 50.0) {
            trigger_error(
                'La longueur est trop courte. (min 50m)',
                E_USER_ERROR
            );
        }

        return true;
    }
}

var_dump(Pont::validerTaille(150.0));
var_dump(Pont::validerTaille(20.0));
