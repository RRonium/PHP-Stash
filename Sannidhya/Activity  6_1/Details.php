<!doctype html>
<html>
<head><title>thank you</title></head>

 <body>
<p>Thank you for registering. Here is the informaionyou submitted:</p>
<?php
if(!empty($_POST['school']))
{
	echo "School Name is supplied";
}
else
{
	echo "School Name is not supplied";
}
?>
<table>
<tr><td>Name:</td><td><?php echo $_POST["name"]?></td></tr>
<tr><td>School</td><td><?php echo $_POST["school"]?></td></tr>
<tr><td>Class:</td><td><?php echo $_POST["class"]?></td></tr>
<tr><td>email:</td><td><?php echo $_POST["email"]?></td></tr>
<tr><td>password:</td><td><?php echo $_POST["password"]?></td></tr>
<tr><td>address:</td><td><?php echo $_POST["Address"]?></td></tr>
</table>
</body>

</html>
<?php
	$pathname=$_FILES["file"]["tmp_name"];
	
	$filesize=$_FILES["file"]["size"];
	echo $filesize;
	if(move_uploaded_file($_FILES["file"]["tmp_name"],"C:\\temp\\abc.png"))
	{
		echo "Address Proof: Successfully uploaded.<br>";
	}
	else
	{
		echo "Address Proof: There was a problem uploading";	
	}	
?>