<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <!-- start of nav bar section -->
    <?php
        include 'components/navBar.php'
    ?>
    <!-- end of nav bar section -->

    <!-- start of tab secions -->
    <div class="container-fluid bg-light">
        <div class="row">
            <div class="col-md-3 text-center">
                <a href="#" class="btn btn-md">Home</a>
            </div>
            <div class="col-md-3 text-center">
                <a href="#" class="btn btn-md">Trips</a>
            </div>
            <div class="col-md-3 text-center">
                <a href="#" class="btn btn-md">About Us</a>
            </div>
            <div class="col-md-3 text-center">
                <a href="#" class="btn btn-md">Contact Us</a>
            </div>
        </div>
    </div>
    <!-- end of tab secions -->

    <!-- start of image carousel -->
    <div class="container-fluid mt-5">
        <div id="carouselImageID" class="carousel carousel-dark slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block text-center w-50" style="margin-left:auto; margin-right:auto" src="https://image.shutterstock.com/image-vector/example-red-square-grunge-stamp-600w-327662909.jpg">
                    <div class="carousel-caption d-none d-md-block text-dark">
                        <h5>Title</h5>
                        <p>Some captions</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block text-center w-50" style="margin-left:auto; margin-right:auto" src="https://image.shutterstock.com/image-vector/example-red-square-grunge-stamp-600w-327662909.jpg">
                    <div class="carousel-caption d-none d-md-block text-dark">
                        <h5>Title</h5>
                        <p>Some captions</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block text-center w-50" style="margin-left:auto; margin-right:auto" src="https://image.shutterstock.com/image-vector/example-red-square-grunge-stamp-600w-327662909.jpg">
                    <div class="carousel-caption d-none d-md-block text-dark">
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
                Polular Travels
            </h2>
        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="card text-center w-90">
                    <img class="card-img-top" src="https://image.shutterstock.com/image-vector/example-red-square-grunge-stamp-600w-327662909.jpg">
                    <div class="card-body">
                        <h5 class="card-title">Image title</h5>
                        <p class="card-text">Image description</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-center w-90">
                    <img class="card-img-top" src="https://image.shutterstock.com/image-vector/example-red-square-grunge-stamp-600w-327662909.jpg">
                    <div class="card-body">
                        <h5 class="card-title">Image title</h5>
                        <p class="card-text">Image description</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-center w-90">
                    <img class="card-img-top" src="https://image.shutterstock.com/image-vector/example-red-square-grunge-stamp-600w-327662909.jpg">
                    <div class="card-body">
                        <h5 class="card-title">Image title</h5>
                        <p class="card-text">Image description</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end of popular tours section -->

    <!-- start of footer section -->
    <div class="container-fluid bg-secondary mt-5">
        <div class="row">
            <div class="col-md-3 text-white">
                <p class="fw-bold">CompanyName</p>
            </div>

            <div class="col-md-3 text-white">
                <p class="mb-0">Address: </p>
                <p class="fst-italic">99, Jalan Wangi 99, Taman Sangat Wangi, 81200 Johor Bahru, Johor, Malaysia</p>
            </div>

            <div class="col-md-3 text-white">
                <p class="mb-0">Office number: </p>
                <p class="fst-italic">999</p>
            </div>

            <div class="col-md-3 text-white">
                <p class="fst-italic">support info?</p>
            </div>

            <div class="col-md-12 text-center text-white">
                <p class="fw-lighter">Copyright © 2021 MyCompany</p>
            </div>
        </div>
    </div>
    <!-- end of footer section -->
</body>
</html>