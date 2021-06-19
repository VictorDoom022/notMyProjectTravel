<?php
session_start();
require_once('../functions/connectDB.php');
$packageID = $_GET['pkgID'];
$adultQuantity = $_GET['adultQuantity'];
$childrenQuantity = $_GET['childrenQuantity'];
$bookSetDate = $_GET['bookSetDate'];

$sql = "SELECT * FROM tourpackage WHERE id = $packageID";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
        $adultTotal = $row['pkgPrice'] * $adultQuantity;
        $childrenTotal = $row['pkgChildPrice'] * $childrenQuantity;
        $total = $adultTotal + $childrenTotal;
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
    <style>
    </style>
</head>
<body>
    <!-- start of nav bar section -->
    <?php
        include 'components/navBar.php'
    ?>
    <!-- end of nav bar section -->

    <!-- start of tab secions -->
    <?php
        include 'components/navTabs.php'
    ?>
    <!-- end of tab secions -->

    <div class="container-fluid mt-5">
        <div class="row justify-content-center align-item-center">
            <div class="col-md-8">
                <div class="card text-center px-2">
                    <h3 class="card-title">Confirm Order</h3>

                    <table class="table table-striped">
                        <tr>
                            <td>Type</td>
                            <td>Price</td>
                            <td>Quantity</td>
                            <td>Total(RM)</td>
                        </tr>
                        <tr>
                            <td>Adult</td>
                            <td><?php echo $row['pkgPrice'] ?></td>
                            <td><?php echo $adultQuantity ?></td>
                            <td><?php echo $adultTotal ?></td>
                        </tr>
                        <tr>
                            <td>Chilren</td>
                            <td><?php echo $row['pkgChildPrice'] ?></td>
                            <td><?php echo $childrenQuantity ?></td>
                            <td><?php echo $childrenTotal ?></td>
                        </tr>
                        <tr>
                            <td colspan="3" class="text-end">Total:</td>
                            <td class="text-success"><?php echo $childrenTotal ?></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- start of additional details section -->
    <div class="container-fluid mt-3">
        <div class="row justify-content-center align-item-center">
            <div class="col-md-8">
                <div class="card text-center px-2">
                    <h3 class="card-title">Additional Details</h3>

                    <form action="">
                        <div class="row">
                            <div class="col-md-6 text-start">
                                <label>First Name</label>
                                <input type="text" class="form-control" id="firstName" name="firstName" placeholder="First Name">
                            </div>
                            <div class="col-md-6 text-start">
                                <label>Last Name</label>
                                <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Last Name">
                            </div>
                            <div class="col-md-6 text-start">
                                <label>Birth Date</label>
                                <input type="date" class="form-control" id="birthDate" name="birthDate" placeholder="Birth Date">
                            </div>
                            <div class="col-md-6 text-start">
                                <label>NRIC No.</label>
                                <input type="number" class="form-control" id="nric" name="nric" placeholder="NRIC">
                            </div>
                            <div class="col-md-6 text-start">
                                <label>Phone Number</label>
                                <input type="number" class="form-control" id="phoneNumber" name="phoneNumber" placeholder="Phone Number">
                            </div>
                            <div class="col-md-6 text-start">
                                <label>Address</label>
                                <textarea name="address" id="address" class="form-control" id="" cols="30" rows="5"></textarea>
                            </div>

                            <div class="col-md-12 justify-content-center my-3">
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paymentMethodModal">
                                    Next
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>    
        </div>
    </div>
    <!-- end of additional details section -->

    <!-- start of payment method modal -->
    <div class="modal fade" id="paymentMethodModal" tabindex="-1" aria-labelledby="paymentMethodModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Select Payment Method</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center">
                <p>Select a payment method</p>
                <select class="form-control" name="paymentMehod" id="paymentMethod">
                    <option value="onlineBanking">Online Banking</option>
                    <option value="TNG">Touch N Go</option>
                    <option value="credit/debitCard">Credit/Debit Card</option>
                </select>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button class="btn btn-primary" onclick="placeOrder()" data-bs-dismiss="modal">Confirm</button>
            </div>
            </div>
        </div>
    </div>
    <!-- end of payment method modal -->

    <!-- start of footer section -->
    <?php
        include 'components/footer.php'
    ?>
    <!-- end of footer section -->
</body>
<script>
function placeOrder(){
    var firstName = document.getElementById('firstName').value;
    var lastName = document.getElementById('lastName').value;
    var birthDate = document.getElementById('birthDate').value;
    var nric = document.getElementById('nric').value;
    var phoneNumber = document.getElementById('phoneNumber').value;
    var address = document.getElementById('address').value;
    var paymentMethod = document.getElementById('paymentMethod').value;

    $.ajax({
        url: '../functions/bookingController.php',
        type: 'POST',
        data: { 
            'book' : true,
            'pkgID' : <?php echo $packageID; ?>,
            'userID' : <?php if(!empty($_SESSION['user_id'])){ echo $_SESSION['user_id']; } else { echo 'null';}?>, 
            'bookAdultQuantity' : <?php echo $adultQuantity; ?>,
            'bookChildQuantity' : <?php echo $childrenQuantity; ?>,
            'bookSetDate' : '<?php echo $bookSetDate; ?>',
            'firstName' : firstName,
            'lastName' : lastName,
            'birthDate' : birthDate,
            'nric' : nric,
            'phoneNumber' : phoneNumber,
            'address' : address,
            'paymentMethod' : paymentMethod
        },
        success: function(data){
            window.location.href = "orderList.php";
        },
        error: function(){
            // do nothing
        }
    });
}
</script>
</html>
<?php
    }
}
?>