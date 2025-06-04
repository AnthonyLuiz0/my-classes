<?php

    namespace Config;

    class Import{
        
        /**
         * 
         * @param array $library a insira o link da biblioteca javascript que deseja importar
         * @return echo
        */

        private $libs;

        public function importLib($library = []){
            $this->libs = $library;
            foreach($this->libs as $lib){
                if(str_contains($lib, '.js')){
                    echo "<script src='$lib'></script>";
                }

                if(str_contains($lib, '.css')){
                    echo "<link rel='stylesheet' href='$lib'>";
                }

                
            }
        }

    }