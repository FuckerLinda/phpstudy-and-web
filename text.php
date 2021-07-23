<?php

$words=$_GET["message"];

$file=fopen("save.txt","a");
echo fwrite($file,$words);
echo fwrite($file,"\r\n");
fclose($file);

?>