<?php
include 'connect.php';
if(isset($_GET['deleteid']))
    {
        $id=$_GET['deleteid'];
        $sql="delete from `crud` where id=$id";
        $result=mysqli_query($con,$sql);
        if($result)
            {
                echo"deleted succesfully";
            }
            else{
                die(mysqli_error($con));
            }
    }
?>