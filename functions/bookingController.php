<?php
include_once('connectDB.php');
session_start();

if(isset($_POST['book'])){
    $pkgID = $_POST['pkgID'];
    $userID = $_POST['userID'];

    $sql = "INSERT INTO bookinglist(pkgID, userID) 
    VALUES ('$pkgID','$userID')";

    mysqli_query($conn, $sql);
    mysqli_close($conn);
}

?> 