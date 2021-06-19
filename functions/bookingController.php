<?php
include_once('connectDB.php');
session_start();

if(isset($_POST['book'])){
    $pkgID = $_POST['pkgID'];
    $userID = $_POST['userID'];
    $bookAdultQuantity = $_POST['bookAdultQuantity'];
    $bookChildQuantity = $_POST['bookChildQuantity'];
    $bookSetDate = $_POST['bookSetDate'];
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $birthDate = $_POST['birthDate'];
    $nric = $_POST['nric'];
    $phoneNumber = $_POST['phoneNumber'];
    $address = $_POST['address'];
    $paymentMethod = $_POST['paymentMethod'];

    $sql = "INSERT INTO bookinglist(pkgID, userID,bookAdultQuantity, bookChildQuantity, bookSetDate, bookFirstName, bookLastName, bookBirthDate, bookNric, bookPhoneNumber, bookAddress, bookPaymentMethod) 
    VALUES ('$pkgID','$userID', '$bookAdultQuantity', '$bookChildQuantity', '$bookSetDate', '$firstName', '$lastName', '$birthDate', '$nric', '$phoneNumber', '$address', '$paymentMethod')";

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