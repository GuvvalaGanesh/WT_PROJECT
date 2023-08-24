<?php
$conn=mysqli_connect("localhost","root","","book");

$name=$_GET['name'];
$email=$_GET['email'];
$password=$_GET['password'];
$cpassword=$_GET['cpassword'];

$insertQuery = "INSERT INTO Register VALUES ('$name', '$email', '$password', '$cpassword');";

    if (mysqli_query($conn, $insertQuery)) {
        header("Location:login.php");
    } else {
        header("Location:registration.php");
    }

?>


