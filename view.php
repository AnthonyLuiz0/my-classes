<?php

namespace Config;

class View{

    public function render($view, $data = []){
        extract($data);
        require_once 'views/' . $view . '.php';
    }

}