<?php

    namespace Config;

    class Import{
        private $lib;

        public function importLib($library = []){
            $this->lib = $library;
            foreach($this->lib as $lib){
                if(str_contains($lib, '.js')){
                    echo "<script src='$lib'></script>";
                }

                if(str_contains($lib, '.css')){
                    echo "<link rel='stylesheet' href='$lib'>";
                }

                
            }
        }

    }
