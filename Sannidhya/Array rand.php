<?php
$birds=array("a"=>"Parrot","b"=>"Crow","c"=>"Peacock");
//$birds=array("Parrot","Crow","Peacock");
$my_array = array ("a" =>"Parrot1", "d" => "Crow1",
"e"=>"Sparrow1");
//print_r(array_chunk($birds,1));
//print_r(array_combine($birds,$my_array));
//list($a,$b,$c)=$birds;
//echo "Names are:a $a,a $b,a $c";
//print_r(array_merge($birds,$my_array));
/*$element=array_pop($birds);
echo "element poped:$element";
$element=array_pop($birds);
echo "element poped:$element";
$element=array_pop($birds);
echo "element poped:$element";
$element=array_pop($birds);
echo "element poped:$element";*/
//echo (array_push($birds,array("d"=>"Pigeon")));
//print_r($birds);
//sort($birds);
//asort($birds);
//rsort($birds);
//arsort($birds);
//print_r($birds);
echo(array_search("Crow",$birds,true));
echo(in_array("Crow",$birds,true));
?>