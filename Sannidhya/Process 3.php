<?php
$N=$_POST["ra"];
$A=$_POST["he"];
define("pi","3.14");
$vol=pi*$N*$N*$A;
echo "Volume of cylinder is $vol";
?>