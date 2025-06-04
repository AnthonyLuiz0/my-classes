<?php

    namespace Config;

    class LogSession{
        private $user;
        private $password;

        public function setSession($user, $password){
            session_start();
            $_SESSION['user'] = $user;
            $this->user = $user;
            $this->password = password_hash($password, PASSWORD_DEFAULT);
        }

        public function getSession($user, $password){
            if($this->user == $user && password_verify($password, $this->password)){
                return true;
            }
            return false;
        }
    }