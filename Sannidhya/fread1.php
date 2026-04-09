<?php
	if(file_exists("C:\\temp\\MyFile.txt"))
	{
			$file=fopen("C:\\temp\\MyFile.txt","rb");
			//echo "File Size:".filesize("File1.txt")."<BR>";
	}
	else
	{
		echo "File is not available to open<br>";
		exit();
	}
	while(!feof($file))
	{
		echo fgetc($file);
	}
	echo "Time:".date("F d Y H:i:s",fileatime("C:\\temp\\MyFile.txt"))."<br>";
	echo "Time:".date("F d Y H:i:s",filemtime("C:\\temp\\MyFile.txt"))."<br>";
	echo "FileType:".filetype("C:\\temp\\BFLY7.gif");
?>