<?php

    namespace Config;

    class Import{

        private $libs;

        public function importLib($library = []){
            $this->libs = $library;
            foreach($this->libs as $type => $lib){
                switch($type){
                    case 'js':
                        echo "<script src='$lib'></script>";
                        break;
                    case 'css':
                        echo "<link rel='stylesheet' href='$lib'>";
                        break;
                    default:
                        echo "";
                        break;
                }
            }
        }
    }