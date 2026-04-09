<?php
$n1=$_POST['num1'];
$n2=$_POST['num2'];
if(!ctype_digit($n1)||!ctype_digit($n2))
{
	echo "Check the numbers";
}
else
{
	$result=$n1+$n2;
	echo $result;
}

?>