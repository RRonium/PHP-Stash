<?php
$x=1;
$closure=function() use(&$x)
{
	return ++$x;
};
echo $x."<br/>";
$closure();
echo"<br/>".$x."<br/>";
$closure();
echo"<br/>".$x."<br/>";
?>