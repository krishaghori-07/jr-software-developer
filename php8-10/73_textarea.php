<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <form action="" method="post">
    <textarea name="msg" placeholder="enter message"></textarea>
    <input type="submit" value="submit">
  </form> 
<?php
if(isset($_POST['msg']))
    {
        echo "message: " . $_POST['msg'];
    }
?>
</body>
</html>
