<?php
$file=fopen("test.txt","w");
fprintf($file,"hello file");
fclose($file);
?>