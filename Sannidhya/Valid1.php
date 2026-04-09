<?php
$name=$_POST['tname'];
$course=$_POST['tcourse'];
$fee=$_POST['tfee'];

if(preg_match('/(MCA|BCA|BBA|MBA)/',$course)==false)
{
	echo "<h1>Invalid Course</h1>";
}
if(preg_match('/\d/',$fee)==false)
{
	echo "<h1>Fee should be number only</h1>";
}
echo "<H1>Name : $name<br>";
echo "Course : $course<br>";
echo "Fee : $fee</H1>";
?>
<html>
<body>
<h1>Validation Check</h1>
<hr>
<form method="post" action="Valid1.php">
Name <input type="text" name="tname"><br>
Course <input type="text" name="tcourse"><br>
Fee <input type="text" name="tfee"><br>
<input type="submit">
</form>
</body>
</html>