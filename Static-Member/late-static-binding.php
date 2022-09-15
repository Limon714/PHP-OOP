<?php

class Student{
    protected static $name = "Limon ";
    public function info(){
        echo self::$name;
        echo static::$name;
    }
}

class boys extends Student{
    protected static $name = "Ak";
}

$obj = new boys();
$obj->info();




?>