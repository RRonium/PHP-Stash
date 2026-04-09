<html>
<head>
<title>PHP</title>
</head>
<body>
<?php
	$name="Sannidhya";
	$age=11;
	$phone=1234567890;
	if($age<12)
	{
		$value="<font color=blue> You are a kid and the Contact No.:$phone</font><br>";
		print($value);
	}
	$value="My name is $name and age is $age";
	print($value);
	
	print <<<Hai
	this is <b>testing</b>
	here <font color=magenta>document</font>
Hai;
	$var = <<<Hello
	this is <b>testing</b>
	here <font color=magenta>document</font>
Hello;
	
	
	print $var;
?>