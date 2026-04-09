<?php
$file=fopen("ProductDetails.txt","a+");
$ID=$_POST["ProductID"];
$Name=$_POST["Productname"];
$Price=$_POST["Price"];
$text="\r".$ID."\t\t".$Name."\t\t".$Price."\r";
if(fwrite($file,$text)==false)
{
	die("can't write");
}
fclose($file);
print("Data written successfully");
?>