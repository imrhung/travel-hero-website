<?php

class View {

    function __construct() {
        
    }

    public function render($name, $noInclude = false) {
        if ($noInclude == true) {
            require 'views/' . $name . '.php';
        } else {
            require 'views/' . $name . '.php';
        }
    }

}