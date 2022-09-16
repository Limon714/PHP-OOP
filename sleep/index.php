<?php
class Person{
    public $course = "PHP";
    private $firstName;
    private $lastName;

    public function setName($fn, $ln){
        $this->firstName = $fn;
        $this->lastName = $ln;
    }
    
    public function __sleep()
    {
        return array('firstName','lastName');
    }
}

$obj = new Person();
$obj->setName("Rahim ", "Karim");

$srl = serialize($obj);

echo $srl;





?>