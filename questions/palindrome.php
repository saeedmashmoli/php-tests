<?php

function palindrome($myNumber)
{
    if(is_numeric($myNumber)){
        $array = str_split($myNumber);
        $length = count($array);
        for($i=0;$i < $length ; $i++){
            if($length % 2 !== 0){
                if($i !== $length/2 + 1){
                    if($array[$i] !== $array[$length-$i-1]){
                        return false;
                    }
                }
            }else{
                if($array[$i] !== $array[$length-$i-1]){
                    return false;
                }
            }
        }
        return true;
    }else{
        return "please insert numeric value";
    }
    
}