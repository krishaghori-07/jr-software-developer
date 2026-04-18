<?php
$students=array(
    array("name"=>"shiv","age"=>40,"city"=>"rajkot"),
    array("name"=>"rahul","age"=>22,"city"=>"ahemdabad"),
    array("name"=>"priya","age"=>21,"city"=>"surat")
);
//access values
echo $students[0]["name"] . "<br>";
echo $students[0]["age"] . "<br>";
echo $students[0]["city"] . "<br>";

echo"<br>";
echo $students[1]["name"] . "<br>";
echo $students[1]["age"] . "<br>";
echo $students[1]["city"] . "<br>";

echo"<br>";
echo $students[2]["name"] . "<br>";
echo $students[2]["age"] . "<br>";
echo $students[2]["city"] . "<br>";

?>