<?php
#$names=array("Saanidhya","Saachi","Rolly","Anurag","Sona");
$names[0]="NIIT";
$names[1]="WIPRO";
$names[2]="TCS";
$names[3]="APTECH";
$names[4]="STG";
for($i=0;$i<=4;$i++)
{
	echo $names[$i]."<BR>";
}
foreach($names as $val)
{
	echo "Value:$val<BR>";
}
$num="100";
var_dump($names);
$Marks=array("Saanidhya"=>100,"Saachi"=>98,"Anurag"=>0);
echo $Marks["Saanidhya"]."<BR>";
echo $Marks["Saachi"];
?>