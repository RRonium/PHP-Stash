<?php
function calc_tax($product_category,$product_name,$price)
{
	if($product_category=="Mobile")
	{
	$total_price=(12.5/100)*$price+$price;
	echo"Total price of".$product_name."is:$"
	.$total_price."<br>";
	
	}
if($product_category=="Medicine")
{
	$total_price=$price;
	echo"Total price of".$product_name."is: $"
	.$total_price."<br>";
	
}
}
$product_category="Medicine";
calc_tax($product_category,"Paracetemol",8000);
$product_category="Mobile";
calc_tax($product_category,"GV3",3000);
?>