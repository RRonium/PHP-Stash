<?php
$emailstr=$_GET['temail'];
if(preg_match("/^[A-Za-z0-9]+@[A-Za-z0-9]+\.[a-zA-Z]{2,4}\z/",$emailstr))
{
	echo "<H1>Valid EMAIL Address</H1>";
}
else
{
	echo "<H1>In-Valid EMAIL Address</H1>";
}
?>
<html>
<body>
<h1>email checking</h1>
<hr>
<form method="get" action="email.php">
email address <input type="text" name="temail" size="50"><br>
<input type="submit">
</form>
</body>
</html>