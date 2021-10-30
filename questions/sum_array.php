<?php

function sum_array($no1, $no2) {
    $array = [10, 20, 30, 40, 50, 60, 70, 80, 90, 100];
    if($no2 < 0 || $no1 < 0){
        return -1;
    }elseif($no2 < $no1){
        return 0;
    }else{
        $res = 0;
        for($i = 0; $i < count($array) ; $i++){
            if($array[$i] >= $no1 && $array[$i] <= $no2){
                $res += $array[$i];
            }
        }
        return $res;
    }
}