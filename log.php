<?php
    
		
?>

<?php
   $conn=mysqli_connect("localhost","root","","book");
   
  if (isset($_POST['submit']))
  {
   $user=$_POST['name'];
   $email=$_POST['email'];
   $password=$_POST['password'];
   $query="SELECT * FROM Register WHERE Email='$email' AND Password='$password' ";
   $result=mysqli_query($conn,$query);
   if (mysqli_num_rows($result)==1)
   { 
     
     header('Location:home.php');
   }
   else
   { 
     
     header('Location:wrong.php');
   }
  }
?>
