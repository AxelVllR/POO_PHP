<?php

class Personnage{

    // Attributs
    public $vie = 80;
    public $atk = 60;
    public $nom;
    public $dead = false;
    //methodes
    public function crier(){
        return 'LEEEEROY JENKINS';
    }

    public function attaquer($personnage) {
        $personnage->vie -= $this->atk;
        if($personnage->vie === 0){
            $personnage->dead = true;
        }
    }

    public function regenerer() {
        $this->vie = 100;
    }

}