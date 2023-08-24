<?php
include "navbar.php";
?>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Contact | GANI Auto Mobiles</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
<style>
body {
  width: 100%;
   height: 140vh;
  background-image: url('contact.jpeg');
  background-repeat: no-repeat;
  background-position: center;
  background-size: cover;
}
</style> 
</head>
<body>
<div class="row">
  <div class="col">

  </div>
  <div class="col" style="border: 2px solid white; padding: 30px; margin-top: 30px; border-radius: 20px; background: rgba(255,255,255,0.25px); backdrop-filter: blur(15px);">
  <h1 align="center" style="color: rgb(140,233,240); font-size: 43px;">Contact Us</h1>

  <form action="contact1.php" method="get"  enctype="multipart/form-data">
  <label for="name" class="form-label" style="color: rgb(209,129,230); font-size: 23px;">Name:</label>
  <input id="name" class="form-control" type="text" name="name" placeholder="Enter your name" required>

  <label for="email" class="form-label" style="color: rgb(209,129,230); font-size: 23px;">Email:</label> 
  <input id="email" class="form-control" type="email" name="email" placeholder="Enter your email" required>

  <label for="number" class="form-label" style="color: rgb(209,129,230); font-size: 23px;">Phone Number:</label>
  <input id="number" class="form-control" type="tel" name="number" placeholder="Enter your phone number" required>
   
   <label for="upload" class="form-label" style="color: rgb(209,129,230); font-size: 23px;">Upload the Product Image:</label>
  <input id="upload" class="form-control" type="file" name="img">

  
  <label for="message" class="form-label" style="color: rgb(209,129,230); font-size: 23px;">Message:</label>
  <textarea name="message" class="form-control" id="message" name="message" cols="30" rows="3" placeholder="Enter your message" required></textarea> <br>
  <input type="submit" value="Send Message" name="submit" class="btn btn-primary">
  </div>
  <div class="col"></div>
  </div>
  </form>
</body>
</html>
