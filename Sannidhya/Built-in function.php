<?php
$birds=array("a"=>"Parrot", "b"=>"Crow", "c"=>"Peacock");
//$my_array=array ("a" =>"Parrot","b"=>"Crow","c"=>"Sparrow");
//print_r(array_rand($birds,1));
//print_r(array_chunk($birds,3));
$animals=array("Lion","Jaguar","Cheetah");
$animals1=array("1","b","c");
//print_r(array_combine($animals,$animals1));
list($a,$b,$c)=$animals;
//echo "Values are $a,$b and $c";
//print_r(array_merge($animals,$animals1));
//$value=array_pop($animals);
//echo $value;
array_push($animals,"Elephant");
//print_r($animals);
//sort($animals);
//rsort($animals);
//asort($animals);
arsort($animals);
print_r($animals);
echo "<br>Value is".array_search("Elephant",$animals);
echo "<br>Value is".in_array(1,$animals1,FALSE);
echo "<BR>Date:".date("d, D, j, l, N, w, z, W, ");
?>