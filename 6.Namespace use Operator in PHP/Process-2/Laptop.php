<?php
namespace Product;
//Constant
const MIN=10;
const MAX=20;
const AVG=30;

//Classes
class Laptop{
    function __construct(){
        echo "<h1>Product Namespace - Laptop Class</h1>";
    }
}
class Dell{
    function __construct(){
        echo "<h1>Product Namespace - Dell Class</h1>";
    }
}
//Functions
function disp(){
    echo "<h1>Product Namespace - Disp Function</h1>";
}
function check(){
    echo "<h1>Product Namespace - check Function</h1>";
}

?>