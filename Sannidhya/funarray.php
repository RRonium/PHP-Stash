<?php
	$names=array("a"=>"Sannidhya","b"=>"Anurag","c"=>"Puchi","d"=>"Sona","e"=>"Raj");
	$marks=array("a"=>10,"b"=>20,"c"=>5,"d"=>3,"e"=>8);
	print_r(array_rand($names,3));
	echo "<BR>";
	print_r(array_chunk($names,2));
		echo "<BR>";
	$result=array_combine($names,$marks);
	print_r($result);
?>