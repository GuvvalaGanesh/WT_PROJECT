<?php
$conn=mysqli_connect("localhost","root","","book");

$name=$_GET['name'];
$number=$_GET['number'];
$address=$_GET['address'];
$pin=$_GET['pin'];
$book=$_GET['book'];
$copies=$_GET['copies'];

$insertQuery = "INSERT INTO ORDERS VALUES ('$name', '$number', '$address', '$pin', '$book', '$copies');";

    if (mysqli_query($conn, $insertQuery)) {
        header("Location:message1.php");
    } else {
        echo "Error";
    }

?>


