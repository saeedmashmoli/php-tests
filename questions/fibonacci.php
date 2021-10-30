<?php
function fibonacci(int $myNumber)
{
    $array = [0,1];
    for ( $i=2; $i<=$myNumber; ++$i ) {
        $array[$i] = $array[$i-1] + $array[$i-2];
    }
    return $array[$myNumber-1];
}