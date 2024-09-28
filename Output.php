<?php

$email       = $_POST["email"];
$username    = $_POST["username"];
$password1   = $_POST["password1"];
$password    = $_POST["password"];

test($username);   
/*
        if($_SERVER["REQUEST_METHOD"] == "POST"){

 

         

        if(trim($email) !=""){
            echo "USER email is " . $email . "<br>";
        }
        else{
            echo "Field email is empty...<br>";
        }

        if(trim($username) !=""){
            echo "USER email is " . $username . "<br>";
        }
        else{
            echo "Field username is empty...<br>";
        }

        if(trim($password1) !=""){
            echo "USER email is " . $password . "<br>";
        }
        else{
            echo "Field password is empty...<br>";
        }

        }
        */

        function test($fieldname){

            if(trim($fieldname) !=""){
                echo "USER email is " . $fieldname . "<br>";
            }
            else{
                echo "Field is empty...<br>";
            }

        }



?>