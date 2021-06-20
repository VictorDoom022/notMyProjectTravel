<?php
session_start();
require_once('../../functions/connectDB.php');
include_once('../../functions/checkSession.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?php
        include '../components/cdnSetup.php'
    ?>
    <title>Document</title>
</head>
<body>
    <!-- start of login card -->
    <div class="container-fluid mt-5">
        <div class="row justify-content-center align-item-center">
            <div class="col-md-8">
                <div class="card text-center px-2">
                    <h3 class="card-title">Admin Panel</h3>
                    <div class="d-grid gap-2">
                        <a href="userList.php" class="btn btn-dark">User Lists</a>
                        <a href="bookingList.php" class="btn btn-dark">Booking Lists</a>
                        <a href="enquiryList.php" class="btn btn-dark">Enquiry Lists</a>
                        &nbsp;
                        <a href="packageList.php" class="btn btn-primary">Product Lists</a>
                        &nbsp;
                        <a href="../../functions/userController.php?logout" class="btn btn-danger">Log Out</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end of login card -->
</body>
</html>