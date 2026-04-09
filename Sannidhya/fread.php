<?php
	if(file_exists("File1.txt"))
	{
			$file=fopen("File1.txt","rb");
			echo "File Size:".filesize("File1.txt");
	}
	else
	{
		echo "File is not available to open<br>";
		exit();
	}
	if($file==false)
	{
		die("Not able to open the file");
	}
	else
	{
		echo "File is available to read<br>";
	}
	//$contents=fread($file,50);
	//$contents=fgetc($file);
	//$contents=fgets($file,10);
	//print_r(file("C:\\temp\\MyFile.txt"));
	//$contents=file_get_contents("C:\\temp\\MyFile.txt");
	print_r(fgetcsv($file,12,":"));
	//echo "Here is the contents ".$contents;
?>