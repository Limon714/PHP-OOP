<?php

class Person{
    
    private $name;
    public function hello(){
      echo  $this->name;
    }

    public function __set($prop, $value)
    {
        if(property_exists($this, $prop)){
           $this->$prop = $value;
        }
        else{
            echo "Property does not exist";
        }
    }
}

$obj = new Person();
$obj->name = "Limon Islam";
$obj ->hello();

?>