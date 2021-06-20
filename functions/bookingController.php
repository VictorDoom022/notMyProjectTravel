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

    $sql = "INSERT INTO bookinglist(pkgID, userID,bookAdultQuantity, bookChildQuantity, bookSetDate, bookFirstName, bookLastName, bookBirthDate, bookNric, bookPhoneNumber, bookAddress, bookPaymentMethod, bookApprove) 
    VALUES ('$pkgID','$userID', '$bookAdultQuantity', '$bookChildQuantity', '$bookSetDate', '$firstName', '$lastName', '$birthDate', '$nric', '$phoneNumber', '$address', '$paymentMethod', 0)";

    updateSlots($pkgID, $conn);

    mysqli_query($conn, $sql);
    mysqli_close($conn);
}

function updateSlots($pkgID, $conn){
    $slotNumber = 0;
    $getSlotsNumberSQL = "SELECT pkgSlots FROM tourpackage WHERE id = $pkgID";
    $result = mysqli_query($conn, $getSlotsNumberSQL);
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
            $slotNumber = $row['pkgSlots'];
        }
    }

    $slotNumber += -1;

    $updateSQL = "UPDATE tourpackage SET pkgSlots = $slotNumber WHERE id = $pkgID";
    mysqli_query($conn, $updateSQL);
}

if(isset($_POST['cancelBook'])){
    $bookingID = $_POST['bookingID'];

    $sql = "DELETE FROM bookinglist WHERE id = $bookingID";

    mysqli_query($conn, $sql);
    mysqli_close($conn);
}

if(isset($_POST['approveBook'])){
    $bookingID = $_POST['bookingID'];
    $bookStatusCode = $_POST['bookStatusCode'];

    $sql = "UPDATE bookinglist SET bookApprove = $bookStatusCode WHERE id = $bookingID";

    mysqli_query($conn, $sql);
    mysqli_close($conn);
}
?> 