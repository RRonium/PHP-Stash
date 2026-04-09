<?php
echo"<table border='1'>";
echo"<caption><b>Flower Shop</b></caption";
echo"<tr>";
echo"<th>Flower name</th>";
echo"<th>Price</th>";
echo"<th>Quantity</th>";
echo"</tr>";
$flower_shop=array("category1"=> array("lotus",2.25, 10),
"category2" => array("white rose",1.75,15),
"category3" => array("red rose", 2.15,8)
);
echo"<tr><td>";
echo$flower_shop['category1'][0]."</td>";
echo"<td>".$flower_shop['category1'][1]."</td>";
echo "<td>".$flower_shop['category1'][2]."</td></tr>";
echo"<tr><td>" .$flower_shop['category2'][0]."</td>";
echo"<td>".$flower_shop['category2'][1]."</td>";
 echo"<td>".$flower_shop['category2'][2]."</td></tr>";
 echo"<tr><td>".$flower_shop['category3'][0]."</td>";
 echo"<td>".$flower_shop['category3'][1]."</td>";
 echo"<td>".$flower_shop['category3'][2]."</td></tr>";
 echo"</table>";
 ?>