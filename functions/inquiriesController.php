<?php
include_once('connectDB.php');

session_start();

if(isset($_POST['inquiry'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $sql = "INSERT INTO inquiries(iqName, iqEmail, iqSubject, iqMessage) 
    VALUES ('$name','$email','$subject', '$message')";

    mysqli_query($conn, $sql);
    mysqli_close($conn);
}

?> 