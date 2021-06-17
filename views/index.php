<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
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
            <div class="col-md-4">
                <div class="card text-center w-90" style="cursor:pointer;" onclick="redirect()">
                    <img class="card-img-top" src="../assets/bagandatok.jpg">
                    <div class="card-body">
                        <h5 class="card-title">2 Days 1 Night Bagan Datuk Sky Mirror</h5>
                        <p class="card-text">RM130</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-center w-90" style="cursor:pointer;" onclick="redirect()">
                    <img class="card-img-top" src="../assets/malacca.jpg">
                    <div class="card-body">
                        <h5 class="card-title">2 Days 1 Night Malacca - Muar</h5>
                        <p class="card-text">RM70</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-center w-90" style="cursor:pointer;" onclick="redirect()">
                    <img class="card-img-top" src="../assets/pulau-langkawi.jpg">
                    <div class="card-body">
                        <h5 class="card-title">4 Days 2 Nights Pulau Langkawi</h5>
                        <p class="card-text">RM598</p>
                    </div>
                </div>
            </div>
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
function redirect(){
    window.location.href = "tourDesc.php";
}
</script>
</html>