<?php

interface hello{
    
    function one($a, $b);
}

interface hi{
    
    function two($c, $d);
}

interface bye{
    
    function three($e, $f);
}

class abc implements hello, hi, bye{
    public function one($a, $b)
    {
        echo " First Interface is " . $a + $b . " <br>";
    }
    public function two($c, $d)
    {
      echo " Second Interface is " . $c - $d . " <br>";  
    }
    public function three($e, $f)
    {
        echo " Third Interface is " . $e * $f;
    }
    
}

$obj = new abc();
$obj->one(12, 15);
$obj->two(20, 15);
$obj->three(3, 15); 



?>