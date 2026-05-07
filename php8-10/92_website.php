<html>
    <head>
        <title>my website</title>
    </head>
    <body>
        <h1>welcome to my classes</h1>
        <form method="POST">
            Name : <input type="text" name="name">
            Email: <input type="text" name="mail">
            Password: <input type="password" name="pass">
        <input type="submit" name="sb">
        </form>

        <?php
        $con=mysqli_connect('localhost','root','','user');
        if(isset($_POST['sb']))
            {
                $name=$_POST['name'];
                $email=$_POST['mail'];
                $password=$_POST['pass'];

                $query = "INSERT INTO data(name,email,password)values ('$name','$email','$password')";
                $execute=mysqli_query($con,$query);
            }
        ?>
    </body>
</html>