<html>
<head>
  <title>Home | GANI Auto Mobiles</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</head>
<body style="height: 100vh;">

<nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="gani.jpeg" alt="" height="70px" width="80px">GANI Auto Mobiles</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <form>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      
      
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="home.php">Home</a>
        </li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <li class="nav-item">
          <a class="nav-link active" href="about.php">About</a>
        </li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <li class="nav-item">
          <a class="nav-link active" href="shop.php">Shop</a>
        </li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <li class="nav-item">
          <a class="nav-link active" href="contact.php">Contact</a>
        </li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <li class="nav-item">
          <a class="nav-link active" href="orders.php">Orders</a>
        </li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      </ul>
    </div>
    </form>
  </div>

</nav>

<div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item">
      <div class="carousel-caption d-none d-md-block text-center"></div>
      <img src="c1.jpg" class="d-block w-100" alt= "">
	<div class="carousel-caption d-none d-md-block">
	<h1>Welcome to GANI Auto Mobiles</h1>
        <h3>
	<?php 
		session_start();
		echo "Mr.".$_SESSION['name'];
	?>
		
	</h3>
	<br><br><Br><BR><Br><BR><BR><br><br><br><br><br><br><br>
      </div>
    </div>
    <div class="carousel-item active">
      <div class="carousel-caption d-none d-md-block text-center"></div>
      <img src="c2.jpeg" class="d-block w-100" alt="">
<div class="carousel-caption d-none d-md-block">
	<h1>Welcome to GANI Auto Mobiles</h1>
        <h3>
	<?php 
		session_start();
		echo "Mr.".$_SESSION['name'];
	?>
		
	</h3>
	<br><br><Br><BR><Br><BR><BR><br><br><br><br><br><br><br>
      </div>
    </div>
    <div class="carousel-item">
      <div class="carousel-caption d-none d-md-block text-center"></div>
      <img src="c3.jpeg" class="d-block w-100" alt="">
<div class="carousel-caption d-none d-md-block">
	<h1>Welcome to GANI Auto Mobiles</h1>
        <h3>
	<?php 
		session_start();
		echo "Mr.".$_SESSION['name'];
	?>
		
	</h3>
	<br><br><Br><BR><Br><BR><BR><br><br><br><br><br><br><br>
      </div>
    </div>
    <div class="carousel-item">
      <div class="carousel-caption d-none d-md-block text-center"></div>
      <img src="c4.jpeg" class="d-block w-100" alt="">
<div class="carousel-caption d-none d-md-block">
	<h1>Welcome to GANI Auto Mobiles</h1>
        <h3>
	<?php 
		session_start();
		echo "Mr.".$_SESSION['name'];
	?>
		
	</h3>
	<br><br><Br><BR><Br><BR><BR><br><br><br><br><br><br><br>
      </div>
    </div>
    <div class="carousel-item">
      <div class="carousel-caption d-none d-md-block text-center"></div>
      <img src="c5.jpeg" class="d-block w-100" alt="">
<div class="carousel-caption d-none d-md-block">
	<h1>Welcome to GANI Auto Mobiles</h1>
        <h3>
	<?php 
		session_start();
		echo "Mr.".$_SESSION['name'];
	?>
		
	</h3>
	<br><br><Br><BR><Br><BR><BR><br><br><br><br><br><br><br>
      </div>
    </div>
    
  </div>
  
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

</body>
</html>
