<?php 

class employee{
    public $name, $age;
    
    function __construct($n, $a)
    {
        $this->name = $n;
        $this->age = $a;
    }
    
      public function show(){
        echo "<h1>New Employee Information</h1>";
       echo "Employee Name is " . $this->name . "<br>"; 
       echo "Employee age is " . $this->age; 
    }

}

class manager extends employee{
    public $nage = 6;
    public $mainage;
    public function show(){
        $this->mainage = $this->age + $this->nage;
        echo "<h1>New Manager Information</h1>";
        echo "Employee Name is " . $this->name . "<br>";
        echo "Employee age is " . $this->mainage; 
    } 
}

    
$obj = new manager("Saahu", 24);
$ob = new employee("Rahim", 24);
 
$obj ->show();
$ob ->show();