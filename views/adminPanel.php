<?php
session_start();
require_once('../functions/connectDB.php');
include_once('../functions/checkSession.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?php
        include 'components/cdnSetup.php'
    ?>
    <title>Document</title>
</head>
<body class="bg-light">
    <div class="container">
        <h1 class="text-center">User Lists</h1>

        <table class="table table-hover">
            <tr class="table-dark">
                <td>No.</td>
                <td>Username</td>
                <td>E-mail</td>
            </tr>
            
            <?php
                $count = 0;
                $sql = "SELECT * FROM users";
                $result = mysqli_query($conn, $sql);
                if(mysqli_num_rows($result) > 0){
                    while($row = mysqli_fetch_assoc($result)){
                        $count ++;
            ?>
                <tr>
                    <td><?php echo $count; ?></td>
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
                <td>Status</td>
                <td>Actions</td>
            </tr>
            
            <?php
                $count = 0;
                $sql = "SELECT bookinglist.id AS bookID,
                bookinglist.bookSetDate AS bookSetDate,
                tourpackage.pkgTitle AS pkgTitle,
                users.username AS username,
                bookinglist.bookFirstName AS firstName,
                bookinglist.bookLastName AS lastName,
                bookinglist.bookNric AS nric,
                bookinglist.bookBirthDate AS birthDate,
                bookinglist.bookPhoneNumber AS phoneNumber,
                bookinglist.bookAddress AS address,
                bookinglist.bookAdultQuantity AS adultQuantity,
                bookinglist.bookChildQuantity AS childQuantity,
                bookinglist.bookPaymentMethod AS paymentMethod,
                bookinglist.bookApprove AS bookApprove
                FROM bookinglist LEFT JOIN tourpackage ON bookinglist.pkgID = tourpackage.id LEFT JOIN users ON users.id = bookingList.userID";
                $result = mysqli_query($conn, $sql);
                if(mysqli_num_rows($result) > 0){
                    while($row = mysqli_fetch_assoc($result)){
                        $count++;
                        $name = ($row['firstName'] . ' ' . $row['lastName']);
                        $approveStatus = "";
                        if($row['bookApprove'] == 0){
                            $approveStatus = "Pending";
                        }else if($row['bookApprove'] == 1){
                            $approveStatus = "Approved";
                        }else if($row['bookApprove'] == 2){
                            $approveStatus = "Not Approved";
                        }
            ?>
                <tr>
                    <td><?php echo $count; ?></td>
                    <td><?php echo $row['username']; ?></td>
                    <td><?php echo $row['pkgTitle']; ?></td>
                    <td><?php echo $row['bookSetDate']; ?></td>
                    <td><?php echo $approveStatus; ?></td>
                    <td>
                        <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#moreDetailsID<?php echo $row['bookID']; ?>">More Details</button>
                        <button class="btn btn-sm btn-danger" onclick="deleteBooking(<?php echo $row['bookID']; ?>)">Delete</button>
                        <button class="btn btn-sm btn-success" onclick="toggleBooking(<?php echo $row['bookID']; ?>, <?php echo $row['bookApprove'] ?>)">Approve/Not Approve</button>
                    </td>
                </tr>

                <!-- start of more details modal -->
                <div class="modal fade" id="moreDetailsID<?php echo $row['bookID']; ?>" tabindex="-1" aria-labelledby="moreDetailsLabel" aria-hidden="true">
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Details</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-3">
                                        Name:
                                    </div>
                                    <div class="col-md-3">
                                        <?php echo $name; ?>
                                    </div>
                                    <div class="col-md-3">
                                        NRIC:
                                    </div>
                                    <div class="col-md-3">
                                        <?php echo $row['nric']; ?>
                                    </div>
                                    <div class="col-md-3">
                                        Birth Date:
                                    </div>
                                    <div class="col-md-3">
                                        <?php echo $row['birthDate']; ?>
                                    </div>
                                    <div class="col-md-3">
                                        Phone number:
                                    </div>
                                    <div class="col-md-3">
                                        <?php echo $row['phoneNumber']; ?>
                                    </div>
                                    <div class="col-md-3">
                                        Address:
                                    </div>
                                    <div class="col-md-9">
                                        <?php echo $row['address']; ?>
                                    </div>
                                    <div class="col-md-3">
                                        Adult quantity:
                                    </div>
                                    <div class="col-md-3">
                                        <?php echo $row['adultQuantity']; ?>
                                    </div>
                                    <div class="col-md-3">
                                        Child quantity:
                                    </div>
                                    <div class="col-md-3">
                                        <?php echo $row['childQuantity']; ?>
                                    </div>
                                    <div class="col-md-3">
                                        Payment method:
                                    </div>
                                    <div class="col-md-3">
                                        <?php echo $row['paymentMethod']; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end of more details modal -->
            <?php
                    }
                }else{
            ?>
                <tr>
                    <td colspan="6" class="text-center">No booking placed</td>
                </tr>
            <?php
                }
            ?>
        </table>
    </div>

    <div class="container">
        <h1 class="text-center">Enquiry Lists</h1>

        <table class="table table-hover table-responsive">
            <tr class="table-dark">
                <td>No.</td>
                <td>Name</td>
                <td>E-mail</td>
                <td>Subect</td>
                <td>Message</td>
            </tr>
            
            <?php
                $count = 0;
                $sql = "SELECT * FROM inquiries";
                $result = mysqli_query($conn, $sql);
                if(mysqli_num_rows($result) > 0){
                    while($row = mysqli_fetch_assoc($result)){
                        $count++;
            ?>
                <tr>
                    <td><?php echo $count; ?></td>
                    <td><?php echo $row['iqName']; ?></td>
                    <td><?php echo $row['iqEmail']; ?></td>
                    <td><?php echo $row['iqSubject']; ?></td>
                    <td><?php echo $row['iqMessage']; ?></td>
                </tr>
            <?php
                    }
                }
            ?>
        </table>
    </div>
</body>
<script>
function deleteBooking(bookingID){
    swal({
        icon: "warning",
        title: "Warning",
        text: "Are you sure you want to delete?",
        buttons: true,
        dangerMode: true,
    }).then((confirmDelete) => {
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
    });
}

function toggleBooking(bookingID, bookStatus){
    var bookStatusCode = bookStatus==0||bookStatus==2 ? 1 :2; 
    swal({
        icon: "warning",
        title: "Warning",
        text: "Are you sure you want to approve / not approve?",
        buttons: true,
        dangerMode: true,
    }).then((confirmDelete) => {
        $.ajax({
            url: '../functions/bookingController.php',
            type: 'POST',
            data: { 
                'approveBook' : true,
                'bookingID' : bookingID,
                'bookStatusCode' : bookStatusCode
            },
            success: function(data){
               location.reload();
            },
            error: function(){
                // do nothing
            }
        });
    });
}
</script>
</html>