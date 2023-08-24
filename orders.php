<?php
include "navbar.php";
?>

<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
<style>
body {
  width: 100%;
  height: 100%;
  background-image: url('order.jpeg');
  background-repeat: no-repeat;
  background-position: center;
  background-size: cover;
}
</style> 
</head>
<body>
<div class="container" style="border: 2px solid white; padding: 30px; margin-top: 30px; border-radius: 20px; background: rgba(255,255,255,0.25px); backdrop-filter: blur(5px); height: 400px; width: 600px;">
<h1 align="center" style="color: rgb(140,233,240); font-size: 43px;">ORDERS</h1>
<br>
<form action="orders1.php" method="get">
  <div class="row">
  <div class="col">
  <label class="form-label" for="name" style="color: rgb(209,129,230); font-size: 23px;">Name:</label>
  <input class="form-control" id="name" name="name" type="text" placeholder="Enter your name" required> 
  </div>
  <div class="col">
  <label class="form-label" for="number" style="color: rgb(209,129,230); font-size: 23px;">Phone Number:</label>
  <input class="form-control" id="number" name="number" type="tel" placeholder="Enter your mobile number" required>
  </div>
  </div>
  <div class="row">
  <div class="col">
  <label class="form-label" for="address" style="color: rgb(209,129,230); font-size: 23px;">Address:</label>
  <input class="form-control" id="address" name="address" type="text" placeholder="Enter your address" required>
  </div>
  <div class="col">
  <label class="form-label" for="pin" style="color: rgb(209,129,230); font-size: 23px;">Pincode:</label>
  <input class="form-control" id="pin" name="pin" type="text" placeholder="Enter your pincode" required>
  </div>
  </div>
  <div class="row">
  <div class="col">
  <label class="form-label" for="book" style="color: rgb(209,129,230); font-size: 23px;">Car Name:</label>
  <input class="form-control" id="book" name="book" type="text" placeholder="Car Name" required>
  </div>
  <div class="col">
  <label class="form-label" for="copies" style="color: rgb(209,129,230); font-size: 23px;">No.of.Cars:</label>
  <input class="form-control" id="copies" name="copies"  type="text" placeholder="Number of Cars" required>
  </div>
  </div>
  <br><br><br>
  <div align="center">
  <input type="submit" name="submit" value="Place the Order" class="btn btn-primary">
  </div>
</form>
</div>
</body>
