<?php

namespace Product\India{
    const NUM=10;
    class Laptop{
        function __construct(){
            echo "<h1>Product\India Namespace - Laptop Class</h1>";
        }
    }
    function disp(){
        echo "<h1>Product\India Namespace - Disp Function</h1>";
    }
}

namespace Product\Nepal{
    const NUM=20;
    class Laptop{
        function __construct(){
            echo "<h1>Product\Nepal Namespace - Laptop Class</h1>";
        }
    }
    function disp(){
        echo "<h1>Product\Nepal Namespace - Disp Function</h1>";
    }
}

namespace Product{
    const NUM=30;
    class Laptop{
        function __construct(){
            echo "<h1>Product\ Namespace - Laptop Class</h1>";
        }
    }
    function disp(){
        echo "<h1>Product\ Namespace - Disp Function</h1>";
    }
}
?>