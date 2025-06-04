<?php

    namespace Config;

    use ErrorException;

    class Routes{
        private $routes = [];

        public function setRoute($route, $controller, $method = 'index'){
            $this->routes[$route] = [$controller, $method];
            return $this;
        }

        public function Router(){
            $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
            if(isset($this->routes[$uri])){
                $controller = $this->routes[$uri][0];
                $method = $this->routes[$uri][1];
                $path = __DIR__ . '/' . $controller . '.php';
                if(!file_exists($path)){
                    throw new ErrorException("ERRO: Nenhum controller '$controller' não encontrado.");
                }
                require_once $path;
                if(!class_exists($controller)){
                    throw new ErrorException("ERRO: Classe '$controller' não definida.");
                }
                $controllerClass = new $controller();
                if(method_exists($controllerClass,$method)){
                    return $controllerClass->$method();
                }
            }
        }
    }