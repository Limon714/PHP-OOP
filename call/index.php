<?php
class Person{
   private $firstName;
    private $lastName;

    private function setName($fn, $ln){
        $this->firstName = $fn;
        $this->lastName = $ln;
    }
    
    public function __call($method, $args)
    {
        if(method_exists($this, $method))
        {
            call_user_func_array([$this, $method], $args);
        }else{
            echo "Method does not exist $method";
        }
    }
}

$obj = new Person();
$obj->setName("Rahim ", "Karim");

echo "<pre>";
print_r($obj);
echo "</pre>";

?>