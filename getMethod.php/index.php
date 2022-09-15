<?php

class Person{
    private $name = "Limon";
    
    public function __get($nam)
    {
        echo "You are trying to access Non Existing or Private Property $nam";
    }
}



$obj = new Person();
$obj->name;

?>