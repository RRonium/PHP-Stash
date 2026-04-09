<?php
$nm="https://www.w3schoo��ls.co�m";
$nm1=filter_var($nm,FILTER_SANITIZE_NUMBER_INT);
echo '<BR>FILTER_SANITIZE_NUMBER_INT'.$nm1;
$nm1=filter_var($nm,FILTER_SANITIZE_SPECIAL_CHARS);
echo '<BR>FILTER_SANITIZE_SPECIAL_CHARS'.$nm1;
$nm1=filter_var($nm,FILTER_SANITIZE_STRING);
echo '<BR>FILTER_SANITIZE_STRING '.$nm1;
$nm1=filter_var($nm,FILTER_SANITIZE_URL);
echo '<BR>FILTER_SANITIZE_URL '.$nm1;
$nm1=filter_var($nm,FILTER_SANITIZE_EMAIL);
echo '<BR>FILTER_SANITIZE_EMAIL '.$nm1;
$nm1=filter_var($nm,FILTER_SANITIZE_NUMBER_FLOAT);
echo '<BR>FILTER_SANITIZE_NUMBER_FLOAT '.$nm1;
$nm1=filter_var($nm,FILTER_VALIDATE_INT);
echo '<BR>FILTER_VALIDATE_INT '.$nm1;
$nm1=filter_var($nm,FILTER_VALIDATE_EMAIL);
echo '<BR>FILTER_VALIDATE_EMAIL '.$nm1;
?>