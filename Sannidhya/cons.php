<?php
define("PI","3.14");
$r=10;
#define("PI","5.14");
$area=PI*$r*$r;
#echo defined("pi");
echo PI;
echo "<BR>Area of Circle is:$area<BR>";
echo constant("PI");
?>