<?php
function find_total(array $my_numbers)
{
    $res = 0;
    foreach($my_numbers as $num){
        if($num == 8){
            $res += 5;
        }elseif($num % 2 == 0){
            $res += 1;
        }else{
            $res += 3;
        }
    }
    return $res;
}