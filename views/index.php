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
    <nav class="navbar navbar-light navbar-expand-md bg-light">
        <div class="container-fluid">
            <a class="navbar-brand h1" href="index.php">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link" aria-current="page" href="#">Facebook</a>
                    <a class="nav-link" href="#">Twitter</a>
                    <a class="nav-link" href="#">Whatever</a>
                </div>
            </div>
            <button class="btn btn-outline-secondary btn-md" type="submit">Login</button>
        </div>
    </nav>
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
    <div class="container-fluid">
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
</body>
</html>