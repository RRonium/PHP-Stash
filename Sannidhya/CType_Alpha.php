<?php
$strings = array('AbCdzyZ9', 'foo!#$bar');
foreach ($strings as $testcase) {
echo "<h1><br>";
if (ctype_alnum($testcase))
{
echo "The string $testcase consists of all letters or digits.\n";
}
else
{
echo "The string $testcase does not consist of all letters or digits.\n";
}
}
?>