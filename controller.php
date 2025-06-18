<?php

namespace Controller;

class Controller{

    protected $Form;

    public function __construct(){
        $this->Form = new \Components\Form();
    }

    public function view(string $view, array $data = []){
        $view = __DIR__ . '/' . $view . '.php';
        if(!file_exists($view)){
            die("View not found");
        }
        extract($data);
        require_once $view;
    }

    public function redirect(array $params){
        header("Location: " . $params['controller'] . "/" . $params['action']);
        exit();
    }
}