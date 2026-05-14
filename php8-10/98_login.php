<?php
include '96_connect.php';
if(isset($_POST['login']))
    {
        $email=$_POST['email'];
        $password=$_POST['password'];
        $query="select * from users where email='$email' AND password='$password'";
        $data=mysqli_query($con,$query);
        $total=mysqli_num_rows($data);
        if($total == 1)
            {
                echo"login successful";
            }
            else
                {
                    echo"invalid email or password";
                }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
    <h2>login page</h2>
    <form method="post">
        Email: <input type="email" name="email" autocomplete="off"> <br>
        Password: <input type="password" name="password" autocomplete="off"> <br>
        <input type="submit" name="login" value="login">
    </form>
</body>
</html>