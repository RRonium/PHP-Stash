<?php
$u=$_POST['uname'];
$p=$_POST['Pass'];
echo $u2 ="Sannid2105";
echo $p2 ="Ron2105";
if($u=$u2||$p=$p2)
{
	include('Welcome2.php');
}
else
{
	include('Login 2.php');
}
?>