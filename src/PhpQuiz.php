<?php

namespace PhpQuiz;

class PhpQuiz
{
    public static function armstrong(int $myNumber)
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
    public function fibonacci(int $myNumber)
    {
        $array = [0,1];
        for ( $i=2; $i<=$myNumber; ++$i ) {
            $array[$i] = $array[$i-1] + $array[$i-2];
        }
        return $array[$myNumber-1];
    }
    public static function find_total(array $my_numbers)
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
    public static function palindrome($myNumber){
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
    }
    public static function sum_array($no1, $no2) {
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
    public static function holland($array) {
        rsort($array);
        $maxScore = count($array);
        $countArrayVal = array_count_values($array);
        $result = [];
        foreach($countArrayVal as $key => $value){
            if($value > 1){
                $total = 0;
                for($i = 1;$i <= $value; $i++){
                    $total += $maxScore;
                    $maxScore--;
                }
                $score = $total / $value;
            }else{
                $score = $maxScore;
                $maxScore--;
            }
            $result[$key] = $score;
        }
        return $result;
    }
}
