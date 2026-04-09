<?php
$v1 = $_POST["val1"]; 
$v2 = $_POST["val2"];
if (!isset($_POST['submit'])) 
{ 

?>
<html><head>
<title>
	Add
</title>
</head>
<body bgcolor="red">
<form method="post" action="<?php echo $PHP_SELF;?>"> 
First number:<input type="text" placeholder="1st number" name="val1"/><br>
Second number:<input type="text" placeholder="2nd number" name="val2"/><br>
<input type="submit"/><input type="reset"/><br>
</form>
</body>
</html>
<?php
} 
else 
{ 
		$result=$v1+$v2;
		echo "Sum is : $result";
}
?>