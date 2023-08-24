<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration | Welcome to GANI AutoMobiles</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
     <style>
body {
  width: 100%;
    height: 100vh;
  background-image: url('bg.jpeg');
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
        

        <div class="col" style="border: 2px solid white; padding: 30px; margin-top: 30px; border-radius: 20px; 
background: rgba(255,255,255,0.25px); backdrop-filter: blur(15px);">
        <h3 align="center" style="color: rgb(140,233,240); font-size: 43px;"><b>Register Here</b></h3>
        <form action="register.php" method="get" onsubmit="return validateForm()">
            <label for="name" class="form-label" style="color: rgb(209,129,230); font-size: 23px;"><b>User Name</b></label>
            <input type="text" name="name" class="form-control"  id="name" placeholder="Enter your Name">
            <label id="nameerror" style="color:red; visibility: hidden;">Invalid Name</label><br>

            <label for="email" class="form-label" style="color: rgb(209,129,230); font-size: 23px;"><b>Email</b></label>
            <input type="email" name="email" class="form-control"  id="email" placeholder="abc@gmail.com">
            <label id="emailerror" style="color:red; visibility: hidden;">Invalid Email</label><br>

            <label for="password" class="form-label" style="color: rgb(209,129,230); font-size: 23px;"><b>Password</b></label>
            <input type="password" name="password" class="form-control"  id="password" placeholder="Enter your password">
            <label id="passworderror" style="color:red; visibility: hidden;">Password must be 6 to 15 characters</label><br>

            <label for="cpassword" class="form-label" style="color: rgb(209,129,230); font-size: 23px;"><b>Confirm Password</b></label>
            <input type="password" name="cpassword" class="form-control"  id="cpassword" placeholder="Confirm your password">
            <label id="confirmpassworderror" style="color:red; visibility: hidden;">Password must be same</label><br>
            <input type="submit" value="Submit" style="background-color: rgb(140,233,240);" class="btn">&nbsp;&nbsp;
            <input type="reset" value="Reset" style="background-color: rgb(140,233,240);" class="btn"><br><br>
            
        </form>
        <b style="color: white; font-size:18px"> Already Have an Account:&nbsp;&nbsp;</b><a href="login.php"><button class="btn"style="background-color: rgb(140,233,240);">Login</button></a>
        </div>
        <div class="col">

        </div>
          
    </div>
    <script>
        function validateForm() {
                var name = document.getElementById("name");
                const email = document.getElementById("email");
                var password = document.getElementById("password");
                var confirmPassword = document.getElementById("cpassword");
    
                if (name.value.trim()=="") {
                    //alert("Name must be less than 15 characters.");
                    name.style.border="solid 2px red";
                    document.getElementById("nameerror").style.visibility="visible";
                    return false;
                }
    
                const emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
                if (!emailPattern.test(email.value)) {
                    //alert("Please enter a valid email address.");
                    email.style.border="solid 2px red";
                    document.getElementById("emailerror").style.visibility="visible";
                    return false;
                }

                if(password.value.trim().length<6 || password.value.trim().length>16){
                    password.style.border="solid 2px red";
                    document.getElementById("passworderror").style.visibility="visible";
                    return false;
                }
    
                if (password.value!== confirmPassword.value) {
                    //alert("Passwords do not match.");
                    confirmPassword.style.border="solid 2px red";
                    document.getElementById("confirmpassworderror").style.visibility="visible";
                    return false;
                }
    
                return true;
            }
        
        
    </script>
      
</body>

</html>
