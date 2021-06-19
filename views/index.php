<?php
session_start();
require_once('../functions/connectDB.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?php
        include 'components/cdnSetup.php'
    ?>
    <title>Document</title>
    <style>
        .carousel-Image{
            margin-left:auto; 
            margin-right:auto; 
            max-height: 350px; 
            min-height: 350px;
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

    <!-- start of image carousel -->
    <div class="container-fluid mt-5">
        <div id="carouselImageID" class="carousel carousel-dark slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block text-center w-50 h-70 carousel-Image" src="../assets/slider.jpg">
                    <div class="carousel-caption d-none d-md-block text-light">
                        <h5>Title</h5>
                        <p>Some captions</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block text-center w-50 h-70 carousel-Image" src="../assets/slider2.jpg">
                    <div class="carousel-caption d-none d-md-block text-light">
                        <h5>Title</h5>
                        <p>Some captions</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block text-center w-50 h-70 carousel-Image" src="../assets/slider3.jpg">
                    <div class="carousel-caption d-none d-md-block text-light">
                        <h5>Title</h5>
                        <p>Some captions</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselImageID" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselImageID" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- end of image carousel -->

    <!-- start of popular tours section -->
    <div class="container-fluid mt-5">
        <div class="text-center">
            <h2>
                Popular Tours
            </h2>
        </div>

        <div class="row">
            <?php
                $sql = "SELECT * FROM tourpackage";
                $result = mysqli_query($conn, $sql);
                if(mysqli_num_rows($result) > 0){
                    while($row = mysqli_fetch_assoc($result)){
            ?>
                <div class="col-md-4">
                    <div class="card text-center w-90" style="cursor:pointer;" onclick="redirect(<?php echo $row['id']?>)">
                        <img class="card-img-top" src="<?php echo $row['pkgImageSrc']?>">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $row['pkgTitle']?></h5>
                            <p class="card-text">RM<?php echo $row['pkgPrice']?></p>
                        </div>
                    </div>
                </div>
            <?php
                    }
                }
            ?>
        </div>
    </div>
    <!-- end of popular tours section -->

    <!-- start of footer section -->
    <?php
        include 'components/footer.php'
    ?>
    <!-- end of footer section -->
</body>
<script>
function redirect(locationID){
    window.location.href = "tourDesc.php?locationID=" + locationID;
}
</script>
</html>