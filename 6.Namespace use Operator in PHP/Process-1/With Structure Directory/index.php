
<?php
 require('Product/India/Laptop.php');
 require('Product/Nepal/Laptop.php');
 require('Product/Laptop.php');
 //Accessing By Aliasing
 
 use const Product\India\NUM as IN;
 use function Product\India\disp as ID;
 use Product\India\Laptop as ILA;



 use const Product\Nepal\NUM as NN;
 use function Product\Nepal\disp as ND;
 use Product\Nepal\Laptop as NLA;



 use const Product\NUM as N;
 use function Product\disp as D;
 use Product\Laptop as LA;


 echo IN;
 ID();
 $obje=new ILA;

 echo NN;
 ND();
 $obje=new NLA;

 echo N;
 D();
 $obje=new LA;


?>

