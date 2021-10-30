<?php
function armstrong(int $myNumber)
{
    $array = str_split($myNumber);
    $length = count($array);
    $res = 0;
    for($i=0;$i < $length;$i++){
        $res += pow($array[$i],3);
    }
    if($res === $myNumber){
        return true;
    }else{
        return false;
    }
}