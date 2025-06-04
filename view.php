<?php

    namespace Config;

    class View{
        private $view;
        private $data;

        public function __construct($view, $data = []){
            $this->view = $view;
            $this->data = $data;
        }

        public function render(){
            extract($this->data);
            require_once 'views/' . $this->view . '.php';
        }
    }