<?php

namespace Components;

class Form{

    public static function create($params){
        foreach($params as $key => $value){
            $params[$key] = $key . "=" . $value;
        }
        $params = implode(" ", $params);
        echo "<form " . $params . ">";
    }

    public static function input($params){
        foreach($params as $key => $value){
            $params[$key] = $key . "=" . $value;
        }
        $params = implode(" ", $params);
        echo "<input " . $params . ">";
    }

    public static function button($text, $params){
        foreach($params as $key => $value){
            $params[$key] = $key . "=" . $value;
        }
        $params = implode(" ", $params);
        echo "<button " . $params . ">" . $text . "</button>";
    }

    public static function end(){
        echo "</form>";
    }
    
}