<?php
$opts=array('http'=>array('method'=>"GET",'header'=>"Accept-language: en\r\n".
"Cookie:foo=bar\r\n"
));
$context=stream_context_create($opts);
$fp=fopen('http://www.test.com','r',false,$context);
fpassthru($fp);
fclose($fp);
?>