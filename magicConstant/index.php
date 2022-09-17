<?php
// namespace MYNAMESPACE;
echo "Line Number is : " . __LINE__ . "</br>";
echo "The Full Path of this file  is : " . __FILE__ . "</br>";
echo "The Directory Name  is : " . __DIR__  . "</br>";

function myFunc(){
    echo "The Function Name  is : " . __FUNCTION__ . "</br>";
}

myFunc();

class TestClass{
    public function setMethod(){
        echo "The Class Name  is : " . __CLASS__ . "</br>";
        echo "The Method Name  is : " . __METHOD__ . "</br>";
        // echo "The NameSPACE  is : " . __NAMESPACE__ . "</br>";
    }
}

$obj = new TestClass();
$obj->setMethod();


?>