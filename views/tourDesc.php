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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
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
                <button class="btn btn-lg btn-danger" data-bs-toggle="modal" data-bs-target="#orderModal">
                    Book Now
                    (RM<?php echo $row['pkgPrice']; ?>)
                </button>
            </div>
        </div>
    </div>
    <!-- end of overview section -->
    
    <!-- start of inclusion section -->
    <div class="container-fluid mb-5">
        <p class="sectionTitle text-dark fw-lighter mb-0">INCLUSIONS / EXCLUSIONS</p>
        <p class="text-primary sectionDesc">What we'll give. What we won't</p>
        <div class="row">
            <div class="col-md-6">
                <p class="text-success">What is included in the tour</p>
                <div class="list-group">
                    <div class="list-group-item">
                        List one
                    </div>
                    <div class="list-group-item">
                        List two
                    </div>
                    <div class="list-group-item">
                        List three
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <p class="text-danger">What is NOT included in the tour</p>
                <div class="list-group">
                    <div class="list-group-item">
                        List one
                    </div>
                    <div class="list-group-item">
                        List two
                    </div>
                    <div class="list-group-item">
                        List three
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end of inclusion section -->

    <!-- start of highlights section -->
    <div class="container-fluid mb-5">
        <p class="sectionTitle text-dark fw-lighter mb-0">HIGHLIGHTS</p>
        <p class="text-primary sectionDesc">What we'll give. What we won't</p>
        <p class="text-start">
            N Nano Travel started as a tour and travel company in 2017. The company is a professional organizer and travel planner. N Nano Travel expert in selling both group (GIT) and individual (FIT) worldwide tour packages. The company provides the experience outbound tour leaders to serve the market and clientele needs and daily Excursion Tours and Special Interest Tour for all tourists from around the world.
        </p>
    </div>
    <!-- end of highlights section -->

    <!-- start of Itinerary section -->
    <div class="container-fluid mb-5">
        <p class="text-primary sectionDesc">Itinerary</p>
        <p class="text-start">
            N Nano Travel started as a tour and travel company in 2017. The company is a professional organizer and travel planner. N Nano Travel expert in selling both group (GIT) and individual (FIT) worldwide tour packages. The company provides the experience outbound tour leaders to serve the market and clientele needs and daily Excursion Tours and Special Interest Tour for all tourists from around the world.
        </p>
    </div>
    <!-- end of Itinerary section -->

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
    
    window.location.href = "confirmOrder.php?pkgID=<?php echo $id; ?>&adultQuantity="+adultQuantity+'&childrenQuantity='+chilrenQuantity+"&bookSetDate="+ bookingSetDate;
    console.log(bookingSetDate);
}

function calcTotal(){
    var adultPrice = parseInt(document.getElementById('adultPrice').value);
    var chilrenPrice = parseInt(document.getElementById('chilrenPrice').value);
    var adultQuantity = parseInt(document.getElementById('adultQuantity').value);
    var chilrenQuantity = parseInt(document.getElementById('childrenQuantity').value);

    var total = (adultPrice * adultQuantity) + (chilrenPrice * chilrenQuantity);
    document.getElementById('totalPrice').innerHTML = "RM" + total;
}
</script>
</html>
<?php
        }
    }else{
        echo "<h1 class='text-center'>Invalid Page</h1>";
    }
?>