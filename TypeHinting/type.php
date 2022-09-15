<?php  

class Rabin{
  public  function raj(){
        echo "I am from Rabin raj";
    }
}
class Rudro{
  public  function taj(){
        echo "I am from Rudro taj";
    }
}

function wow($c){
    $c->raj();
}

$obj = new Rudro();
wow($obj);



?>