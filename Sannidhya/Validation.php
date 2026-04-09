<?php
$name=$_POST['tName'];
$gender=strtolower($_POST['tGender']);

if(empty($name)==false && empty($gender)==false)
{

if(preg_match('/^[a-zA-Z]/',$name))
{
echo "Valid Name<br>";
}
else 
{
	echo "InValid Name<br>";
}
if(preg_match('/^(male|female)$/',$gender))
{
echo "Valid Gender Value<br>";
}
else 
{
	echo "INValid Gender Value<br>";
}
}
else
{
	echo "<h1>Data Should not be blank</h1>";
}
?>
<html>
<body bgColor="lightgreen">
<H1>Regular Expression</H1>
<HR>
<form method="post" action="Validation.php">
Name <input type="text" name="tName"><br>
Gender <input type="text" name="tGender"><br>
<input type="submit">
</form>
</body>
</html>