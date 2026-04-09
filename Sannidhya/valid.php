<?php
	if(empty($_POST["num"]))
	{
		echo "Its empty";
	}
	else
	{
		echo "Its OK";
	}
	$n=$_POST["num"];
	#$value=filter_var($n,FILTER_SANITIZE_NUMBER_INT);
	#$value=filter_var($_POST["url"],FILTER_SANITIZE_URL);
	$value=filter_var($_POST["Char"],FILTER_SANITIZE_EMAIL);
	echo "<BR>Output:$value";
?>