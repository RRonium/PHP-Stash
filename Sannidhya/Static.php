<?php
	function disp()
	{
		static $count=100;
		$count++;
		echo "Count is $count<BR>";
	}
	disp();
	disp();
	disp();
	#echo "Count is $count<BR>";
?>