<?php
include_once('connectDB.php');
session_start();

if(isset($_POST['toogleEdit'])){
    $editStatusCode = $_POST['statusCode'];

    $sql = "UPDATE settings SET editMode = $editStatusCode";

    mysqli_query($conn, $sql);
    mysqli_close($conn);
}


?> 