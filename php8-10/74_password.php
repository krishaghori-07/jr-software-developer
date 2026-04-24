<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="password" name="pass" placeholder="enter password">
        <input type="submit" value=submit>
    </form>
    <?php
    if(isset($_POST['pass']))
        {
            echo "password: " . $_POST['pass'];
        }
    ?>
</body>
</html>