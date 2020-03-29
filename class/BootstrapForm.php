<?php

class BootstrapForm extends Form {

    
    /* @param string $html : code généré par les methodes input et submit
    * @return string $html entouré du tag choisi par @var $surround
    */
    protected function surround($html) {
        return "<div class=\"form-group\">{$html}</div>";
    }

        /**
     * @param  $name string
     * 
     * @return void
     */
    public function input($name) {
        return $this->surround(
            '<label>' . $name . '</label>' .
            '<input type="text" name="'.$name.'" value="' .$this->getValue($name). '"class="form-control">'
        );
    }

     /**
     * @return void
     */
    public function submit() {
        return $this->surround('<button type="submit" class="btn btn-primary">Envoyer</button>');
    }
}