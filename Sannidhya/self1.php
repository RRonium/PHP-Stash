<?php
if($_POST)
{
	$N=$_POST["nm"];
	$A=$_POST["age"];
	if(empty($_POST["nm"])||empty($_POST["age"]))
	{
		echo "Name and Age required";
	}
	else
	{
		echo "Hello $N UR Age is $A";
	}
}
?>
<!doctype HTML>
<html>
<head>
<title>
	Data Capture Form
</title>
</head>
<body>

<form action="<?php $_PHP_SELF ?>" method="POSt">
<Table align=center>
<tr><td colspan=2 align=Center> Provide UR Data</td></tr>
<tr><td>Enter UR Name</td><td><input name="nm" type="text" placeholder="please enter name"/></td></tr>
<tr><td>Enter UR Age</td><td><input name="age" type="number"/></td></tr>
<tr><td><input type="submit"/></td><td><input type="reset"/></td></tr>
</table>
</form>
</body>
</html>