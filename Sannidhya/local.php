<?php
	$Number=10;
	function local()
	{
		global $Number;
		$Number=$Number+5;
		echo "In function:$Number<BR>";
		#echo "Global In function:$Number<BR>";
	}
	local();
	echo "Outside function:$Number<BR>";
?>