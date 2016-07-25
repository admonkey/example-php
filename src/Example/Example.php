<?php namespace Example;

class Example
{
    public static function go($bool = false){
        if ($bool) {
            return true;
        }

        return false;
    }

    public static function echoVar($var){
        $var += 1;
        return $var;
    }

}
