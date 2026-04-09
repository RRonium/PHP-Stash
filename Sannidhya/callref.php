<?php
	function sum(&$num)
	{
		$num++;
		echo "Num in function is $num<BR>";	//6
	}
	$num=5;
	echo "Num before call is $num<BR>";	//5
	sum($num);
	echo "Num after call is $num<BR>";	//6
?>