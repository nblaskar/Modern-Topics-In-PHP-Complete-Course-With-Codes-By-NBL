<?php
namespace Product1{
    const NUM=10;
    class Laptop{
        function __construct(){
            echo "<h1>Product1 Namespace - Laptop Class</h1>";
        }
    }
    function disp(){
        echo "<h1>Product1 Namespace - Disp Function</h1>";
    }
}
namespace Product2{
    const NUM=20;
    class Laptop{
        function __construct(){
            echo "<h1>Product2 Namespace - Laptop Class</h1>";
        }
    }
    function disp(){
        echo "<h1>Product2 Namespace - Disp Function</h1>";
    }
}
namespace {
     //Accessing By the Scipe of Global Namespace
    echo Product1\NUM;
    Product1\disp();
    $obj=new Product1\Laptop;
    
    
    echo Product2\NUM;
    Product2\disp();
    $obj=new Product2\Laptop;
   }


?>