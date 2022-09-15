<?php

class School{
    public function getnames($names){
        
         echo "<ul>";
        foreach($names ->hello() as $name){
            echo "<li>" . $name . "</li>";
        }
        "</ul>";
    }
}
class Student{
    public function hello(){
    return ["Rabin", "Sabin", "Ashik", "Saahu"];
    }
}


$obj = new School();
$obju = new Student();

$obj->getnames($obju);





?>