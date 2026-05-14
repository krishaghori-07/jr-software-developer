<?php
include '96_connect.php';
if(isset($_POST['signup']))
    {
        $name=$_POST['name'];
        $email=$_POST['email'];
        $password=$_POST['password'];

        $query="insert into users(name,email,password) values ('$name','$email','$password')";
        $data=mysqli_query($con,$query);
        if($data)
            {
                echo"account created succesfully";
            }
            else
                {
                    echo"failed";
                }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sign up</title>
</head>
<body>
    <h2>sign up page</h2>
    <form method="post">
        Name: <input type="text" name="name"><br>
        Email: <input type="text" name="email"><br>
        password: <input type="text" name="password"><br>
    <input type="submit" name="signup" value="sign Up">
    </form>
</body>
</html>