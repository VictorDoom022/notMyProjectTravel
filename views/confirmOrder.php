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
    <?php
        include 'components/cdnSetup.php'
    ?>
    <title>Document</title>
    <style>
    /* Chrome, Safari, Edge, Opera */
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }

    /* Firefox */
    input[type=number] {
        -moz-appearance: textfield;
    }
    </style>
</head>
<body class="bg-light">
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
                            <td><?php echo $adultTotal ?>.00</td>
                        </tr>
                        <tr>
                            <td>Children</td>
                            <td><?php echo $row['pkgChildPrice'] ?></td>
                            <td><?php echo $childrenQuantity ?>.00</td>
                            <td><?php echo $childrenTotal ?>.00</td>
                        </tr>
                        <tr>
                            <td colspan="3" class="text-end">Total:</td>
                            <td class="text-success"><?php echo $total ?>.00</td>
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
                                <label>Phone Number</label>
                                <input type="number" class="form-control" id="phoneNumber" name="phoneNumber" placeholder="Phone Number">
                                <p class="form-text">exmaple: 0111234567</p>
                            </div>
                            <div class="col-md-6 text-start">
                                <label>NRIC No.</label>
                                <input type="number" class="form-control" id="nric" name="nric" placeholder="NRIC">
                                <p class="form-text">exmaple: 00061901xxxx</p>
                            </div>
                            <div class="col-md-6 text-start">
                                <label>Birth Date</label>
                                <input type="date" class="form-control" id="birthDate" name="birthDate" placeholder="Birth Date">
                            </div>
                            <div class="col-md-6 text-start">
                                <label>Address</label>
                                <textarea name="address" id="address" class="form-control" id="" cols="30" rows="5"></textarea>
                            </div>

                            <div class="col-md-12 justify-content-center my-3">
                                <button type="button" class="btn btn-primary" onclick="showModal()">
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
function showModal(){
    var firstName = document.getElementById('firstName').value;
    var lastName = document.getElementById('lastName').value;
    var birthDate = document.getElementById('birthDate').value;
    var nric = document.getElementById('nric').value;
    var phoneNumber = document.getElementById('phoneNumber').value;
    var address = document.getElementById('address').value;
    var allowNavigate = true;

    firstName=='' ? allowNavigate = false : allowNavigate = true;
    lastName=='' ? allowNavigate = false : allowNavigate = true;
    birthDate=='' ? allowNavigate = false : allowNavigate = true;
    nric=='' ? allowNavigate = false : allowNavigate = true;
    phoneNumber=='' ? allowNavigate = false : allowNavigate = true;
    address=='' ? allowNavigate = false : allowNavigate = true;

    if(nric.length != 12){
        allowNavigate = false;
        swal({
            icon: "error",
            title: "Hold up!",
            text: "Invalid NRIC number",
            timer: 1500,
            buttons: false,
        }).then(function(){
            // do nothing
        });
    }

    if(phoneNumber.length < 9 || phoneNumber.length > 11){
        allowNavigate = false;
        swal({
            icon: "error",
            title: "Hold up!",
            text: "Invalid Phone number",
            timer: 1500,
            buttons: false,
        }).then(function(){
            // do nothing
        });
    }

    if(allowNavigate){
        $('#paymentMethodModal').modal('show');
    }else{
        swal({
            icon: "error",
            title: "Hold up!",
            text: "Please fill all the required fields",
            timer: 1500,
            buttons: false,
        }).then(function(){
            // do nothing
        });
    }
}
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