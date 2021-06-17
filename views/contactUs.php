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
        .contactUsImage{
            background-image: url('../assets/slider.jpg');
            height: 350px;
            background-position: 50% -125px;
            background-attachment: fixed;
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
</head>
<body>
    <!-- start of nav bar section -->
    <?php
        include 'components/navBar.php'
    ?>
    <!-- end of nav bar section -->
    
    <!-- start of contactUs title -->
    <div class="container-fluid contactUsImage">
        <p class="text-center text-light" style="font-size: 50px; font-weight: 700;">Contact Us</p>
    </div>
    <!-- end of contactUs title -->

    <div class="container-fluid mt-3">
        <p class="text-center" style="font-size:25px">We'll be happy to help you</p>
        <form action="">
            <div class="row px-5 mt-3">
                <div class="col-md-6">
                    <p class="form-label text-center">Username:</p>
                </div>
                <div class="col-md-6">
                    <input type="text" class="form-control form-control-sm">
                </div>
                <div class="col-md-6">
                    <p class="form-label text-center">Email:</p>
                </div>
                <div class="col-md-6">
                    <input type="email" class="form-control form-control-sm">
                </div>
                <div class="col-md-6">
                    <p class="form-label text-center">Address:</p>
                </div>
                <div class="col-md-6">
                    <textarea class="form-control form-control-sm"id="" cols="20" rows="5"></textarea>
                </div>
                <div class="col-md-12 text-center">
                    <button type="submit" class="btn btn-sm btn-outline-success mt-3">
                        Submit
                    </button>
                </div>
            </div>
        </form>
    </div>

    <!-- start of footer section -->
    <?php
        include 'components/footer.php'
    ?>
    <!-- end of footer section -->
</body>
</html>