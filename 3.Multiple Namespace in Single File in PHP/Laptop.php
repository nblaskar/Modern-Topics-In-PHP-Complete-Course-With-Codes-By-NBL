<?php
namespace Product1;
    const NUM=10;
    class Laptop{
        function __construct(){
            echo "<h1>Product1 Namespace - Laptop Class</h1>";
        }
    }
    function disp(){
        echo "<h1>Product1 Namespace - Disp Function</h1>";
    }

namespace Product2;
    const NUM=20;
    class Laptop{
        function __construct(){
            echo "<h1>Product2 Namespace - Laptop Class</h1>";
        }
    }
    function disp(){
        echo "<h1>Product2 Namespace - Disp Function</h1>";
    }

    // //Access in Same Page
    // //-->Within the Scope of namespace
    // echo NUM;
    // disp();
    // $obj=new Laptop;

    // //-->Outside the Scope of namespace
    // echo \Product1\NUM;
    // \Product1\disp();
    // $obj=new \Product1\Laptop;



?>