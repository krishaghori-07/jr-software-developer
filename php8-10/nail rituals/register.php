<?php
include 'connect.php';
if(isset($_POST['register']))
    {
        $fullname=$_POST['fullname'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        //check empty fields
        if($fullname == "" || $email == "" || $password =="")
            {
                echo "<script>alert('all fields are required');</script>";
            }
            else{
                $query="insert into `users`(fullname,email,password) VALUES ('$fullname','$email','$password')";
                $data=mysqli_query($con,$query);
                if($data)
                    {
                        echo"<script>alert('registration succesful');</script>";
                    }
                    else
                        {
                             echo"<script>alert('registration failed');</script>";
                        }
            }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <style>
        body   {
            background:#ffe6f0
        }
        .box{
            width:400px;
            background:white;
            padding:30px;
            margin:auto;
            margin-top:80px;
            border-radius:15px;
            box-shadow:0px 0px 10px gray;
        }
        h2 {
            text-align:center;
            color:#ff3399;
            margin-bottom:20px;
        }
        .btn-custom{
            background:#ff3399;
            color:white;
            width:100%;
        }
        .btn-custom:hover{
            background:#e60073;
            color:white;
        }

    </style>
</head>
<body>
    <div class="box">
        <h2>register</h2>
        <form method="post">
            <div class="mb-3">
                <label>Full Name</label>
                <input type="text" name="fullname" class="form-control">
            </div>
             <div class="mb-3">
                <label>Email</label>
                <input type="text" name="email" class="form-control">
            </div>
             <div class="mb-3">
                <label>Password</label>
                <input type="text" name="password" class="form-control">
            </div>
            <button type="submit" name="register" class="btn btn-custom">Register</button>
        </form>
    </div>
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>