<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="checkbox" name="hobby[]" value="cricket">cricket
        <input type="checkbox" name="hobby[]" value="music">music
        <input type="checkbox" name="hobby[]" value="reading">reading
        <input type="submit" value="submit">
    </form>
    <?php
    if(isset($_POST['hobby']))
        {
            foreach($_POST['hobby'] as $h)
                {
                    echo $h . "<br>";
                }
        }
    ?>
</body>
</html>