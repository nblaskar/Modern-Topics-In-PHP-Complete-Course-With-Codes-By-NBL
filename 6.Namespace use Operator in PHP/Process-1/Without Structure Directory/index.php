
<?php
//Attach File
require('Laptop.php');

 //Accessing in Another Page
//  echo Product\NUM;
//  Product\disp();
//  $obj=new Product\Laptop;

// //Importing By use Operator
// use const Product\NUM;
// use function Product\disp;
// use Product\Laptop;
// //--Accessing
// echo NUM;
// disp();
// $obj=new Laptop;
 
// //Aliasing By use Operator
use const Product\NUM as N;
use function Product\disp as d;
use Product\Laptop as La;
//--Accessing
echo N;
d();
$obj=new La;
 



?>

