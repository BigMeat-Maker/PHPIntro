<?php

$email       = $_POST["email"];
$username    = $_POST["username"];
$password1   = $_POST["password1"];
$password    = $_POST["password"];


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (trim($email) == "" || trim($username) == "" || trim($password1) == "" || trim($password1) != trim($password)) {
        
        header("location: demo1.php?EmptyFields=Fields are empty...");}

    elseif (trim($password1) != trim($password)) {
        header("location: demo1.php?Error=Password fields are not matching");
    } 
    else {
        header("location: demo1.php?success=Registration Successful!");
    }
}


?>
