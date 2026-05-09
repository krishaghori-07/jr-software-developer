<?php
include'connect.php';
if(isset($_POST['submit']))
    {
        $name=$_POST['name'];
        $email=$_POST['email'];
        $mobile=$_POST['mobile'];
        $password=$_POST['password'];

        $sql="insert into `crud`(name,email,mobile,password) values ('$name','$email','$mobile','$password')";
        $result=mysqli_query($con,$sql);
        if($result)
            {
                echo "data inserted successfully";
            }
            else{
                die(mysqli_error($con));
            }
    }
?>
<html>
    <head>
        <title>
            hello world
        </title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    </head>
    <body>
        <div class="container my-5">
            <form method="post">
  <div class="form-group">
    <label >Name</label>
    <input type="text" class="form-control"  
    placeholder="enter your name" name="name" autocomplete="off">
</div>
<div class="form-group">
    <label >Email</label>
    <input type="email" class="form-control"  
    placeholder="enter your email" name="email" autocomplete="off">
</div>
<div class="form-group">
    <label >mobile</label>
    <input type="text" class="form-control"  
    placeholder="enter your mobile number" name="mobile" autocomplete="off">
</div>
<div class="form-group">
    <label >password</label>
    <input type="password" class="form-control"  
    placeholder="enter your password" name="password" autocomplete="off">
</div>


  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
        </div>

         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    </body>
   </html>