<?php 

class Person{
    
    private $data = ["name" => "Limon", "hobby" => "Coding", "age" => 24 ];
    
    public function __get($name)
    {
        if(array_key_exists($name, $this->data)){
            return $this->data[$name];
        }
        else{
            echo "You are trying to access Non Existing Property $name";
        }
    }

    
}


$obj = new Person();
echo  $obj->wooho;





?>