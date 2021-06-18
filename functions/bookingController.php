<?php
include_once('connectDB.php');
session_start();

if(isset($_POST['book'])){
    $pkgID = $_POST['pkgID'];
    $userID = $_POST['userID'];
    $bookAdultQuantity = $_POST['bookAdultQuantity'];
    $bookChildQuantity = $_POST['bookChildQuantity'];
    $bookSetDate = $_POST['bookSetDate'];

    $sql = "INSERT INTO bookinglist(pkgID, userID,bookAdultQuantity, bookChildQuantity, bookSetDate) 
    VALUES ('$pkgID','$userID', '$bookAdultQuantity', '$bookChildQuantity', '$bookSetDate')";

    mysqli_query($conn, $sql);
    mysqli_close($conn);
}

if(isset($_POST['cancelBook'])){
    $bookingID = $_POST['bookingID'];

    echo $sql = "DELETE FROM bookinglist WHERE id = $bookingID";

    mysqli_query($conn, $sql);
    mysqli_close($conn);
}
?> 