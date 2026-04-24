<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="name" placeholder="enter name"><br>
        <input type="submit" value="submit">
    </form>
    <?php
    if(isset($_POST['name']))
        {
            echo "name: " . $_POST['name'];
        }
    ?>
</body>
</html>