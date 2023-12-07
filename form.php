<?php
include "formc.php";
if(isset($_POST["submit"])) {
    $name = $_POST["name"];
    $message = $_POST["message"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $query = "INSERT INTO form (name,message,number,email) 
    VALUES ('$name','$message',$phone,'$email')";
    mysqli_query($mysql, $query);
    header("location:home.html");
  }
?>