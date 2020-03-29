<?php
/**
 * Class form 
 * Permet de générer un formulaire rapidement et simplement
 */
class Form {

    /**
     * @var array données utilisées par le formulaire
     */
    private $data = array();

    /**
     * @var string tag utilisé pour entourer les champs
     */
    public $surround = 'p';

    /**
     * @param array $data : données utilisées par le formulaire
     */
    public function __construct($data = array()) {
        $this->data = $data;
    }

    /**
     * @param string $html : code généré par les methodes input et submit
     * @return string $html entouré du tag choisi par @var $surround
     */
    protected function surround($html) {
        return "<{$this->surround}>{$html}</{$this->surround}>";
    }


    /**
     * @param $index string : nom du champ a récuprer dans le tableau qui doit être le même que le nom de l'input
     * 
     * @return void
     */
    protected function getValue($index) {
        return isset($this->data[$index]) ? $this->data[$index] : null;
    }

    /**
     * @param  $name string
     * 
     * @return void
     */
    public function input($name) {
        return $this->surround('<input type="text" name="'.$name.'" value="' .$this->getValue($name). '">');
    }

    /**
     * @return void
     */
    public function submit() {
        return $this->surround('<button type="submit">Envoyer</button>');
    }

}