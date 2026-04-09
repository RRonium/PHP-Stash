<?php
#$Marks=array("Sannidhya"=>100,"Saachi"=>98,"Anurag"=>0);
$Marks=array("Sannidhya"=>array("Maths"=>100,"Science"=>99,"Hindi"=>97),
			 "Saachi"=>array("Maths"=>98,"Science"=>96,"Hindi"=>100),
			 "Sona"=>array("Maths"=>100,"Science"=>90,"Hindi"=>88));
echo $Marks["Sannidhya"]["Maths"]."<BR>";
echo var_dump($Marks);
?>