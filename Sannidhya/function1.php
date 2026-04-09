<?php
function Display()
{
	echo "Sannidhya<BR>";
}
function add($num1,$num2)
{
	$result=$num1+$num2;
	//echo "Result is:$result<BR>";
	return $result;
}
Display();
$ret=add(5,6);
echo "Return is:$ret";
?>