<?php 
class MyException extends Exception{
    function errorMessage(){
        $error = "My Exception Message:" . $this->getMessage() . 
        "Error on line Number :" . $this->getLine();

        return $error;
    }
}
function division($n){
    try{

        if($n == 0){
            throw new Exception("<br>Enter the Valid Number.");
    
        }
        
        if($n == 6){
            throw new MyException("<br> Number is 6.");
    
        }

        else{
            $div = 20/$n ;
            echo "<br> Number is : " . $div;
        }
       
    
    }
    catch(MyException $obj){
        echo $obj->errorMessage();
    }
    
    catch(Exception $obj){
        echo $obj->getMessage();
    }
    
    finally{
        echo "<br> -- finally --";
    }
}

division(6);
division(0);
division(3);



?>