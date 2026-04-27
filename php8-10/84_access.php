<?php
if(isset($_COOKIE["username"]))
    {
        echo"welcome " . $_COOKIE["username"];
    }
    else{
        echo "cookie not found";
    }
?>