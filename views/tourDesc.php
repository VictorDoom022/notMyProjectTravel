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
                        Air-con coach tour + Langkawi ferry tickets
                    </div>
                    <div class="list-group-item">
                        2 nights hotel accomodation
                    </div>
                    <div class="list-group-item">
                        2 breakfast,1 lunch, 1 dinner
                    </div>
                    <div class="list-group-item">
                        Tour Guide/Leader Service
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <p class="text-danger">What is NOT included in the tour</p>
                <div class="list-group">
                    <div class="list-group-item">
                        Entrance tickets
                    </div>
                    <div class="list-group-item">
                        Travel insurance
                    </div>
                    <div class="list-group-item">
                        Personal expenses
                    </div>
                    <div class="list-group-item">
                        Guide/Leader/Driver Tipping
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end of inclusion section -->

    <!-- start of highlights section -->
    <div class="container-fluid mb-5">
        <p class="sectionTitle text-dark fw-lighter mb-0">HIGHLIGHTS</p>
        <p class="text-primary sectionDesc">What makes this tour special</p>
        <p class="text-start">
            Eagle Square + Galeria Perdana + Kota Mahsuri + Under Water World + Atma Batik Village + Telaga Harbour + The Loaf Bread Shop + Oriental Village
        </p>
    </div>
    <!-- end of highlights section -->

    <!-- start of Itinerary section -->
    <div class="container-fluid mb-5">
        <p class="text-primary sectionDesc">Itinerary</p>
        <div class="text-start">
            <p class="fw-bold">Day 1 Johor Bahru – Kuala Perlis</p> 
            Evening, assemble & pick up at designated point. Depart for Langkawi by air-con coach. Overnight in the coach.
            <p class="fw-bold mt-1">Day 2 Kuala Perlis - Langkawi (Lunch, Dinner) </p> 
            Morning, arrives at jetty and aboard ferry to Langkawi Island. Langkawi known as the Jewel of Kedah, is an archipelago of 99 islands in the Andaman sea. It has good beaches, abundant marine life & an idyllic retreat from the urban jungle. Island tour features: Eagle Square, the majestic eagle is strategically positioned to welcome visitors to Langkawi, Galeria Perdana, Kota Mahsuri, Under Water World, Atma Batik Village, Telaga Harbour. Also visit to “The Loaf Bread Shop” which own by Malaysia Ex-Prime Minister Dr. Mahathir for a relaxing teatime. Then proceed to Oriental Village. You can enjoy panoramic view of Langkawi Island after taking Cable Car (own expenses) up to Mt. Mat Chin Chiang, also experience the World Famous Sky Bridge on the Hill (own expenses). Check in Hotel. Evening time, visit to Pantai Cenang shopping street to shop around & eat around (own arrangement).
            <p class="fw-bold mt-1">Day 3 Langkawi (Breakfast)</p> 
            breakfast, free activity. Friends who love sea may choose to enjoy the pleasant scenery through Paya Island snorkeling (own expense). Or you may choose to experience eagle feeding trip. Furthermore, you can also rent a car or a bike & tour around the island. Besides, Langkawi is duty-free island, don’t miss your shopping opportunity. 
            <p class="fw-bold mt-1">Day 4 Langkawi - Ipoh - Johor Bahru (Breakfast)</p>  
            After breakfast, depart from Langkawi and starts journey return to Johor. Enroute, stop over at Ipoh for local products shopping, you can have a good taste for local food.
        </div>
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

    var total = (adultPrice * adultQuantity) + (chilrenPrice * chilrenQuantity);
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