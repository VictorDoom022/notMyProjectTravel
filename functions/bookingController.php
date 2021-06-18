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

if(isset($_POST['cancelBook'])){
    $bookingID = $_POST['bookingID'];

    echo $sql = "DELETE FROM bookinglist WHERE id = $bookingID";

    mysqli_query($conn, $sql);
    mysqli_close($conn);
    //header("Location: ../views/orderList.php");
}
?> 