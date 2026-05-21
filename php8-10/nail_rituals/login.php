<?php
    include 'connect.php';
    if(isset($_POST['login']))
        {
            $email=$_POST['email'];
            $password=$_POST['password'];
            if($email == "" || $password == "")
                {
                    echo "<script>alert('all fields are required');</script>";
                }
                else
                    {
                        $query="select * from regestration where email='$email' AND password='$password'";
                        $data=mysqli_query($con,$query);
                        $total=mysqli_num_rows($data);
                        if($total==1)
                            {
                            echo "<script>alert('login successful');</script>";
                 
                        }
                        else{
                            echo "<script>alert('invalid email or password');</script>";
             
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
    body{
        background:#fff0f5;
        font-family:Arial;
    }
    /*navbar */
    .navbar{
        background:#ff3399;
    }
    .navbar-brand{
        color:white !important;
        font-size:25px;
        font-weight:bold;
    }
    .navbar-brand img{
        width:60px;
        height:60px;
        border-radius:50%;
        object-fit:cover;
    }
    .nav-link{
        color:white !important;
        margin-left:15px;
        font-size:18px
    }
    .nav-link:hover{
        color:black !important;
    }
    /*  login box */
    .login-box{
        width:400px;
        background:white;
        padding:30px;
        border-radius:15px;
        margin:auto;
        margin-top:70px;
        box-shadow:0px 0px 10px gray;
    }
    h2{
        text-align:center;
        color:#ff3399;
        margin-bottom:20px;
    }
    .btn-custom{
        background:#ff3399;
        color:white;
        width:100%;
    }
    .btn-custom:hover
    {
        background:#e60073;
        color:white;
    }
</style>
</head>
<body>
<!---navbar---->
<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="images/logo.png" alt="logo">Nail Rituals
        </a>
        <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" >
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a href="home.php" class="nav-link">
                        Home
                    </a>
                </li>
                <li class="nav-item">
                    <a href="about.php" class="nav-link">
                      About Us
                    </a>
                </li>
                <li class="nav-item">
                    <a href="gallery.php" class="nav-link">
                       Gallery
                    </a>
                </li>
                <li class="nav-item">
                    <a href="appoitment.php" class="nav-link">
                       Appoitment
                    </a>
                </li>
                <li class="nav-item">
                    <a href="contact.php" class="nav-link">
                      Contact Us
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!---login form---->
<div class="login-box">
    <h2>login</h2>
    <form method="POST">
       
        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Password</label>
            <input type="password" name="password" class="form-control" required>
        </div>
        <button type="submit" name="login" class="btn btn-custom">
            Login
        </button>

    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>