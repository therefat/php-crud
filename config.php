<?php 
    $servername ="localhost";
    $username = "root";
    $password = "";
    $dbname = "mydbc";
    $conn = new mysqli($username,$username,$password,$dbname);
    if($conn->connect_error){
        die("Connection Faild" . $conn->connect_error);
    }