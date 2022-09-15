<?php 

class Person{

 public static $name = "Ragub <br>";

 public static function hello(){
    echo self::$name;
 }
 
 public function __construct($n)
 {
        self::$name = $n;
 }
    
}



Person::hello();

$obj = new Person("Comes from Constructor");
$obj->hello();


?>