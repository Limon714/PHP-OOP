<?php 

class Person{
    
    private $data = ["name" => "Limon", "hobby" => "Coding", "age" => 24 ];
    
    public function __isset($name)
    {
        echo isset($this->data[$name]);
    }
    
}


$obj = new Person();
echo isset ($obj->hobby); 


?>