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
            background-color: rgba(37, 42, 45, 0.7);
            background-blend-mode: multiply;
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
    
    <!-- start of contactUs title -->
    <div class="container-fluid contactUsImage">
        <p class="text-center text-light" style="font-size: 50px; font-weight: 700;position:absolute; top:40%; left:50%; transform: translate(-50%, -50%);">About Us</p>
    </div>
    <!-- end of contactUs title -->

    <!-- start of how we began section -->
    <div class="container-fluid text-center my-4">
        <h3>How We Begin</h3>
        <p class="px-5">
            N Nano Travel started as a tour and travel company in 2017. The company is a professional organizer and travel planner. N Nano Travel expert in selling both group (GIT) and individual (FIT) worldwide tour packages. The company provides the experience outbound tour leaders to serve the market and clientele needs and daily Excursion Tours and Special Interest Tour for all tourists from around the world.
        </p>
    </div>
    <!-- end of how we began section -->

    <!-- start of vission and mission section -->
    <div class="container-fluid text-center my-4">
        <h3>Vission and Mission</h3>
        <p class="px-5">
            Provides our customers with the best service and make our customers feel like they are home. Do every detail well, let us pay attention to all their behaviors. Every customer served can enjoy their travel journey with the word of mouth of “N Nano Tourism World Travel”.
        </p>
    </div>
    <!-- end of vission and missionn section -->

    <!-- start of footer section -->
    <?php
        include 'components/footer.php'
    ?>
    <!-- end of footer section -->
</body>
</html>