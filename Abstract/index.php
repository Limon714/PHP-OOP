<?php

abstract class Person{
    public $name;

   abstract function info($a, $b);
}

class men extends Person{
    function info($c, $d){
        echo $c . $d;
    }
}

$obj = new men();

$obj->info("Nice man ", " Good Code");

?>