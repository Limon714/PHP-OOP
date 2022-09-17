<?php

class Person{
    public $name;
    public $course;
    
    public function __construct($n)
    {
         $this->name = $n;
    }
    public function setCourse(course $c)
    {
         $this->course = $c;
    }

    public function __clone()
    {
        $this->course = clone $this->course;
    }
    
}

class course{
    public $cname;
    
    public function __construct($cn)
    {
         $this->cname = $cn;
    }
    
}



$obj = new Person("Royal man ");
$course1 = new course("PHP ");

$obj->setCourse($course1);
$obj2 = clone $obj;

$obj2->name = " Hero Man";
$obj2->course->cname = " JavaScript";
echo "<pre>";
print_r($obj);
echo "</pre>";
echo "<pre>";
print_r($obj2);
echo "</pre>";

?>