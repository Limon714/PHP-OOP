<?php

function sum( array $v){
   
    foreach($v as $p){
        echo $p . "<br>";
    }
   
    
}

$t = ["Apple", "Jui", "fui"];

sum($t);
?>