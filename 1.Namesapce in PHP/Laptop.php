<?php
//Unbracketed Namespace
    namespace Product;
    const NUM=10;
    class Laptop{
        function __construct(){
            echo "<h1>Product Namespace - Laptop Class</h1>";
        }
    }
    function disp(){
        echo "<h1>Product Namespace - Disp Function</h1>";
    }

    //Access in Same Page
    // echo NUM;
    // disp();
    // $obj=new Laptop;
?>