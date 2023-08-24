<?php
$conn=mysqli_connect("localhost","root","","book");

$name=$_GET['name'];
$email=$_GET['email'];
$number=$_GET['number'];
$message=$_GET['message'];

$insertQuery = "INSERT INTO contact VALUES ('$name', '$email', '$number', '$message');";

    if (mysqli_query($conn, $insertQuery)) {
        	header("Location:message.php");
        
    } else {
        echo "Error: ";
    }
            $name = $_FILES["img"]["name"];
            $type = $_FILES["img"]["type"];
            $size = $_FILES["img"]["size"];
            $tmpname = $_FILES["img"]["tmp_name"];

            echo "$name";
            echo "$type";
            echo "$size";


            $ext = pathinfo($_FILES["img"]["name"], PATHINFO_EXTENSION);
            if (!in_array($ext, $allowed)) {
                echo "please select the jpg jpeg png format only";
            }
            $maxsize = 1024 * 1024 * 5;
            if ($size > $maxsize) {
                echo "select the image with size less than 5 MB";
            }

            if (in_array($ext, $allowed)) {
                if (move_uploaded_file($tmpname, "upload/" . $name)) {
                    echo "uploaded successfully";
                } 
		else {
                    echo "could not upload file";
                }
            } 
		else {
                echo "type not matched";
            }
        
?>


