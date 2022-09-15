<?php 

class Student{
    private $name;
    
      public function show(){
       echo $this->name = "Rahim"; 
    }

}

class boys extends Student{
    public function boy(){
        echo $this->name;
    } 
}

    
$obj = new boys();
 
 $obj->name ="Rahim";

$obj ->boy();
    
?>