<?php
$arr=array("NAME"=>"SHIV","AGE"=>45);
$result=array_change_key_case($arr,CASE_LOWER);
print_r($result);
?>