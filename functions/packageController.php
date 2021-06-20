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

    $sql = "INSERT INTO tourpackage(pkgTitle, pkgOverview, pkgPrice, pkgChildPrice, pkgSlots, pkgImageSrc) 
    VALUES ('$title', '$overview','$adultPrice', '$childPrice', '$slots', '$imageSRC')";

    mysqli_query($conn, $sql);
    mysqli_close($conn);
}

?> 