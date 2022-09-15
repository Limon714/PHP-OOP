<?php

// Trait function as a Private Access Modifier

trait hello{
    
   private function sayhello(){
        echo "I am from hello  private function ";
    }
}



class person{
    
    use hello{
       
        hello::sayhello as public; // Convert Private function to Public
    }
}

$obj = new person();
$obj ->sayhello();