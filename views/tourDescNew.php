<?php
session_start();
require_once('../functions/connectDB.php');
$id = $_GET['locationID'];
$sql = "SELECT * FROM tourpackage WHERE id = $id";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
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
        .titleImage{
            background-image: url('<?php echo $row['pkgImageSrc']; ?>');
            height: 450px;
            background-position: 50% -125px;
            background-attachment: fixed;
            background-repeat: no-repeat;
            background-size: cover;
            background-color: rgba(37, 42, 45, 0.7);
            background-blend-mode: multiply;
        }

        .titleImage .titleText{
            position: absolute;
            bottom: 200px;
            font-size: 75px
        }

        .sectionDesc{
            font-size: 40px;
        }

        .sectionTitle{
            font-size: 20px;
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

    <!-- start of picture section -->
    <div class="container-fluid titleImage">
        <p class="titleText text-white">
            <?php echo $row['pkgTitle']; ?>
        </p>
    </div>
    <!-- end of picture section -->

    <!-- start of overview section -->
    <div class="container-fluid mb-5">
        <div class="row">
            <div class="col-md-6">
                <p class="text-primary sectionDesc">Overview</p>
                <p class="text-start">
                    <?php echo $row['pkgOverview']; ?>
                </p>
            </div>

            <div class="col-md-6 mt-5 text-center">
                <button class="btn btn-lg btn-danger" data-bs-toggle="modal" data-bs-target="#orderModal"
                    <?php if($row['pkgSlots'] <= 0) { echo 'disabled'; }?>>
                    Book Now
                    (RM<?php echo $row['pkgPrice']; ?>)
                </button>
                <p>Slots available: <?php echo $row['pkgSlots']; ?></p>
            </div>
        </div>
    </div>
    <!-- end of overview section -->
    
    <!-- start of detials section -->
    <div class="container-fluid mb-5">
        <?php echo $row['pkgDetails']; ?>
    </div>
    <!-- end of detials section -->

    <!-- start of footer section -->
    <?php
        include 'components/footer.php'
    ?>
    <!-- end of footer section -->

    <!-- start of footer section -->
    <?php
        include 'orderModal.php'
    ?>
    <!-- end of footer section -->

</body>
<script>
function redirectToComfirm(){
    var adultQuantity = parseInt(document.getElementById('adultQuantity').value);
    var chilrenQuantity = parseInt(document.getElementById('childrenQuantity').value);
    var bookingSetDate = document.getElementById('bookSetDate').value;
    var toAllowRedirect = true;

    if(adultQuantity==0 && chilrenQuantity==0){
        swal({
            icon: "error",
            title: "Hold up!",
            text: "Please fill in the quantities",
            timer: 1500,
            buttons: false,
        }).then(function(){
            // do nothing
        });
        toAllowRedirect = false;
    }

    if(bookingSetDate==null){
        swal({
            icon: "error",
            title: "Hold up!",
            text: "Please fill in the date",
            timer: 1500,
            buttons: false,
        }).then(function(){
            // do nothing
        });
        toAllowRedirect = false;
    }
    
    if(toAllowRedirect){
        window.location.href = "confirmOrder.php?pkgID=<?php echo $id; ?>&adultQuantity="+adultQuantity+'&childrenQuantity='+chilrenQuantity+"&bookSetDate="+ bookingSetDate;
    }
}

function calcTotal(){
    var adultPrice = parseInt(document.getElementById('adultPrice').value);
    var chilrenPrice = parseInt(document.getElementById('chilrenPrice').value);
    var adultQuantity = parseInt(document.getElementById('adultQuantity').value);
    var chilrenQuantity = parseInt(document.getElementById('childrenQuantity').value);

    if(adultQuantity <0) document.getElementById('adultQuantity').value = "0";
    if(chilrenQuantity <0) document.getElementById('childrenQuantity').value = "0";   

    var total = (adultPrice * adultQuantity) + (chilrenPrice * chilrenQuantity);
    if(total < 0) total = 0;
    document.getElementById('totalPrice').innerHTML = "RM" + total + ".00";
}
</script>
</html>
<?php
        }
    }else{
        echo "<h1 class='text-center'>Invalid Page</h1>";
    }
?>