<?php
include 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>crud operation</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <button class="btn btn-primary my-5"> <a href="93_user.php" class="text-light">Add users</a> </button>
        <table class="table">
  <thead>
    <tr>
      <th scope="col">sl no</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Mobile</th>
      <th scope="col">Password</th>
      <th scope="col">operations</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $sql="select * from `crud`";
    $result=mysqli_query($con,$sql);
    if($result)
    {
      while($row=mysqli_fetch_assoc($result))
        {
          $id=$row['id'];
          $name=$row['name'];
          $email=$row['email'];
          $mobile=$row['mobile'];
          $password=$row['password'];
          echo'<tr>
      <th scope="row">'.$id.'</th>
      <td>'.$name.'</td>
      <td>'.$email.'</td>
      <td>'.$mobile.'</td>
      <td>'.$password.'</td>
       <td>
      <button class="btn btn-primary"><a href="update.php" class="text-light">update</a></button>
      <button class="btn btn-danger"><a href="delete.php?deleteid='.$id.'" class="text-light">delete</a></button>
    </td>
    </tr>
          ';

        }
    }
    ?>
   
    <!----
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>John</td>
      <td>Doe</td>
      <td>@social</td>
    </tr>------>
  </tbody>
</table>
    </div>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>