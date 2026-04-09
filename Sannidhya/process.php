<?php
if($_POST)
{
	$N=$_POST["nm"];
	$A=$_POST["age"];
	if(empty($_POST["nm"])||empty($_POST["age"]))
	{
		echo "Name and Age required";
	}
	else
	{
		echo "Hello $N UR Age is $A";
	}
}
else
{
	echo "Should use POST method"; 
}
?>