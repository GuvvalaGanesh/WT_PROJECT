<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Welcome to GANI AutoMobiles</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
    <style>
	body {
	  width: 100%;
	  height: 100%;
	  background-image: url('1.jpeg');
	  background-repeat: no-repeat;
	  background-position: center;
	  background-size: cover;
	}
</style> 
</head>
<body>
    <div class="container">
<br>
        <div class="row">
        <div class="col"></div>
        <div class="col" style="border: 2px solid white; padding: 30px; margin-top: 30px; border-radius: 20px; background: rgba(255,255,255,0.25px); backdrop-filter: blur(15px);">
        <form id="form" action="log.php" method="post">
            <div align="center">
            <h1 align="center" style="color: rgb(140,233,240); font-size: 43px;">Login</h1>
            </div>
 		<label for="name" class="form-label" style="color: rgb(209,129,230); font-size: 23px;">User Name</label>
                <input id="name" name="name" type="text" class="form-control" placeholder="Enter your name" required>

                <label for="email" class="form-label" style="color: rgb(209,129,230); font-size: 23px;">Email</label>
                <input id="email" name="email" type="text" class="form-control" placeholder="Enter your email" required>

                <label for="password" class="form-label" style="color: rgb(209,129,230); font-size: 23px;">Password</label>
                <input id="password" name="password" type="password" class="form-control" placeholder="Enter your password" required>
            <br><br>
            <div align="center">  
            <input type="submit" name="submit" value="Login Now" class="btn btn-primary">
            </div>
            <br>
            
            <div align="center" style="color:white;">
             <p>Don't have an account ?  Register now</p><br><a href="registration.php" class="btn btn-primary">Register</a>
            </div>
        </form>
        </div>
        <div class="col"></div>
        </div>
    </div>
</body>
</html>

