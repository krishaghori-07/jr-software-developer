<?php
include 'connect.php';
if(isset($_POST['feedback']))
    {
        $name=$_POST['name'];
        $email=$_POST['email'];
        $message=$_POST['message'];
        $rating=$_POST['rating'];

        $query="insert into feedbacks(name,email,message,rating) values('$name','$email','$message','$rating')";

        $data=mysqli_query($con,$query);
        if($data)
            {
                echo"<script>alert('thank you for your valuable feedback');</script>";
                
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
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
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
        width:70px;
        height:70px;
        border-radius:50%;
        object-fit:cover;
    }
    .nav-link{
        color:white !important;
        margin-left:15px;
        font-size:18px;

    }
    .nav-link:hover{
        color:black !important;
    }
    .hero{
      background:url('banner.jpg')center/cover;
    height:500px;
    align-items:center;
    display:flex;
    justify-content:center;
    text-align:center;
    color:#fff;
    }
    .hero h1{
        background:rgba(0,0,0,0.5);
        padding:20px;
        border-radius:10px;
    }
    .section-title{
        text-align:center;
        color:#ff3399;
        margin:40px 0 20px;
    }
    .card img{
        height:250px;
        object-fit:cover;
    }
    .gallery-img{
        width:100%;
        height:300px;
        object-fit:cover;
        border-radius:10px;
        margin-top:15px;
    }
    .review,.feedback-box,.card{
        box-shadow:0 0 10px #ccc;
    }
    .review,.feedback-box{
        background:#fff;
        padding:20px;
        border-radius:12px;
    }
     /*footer */
    footer{
        background:#ff3399;
        color:white;
        text-align:center;
        padding:20px;
        margin:40px
    }
    .btn-custom{
        background:#ff3399;
        color:#fff;
    }
</style>
</head>
<body>
     <!---navbar--->
<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a href="#" class="navbar-brand" >
            <img src="images/logo.png" alt="logo">
            Nail Rituals
        </a>
        <button class="navbar-toggler bg-light" type="submit" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                <a href="home.php" class="nav-link">Home</a>
            </li>
            <li class="nav-item">
                <a href="about_us.php" class="nav-link">About US</a>
            </li>
            <li class="nav-item">
                <a href="gallery.php" class="nav-link">Gallery</a>
            </li>
            <li class="nav-item">
                <a href="book_appointment.php" class="nav-link">Appoitment</a>
            </li>
            <li class="nav-item">
                <a href="contact_us.php" class="nav-link">Contact Us</a>
            </li>
            <li class="nav-item">
                <a href="login.php" class="nav-link">Login</a>
         
            </li>    </ul>
        </div>
    </div>
</nav>
<div class="hero">
    <h1>
    Home Page
    </h1>
</div>
<div class="container">
    <h2 class="section-title">
        Nail Designs
    </h2>

   <div class="row">
    <div class="col-md-4">
        <div class="card">
            <img src="images/img1.jpg" class="card-img-top">
            <div class="card-body">
                <h5>Acrylic Nails</h5>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <img src="images/img2.jpeg" class="card-img-top">
            <div class="card-body">
                <h5>Gel Extensions</h5>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <img src="images/img3.jpg" class="card-img-top">
            <div class="card-body">
                <h5>French Tips</h5>
            </div>
        </div>
    </div>
   </div>
   <h2 class="section-title">
    Gallery
   </h2>
   <div class="row">
    <div class="col-md-4">
        <img src="images/gallery1.jpg" class="gallery-img">
    </div>
    <div class="col-md-4">
        <img src="images/gallery2.jpg" class="gallery-img">
    </div>
    <div class="col-md-4">
        <img src="images/gallery3.jpg" class="gallery-img">
    </div>
    <div class="col-md-4">
        <img src="images/gallery4.jpg" class="gallery-img">
    </div>
    <div class="col-md-4">
        <img src="images/gallery5.jpg" class="gallery-img">
    </div>
    <div class="col-md-4">
        <img src="images/gallery6.jpg" class="gallery-img">
    </div>
   </div>
   <h2 class="section-title">Customer Reviews</h2>
   <div class="row g-4">
    <?php
    $query="SELECT * FROM feedbacks ORDER BY id DESC";
    $data=mysqli_query($con,$query);
    while($row=mysqli_fetch_assoc($data))
    {
        ?>
        <div class="col-md-4">
            <div class="review">
                <h5>
                    <?php
                    echo $row['name'];
                    ?>
                    <span style="color:gold;">
                        <?php
                        for($i=1; $i<=$row['rating']; $i++)
                        {
                            echo'<i class="bi bi-star-fill"></i>';
                        }
                        ?>
                    </span>
                </h5>
                <p>
                    <?php
                    echo $row['message'];?>
                </p>
            </div>
             </div>
            <?php
    }
    ?>
       
    
   </div>
</div>
<h2 class="section-title">Feedback Form</h2>
<div class="feedback-box mb-5">
    <form method="POST">
        <div class="mb-3">
            <label>Name</label>
            <input type="text" name="name" class="form-control" required>
        </div>
         <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control" required>
        </div>
         <div class="mb-3">
            <label>Message</label>
           <textarea name="message" class="form-control" rows="4" required></textarea>   </div>
           <div class="mb-3">
            <label>Rating</label>
            <select name="rating" class="form-control" required>
                <option value="">Select Rating</option>
                <option value="1">⭐</option>
                <option value="2">⭐⭐</option>
                <option value="3">⭐⭐⭐</option>
                <option value="4">⭐⭐⭐⭐</option>
                <option value="5">⭐⭐⭐⭐⭐</option>
            </select>
           </div>
           <button type="submit" name="feedback" class="btn btn-custom">
        Send Feedback
           </button>
    </form>
</div>
<!-----------footer---------->
<footer><h5>
    Nail Rituals
</h5>
<p>Beautiful Nails,Beautiful You</p>
<p><i class="bi bi-telephone-fill"></i>
+91 9876567890</p>
<p><i class="bi bi-envelope-fill"></i>
nailrituals@gmail.com</p>
<p><i class="bi bi-instagram">
</i>
  @nailrituals</p>
  <p>
    2026 Nail studio | All Rights Reserved
  </p>
</footer>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>