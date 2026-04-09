<?php
	if(file_exists("File1.txt"))
	{
			$file=fopen("File1.txt","ab");
	}
	else
	{
		echo "File is not available to open<br>";
		exit();
	}
	fwrite($file,"Hello Sannidhya");
	fclose($file);
?>