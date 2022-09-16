<?php

class Student{
    private static function hello($ab){
        echo "Assalamualaikum, " . $ab;
    }
    
    public static function __callStatic($methodname, $arguments)
    {
        if(method_exists(__CLASS__, $methodname)){
            call_user_func_array([__CLASS__, $methodname], $arguments);
        }else{
            echo "Method does not Exist: $methodname"; 
        }
    }
    
}


Student::hello("Abdul Khalaque");

?>