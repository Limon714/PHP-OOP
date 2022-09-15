<?php

trait hello{
    
   public function sayhello(){
        echo "I am from hello trait ";
    }
}

trait hi{
    
   public function sayhello(){
        echo "I am from hi trait ";
    }
}

class person{
    
    use hello, hi{
        hello::sayhello insteadOf hi;
        hi::sayhello as newhello;
    }
}

$obj = new person();
$obj ->sayhello();
$obj ->newhello();

?>