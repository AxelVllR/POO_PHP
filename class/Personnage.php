<?php

class Personnage{

    // Attributs
    public $vie = 80;
    public $atk = 95;
    public $nom;
    public $dead = false;
    public $regen = 15;
    //methodes

    public function __construct($nom) {
        $this->nom = $nom;
    }

    private function mort() {
        if($this->vie <= 0) {
            $this->dead = true;
            $this->vie = 0;
        } else {
            $this->dead = false;
        }
    }

    public function crier(){
        return 'LEEEEROY JENKINS';
    }

    public function attaquer($personnage) {
        $personnage->vie -= $this->atk;
        $personnage->mort();
    }

    public function regenerer() {
        $this->vie = $this->vie + $this->regen;
    }

}