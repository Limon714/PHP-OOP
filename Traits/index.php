<?php 

trait test{
    public function hello(){
        echo "Hello Sir\n";
    }
    
    public function hi(){
        echo "Hi Sir\n";
    }
    
    
}

trait test2{
    public function see(){
        echo " See you Sir\n";
    }
}


class Person{
    use test, test2;
}

class Student{
    use test;
}



$obj = new Person();
$obj ->hello();
$obj ->see();
$obj ->hi();

?>