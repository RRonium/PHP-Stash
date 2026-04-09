<?php
$a=$_POST["num"];
$b=0;
	if($a>5)
	{
		header("Location:http://mail.google.com");
	}
	else
	{
		echo "PL supply value";
	}
	if(isset($_POST["expo"]))
	{
		$b=$_POST["expo"];
	}
	$c=1;
	$result=1;
	for($c=1;$c<=$b;$c++)
	{
		$result=$result*$a;		
	}
	echo "The result is:$result";
	
?>