<?php
	function test(&$var)
	{
		$var++;
		echo "In function Value:$var<BR>";
	}
	$num=5;
	echo "Outside Before call:$num<BR>";
	test($num);		
	echo "Outside After call:$num<BR>";
	?>