<?php
require_once('../functions/connectDB.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1 class="text-center">User Lists</h1>

        <table class="table table-hover">
            <tr class="table-dark">
                <td>No.</td>
                <td>Username</td>
                <td>E-mail</td>
            </tr>
            
            <?php
                $sql = "SELECT * FROM users";
                $result = mysqli_query($conn, $sql);
                if(mysqli_num_rows($result) > 0){
                    while($row = mysqli_fetch_assoc($result)){
            ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['username']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                </tr>
            <?php
                    }
                }
            ?>
        </table>
    </div>

    <div class="container">
        <h1 class="text-center">Booking Lists</h1>

        <table class="table table-hover">
            <tr class="table-dark">
                <td>No.</td>
                <td>Username</td>
                <td>Package Name</td>
                <td>Booking Date</td>
                <td>Actions</td>
            </tr>
            
            <?php
                $sql = "SELECT bookinglist.id AS bookID,
                bookinglist.bookSetDate AS bookSetDate,
                tourpackage.pkgTitle AS pkgTitle,
                users.username AS username
                FROM bookinglist LEFT JOIN tourpackage ON bookinglist.pkgID = tourpackage.id LEFT JOIN users ON users.id = bookingList.userID";
                $result = mysqli_query($conn, $sql);
                if(mysqli_num_rows($result) > 0){
                    while($row = mysqli_fetch_assoc($result)){
            ?>
                <tr>
                    <td><?php echo $row['bookID']; ?></td>
                    <td><?php echo $row['username']; ?></td>
                    <td><?php echo $row['pkgTitle']; ?></td>
                    <td><?php echo $row['bookSetDate']; ?></td>
                    <td>
                        <button class="btn btn-sm btn-danger" onclick="deleteBooking(<?php echo $row['bookID']; ?>)">Delete</button>
                        <button class="btn btn-sm btn-success" onclick="approveBooking(<?php echo $row['bookID']; ?>)">Approve</button>
                    </td>
                </tr>
            <?php
                    }
                }else{
            ?>
                <tr>
                    <td colspan="4" class="text-center">No booking placed</td>
                </tr>
            <?php
                }
            ?>
        </table>
    </div>
</body>
<script>
function deleteBooking(bookingID){
    if(confirm('Are you sure you want to delete?')){
        $.ajax({
            url: '../functions/bookingController.php',
            type: 'POST',
            data: { 
                'cancelBook' : true,
                'bookingID' : bookingID,
            },
            success: function(data){
                location.reload();
            },
            error: function(){
                // do nothing
            }
        });
    }else{

    }
}

function approveBooking(bookingID){
    if(confirm('Are you sure you want to approve?')){
        $.ajax({
            url: '../functions/bookingController.php',
            type: 'POST',
            data: { 
                'approveBook' : true,
                'bookingID' : bookingID,
            },
            success: function(data){
               location.reload();
            },
            error: function(){
                // do nothing
            }
        });
    }else{

    }
}
</script>
</html>