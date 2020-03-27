<?php

require 'Personnage.php';

$merlin = new Personnage();
$harry = new Personnage();

$merlin->attaquer($harry);
$merlin->nom = 'Merlin';
$harry->nom = 'Harry';
var_dump($harry, $merlin);