<?php

class Archer extends Personnage {


    public function __construct($nom) {
        $this->vie = $this->vie / 2;
        $this->atk = 25;
        parent::__construct($nom);
    }

    public function attaquer($personnage) {
        $personnage->vie  -= $this->atk;
        parent::attaquer($personnage);
    }
}