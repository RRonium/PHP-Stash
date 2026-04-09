<!doctype html public "-//W3C//DTD HTML 4.01 Transitional//EN">
<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>
</title>
</head>
<head>
<title> Registration Form</title>
</head>
<?php
echo "<body>";
echo "<h1>Registration</h1>";
echo "<p>To register,please fill in your details below and click on the submit button</p>";
echo "<form action='Details.php' method='post' enctype='multipart/form-data'>";
echo "<div style='width:30em;'>";
echo "<table>";
echo "<tr>";
echo "<td> Name </td>";
echo "<td><input type='text'name='name' id='name'/></td>";
echo "</tr>";
echo "<tr>";
	echo "<td>Address</td>";
echo "	<td><textarea id='Address' rows='4' cols='20' name='Address'></textarea>";
echo "	</td>";
echo "</tr>";
echo "<tr>";
	echo "<td>School:</td>";
echo "	<td><input type='text' name='school' id='School'/></td>";
echo "</tr>";
echo "<tr>";
	echo "<td>Class:</td>";
echo "	<td><input type='text' name='class' id='class'/></td>";
echo "</tr>";
echo "<tr>";
	echo "<td>Email ID</td>";
echo "	<td><input type='text' name='email' id='email'/></td>";
echo "</tr>";
echo "<tr>";
echo "	<td>Password</td>";
echo "	<td><input type='password' name='password' id='password'/></td>";
echo "</tr>";
echo "<tr>";
	echo "<td>Confirm password</td>";
	echo "<td><input type='password' name='cpassword'id='cpassword'/></td>";
echo "</tr>";
echo "<tr>";
echo "	<td>Upload Address Proof</td>";
echo "		<td><input type='file' name='file' value=''/></td>";
	echo "</tr>";
	echo "<tr>";
		echo "<td></td>";
echo "	<td><input type='submit' name='submitButton' id='submitButton' value='Submit'/>";
echo "</tr>";
echo "</table>";
echo "</div>";
echo "</form>";
echo "</body>";
?>
</html>	