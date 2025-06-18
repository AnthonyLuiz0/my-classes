<?php

namespace Config;

class GeneratorUserPID{

    public function generate(){
        $PID = [];
        $validator = 0;
        for($i = 1; $i <= 4; $i++){
            $userID = rand(0, 9);
            $PID[] = $userID;
        }

        foreach($PID as $digit){
            $validator += $digit;
        }

        $PID[] = $validator % 10;
        $returnPID = implode("", $PID);
        return $returnPID;
    }

    public function validate($PID){
        $PID = str_split($PID);
        array_splice($PID, 4, 1);
        $validator = 0;
        for($i = 0; $i < 4; $i++){
            $validator += $PID[$i];
        }

        if($validator % 10 == $PID[4]){
            return true;
        }
        return false;
    }
    
}
