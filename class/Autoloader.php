<?php

class Autoloader {
    public static function autoload($class_name) {
        require '../class/' . $class_name . '.php';
    }
}