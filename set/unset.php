<?php

class Person{
    
    private $name;
    public function hello($a){
     $this->name = $a;
    }
    public function __unset($para)
    { 
        unset($this->$para);
    }
    
    
}


$obj = new Person();
$obj->hello("private");

?>