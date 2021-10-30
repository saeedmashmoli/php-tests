<?php
function letterCounterCheck($string) {
    return LetterCounter::CountLettersAsString($string);
}
class LetterCounter{
    public static function CountLettersAsString($string){
        $string = strtolower($string);
        $array = str_split($string);
        $res = '';
        for($i = 0; $i < count($array); $i++){
            $count = substr_count($string,$array[$i]);
            if(strpos($res,$array[$i]) === false){
                $text = '';
                for($j = 0; $j < $count ; $j++){
                    $text .= '*';
                }
                $res .= $array[$i].":".$text;
            }
        }
        return $res;
    }
}