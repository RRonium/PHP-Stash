<?php
	$anon=create_function('$a,$b','return $a+$b;');
	$test=function($a,$b)
	{
		return $a+$b;
	};
	function hello()
	{
		echo "<BR>Hello from function"; 
	}
	function add($n1,$n2)
	{
		$result=$n1+$n2;
		echo "<BR>Sum is:$result";
	}
	echo "Anonymous Function called:";
	echo ($anon(10,20));
	echo "<BR>2nd Anonymous Function called:";
	echo ($test(10,20));
	

	hello();
	add(5,10);
	?>