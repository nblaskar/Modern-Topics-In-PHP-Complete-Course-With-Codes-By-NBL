<?php
namespace Zone;
class DateTime{
    function __construct(){
        echo "<h1>Apna DateTime Class </h1>";
    }
}
$obj=new DateTime(); //User defined Call
// print_r($obj);

$obj1=new \DateTime(); //Built-in Call
print_r($obj1);
?>