
<?php
//Attach File
require('Laptop.php');

// use const Product\MIN as MI;
// use const Product\MAX;
// use const Product\AVG as AV;
use const Product\{MIN as MI ,MAX,AVG as AV};

// use function Product\disp;
// use function Product\check as ch;
use function Product\{disp,check as ch};

// use Product\Laptop as La;
// use Product\Dell;
use Product\{Laptop as La,Dell};

echo MI;
echo MAX;
echo AV;

disp();
ch();

$obj1=new La;
$obj2=new Dell;

 



?>

