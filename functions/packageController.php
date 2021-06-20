<?php
include_once('connectDB.php');
session_start();

if(isset($_POST['addPackage'])){
    $title = $_POST['title'];
    $adultPrice = $_POST['adultPrice'];
    $childPrice = $_POST['childPrice'];
    $slots = $_POST['slots'];
    $imageSRC = $_POST['imageSRC'];
    $overview = $_POST['overview'];
    $details = $_POST['details'];

    $sql = "INSERT INTO tourpackage(pkgTitle, pkgOverview, pkgDetails,pkgPrice, pkgChildPrice, pkgSlots, pkgImageSrc) 
    VALUES ('$title', '$overview', '$details','$adultPrice', '$childPrice', '$slots', '$imageSRC')";

    mysqli_query($conn, $sql);
    mysqli_close($conn);
}

if(isset($_POST['editPackage'])){
    $pkgID = $_POST['pkgID'];
    $title = $_POST['title'];
    $adultPrice = $_POST['adultPrice'];
    $childPrice = $_POST['childPrice'];
    $slots = $_POST['slots'];
    $imageSRC = $_POST['imageSRC'];
    $overview = $_POST['overview'];
    $details = $_POST['details'];

    $sql = "UPDATE tourpackage SET pkgTitle = '$title', pkgPrice = '$adultPrice', 
    pkgChildPrice = '$childPrice', pkgSlots = $slots, pkgImageSrc = '$imageSRC',
    pkgOverview = '$overview', pkgDetails = '$details' WHERE id = $pkgID";

    mysqli_query($conn, $sql);
    mysqli_close($conn);
}

?> 