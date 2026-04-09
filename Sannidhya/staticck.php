<?php
	function disp()
	{
		static $var=0;
		$var=$var+1;
		echo "Value is:$var<BR>";
	}
	for($ctr=1;$ctr<=3;$ctr++)
	{
		disp();
	}
?>
	