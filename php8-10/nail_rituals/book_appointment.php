<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
<style>
    *{
        margin:0;
        padding:0;
        box-sizing:border-box;
    }
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
    /*form section */
    .appointment-box{
        background:white;
        padding:30px;
        border-radius:15px;
        box-shadow:0px 0px 10px gray;
        margin-top:50px;
        margin-bottom:50px;
    }
    .heading{
        text-align:center;
        color:#ff3399;
        margin-bottom:25px;

    }
    .btn-custom{
        background:#ff3399;
        color:white;
        width:100%;
    }
    .btn-custom:hover{
        background:#e60073;
        color:white;
    }
      /*footer */
    footer{
        background:#ff3399;
        color:white;
        text-align:center;
        padding:20px;
        margin:40px
    }
</style>
</head>
<body>
    <!---navbar--->
<nav class="navbar navbar-exoand-lg">
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
                <a href="about.php" class="nav-link">About US</a>
            </li>
            <li class="nav-item">
                <a href="gallery.php" class="nav-link">Gallery</a>
            </li>
            <li class="nav-item">
                <a href="appoitment.php" class="nav-link">Appoitment</a>
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
<!--appointment form------->
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="appointment-box">
                <h2 class="heading">
                    Book Your appointment
                </h2>
                <form method="POST">
                    <div class="mb-3">
                        <label>Fullname</label>
                        <input type="text" name="fullname" class="form-control" required>
                    </div>
                     <div class="mb-3">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control" required>
                    </div>
                     <div class="mb-3">
                        <label>phone Number</label>
                        <input type="number" name="phone" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label>Select Services</label>
                        <select name="services" class="form-select" required>
                            <option value="">
                                Choose Service
                            </option>
                            <option>Acrylic Nail Extensions</option>
                            <option>Gel nail Extensions</option>
                            <option>Nail Art</option>
                            <option>French Tips</option>
                            <option>Manicure</option>
                            <option>Pedicure</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label>Appointment Date</label>
                        <input type="date" name="date" class="form-control" required>
                    </div>
                      <div class="mb-3">
                        <label>Appointment Time</label>
                        <input type="time" name="time" class="form-control" required>
                    </div>
                      <div class="mb-3">
                        <label>Message</label>
                       <textarea name="message" rows="4" class="form-control"></textarea>  
                   </div>
                   <button type="submit" name="book" class="btn btn-custom">
                    Book Appointment
                   </button>
                </form>
            </div>
        </div>
    </div>
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