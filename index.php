<?php
require "Personnage.php";


$jose = new Personnage('José', 28, 45);

var_dump($jose->regenerate());
var_dump($jose->vie(12));
