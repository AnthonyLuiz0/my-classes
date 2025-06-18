<?php

namespace Components;

class Form{

    public static function formCreate($action, $method){
        echo "<form action='" . $action . "' method='" . $method . "'>";
    }

    public static function input($type, $name, $classes = [], $placeholder = "Placeholder"){
        echo "<input type='" . $type . "' name='" . $name . "' class='" . implode(" ", $classes) . "' placeholder='" . $placeholder . "'>";
    }

    public static function button($type, $text = "Enviar", $classes = []){
        echo "<button type='" . $type . "' class='" . implode(" ", $classes) . "'>" . $text . "</button>";
    }

    public static function formClose(){
        echo "</form>";
    }
    
}