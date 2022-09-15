<?php 

trait test{
    public function hello(){
        echo "Hello Sir";
    }
}

class Person{
    public function hello(){
        echo "Hi Person";
    }
}

class Student extends Person{
    use test;
    public function hello(){
        echo "Hi sir";
    }
}



$obj = new Student();
$obj ->hello();