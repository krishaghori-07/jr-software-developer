<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>file upload in php</title>
</head>
<body>
    <h2>upload a file</h2>
    <form method="post" enctype="multipart/form-data">
        select file:
        <input type="file" name="myfile"><br>
        <input type="submit" name="submit" value="upload">
    </form>
    <?php
    if(isset($_POST['submit']))
        {
            $filename = $_FILES['myfile']['name'];
            $filetmp = $_FILES['myfile']['tmp_name'];
            $filesize = $_FILES['myfile']['size'];
            $fileerror = $_FILES['myfile']['error'];

            //destination folder
            $folder=$filename;

            if($fileerror == 0)
                {
                    if(move_uploaded_file($filetmp,$folder))
                        {
                            echo "file uploaded succesfully";
                        }
                        else{
                            echo"failed to upload file";

                        }
                 }
                else 
                            {
                            echo"error in file upload";
                        }

        }
    ?>
</body>
</html>