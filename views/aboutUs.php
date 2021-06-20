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
        .contactUsImage{
            background-image: url('../assets/about us.jpg');
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
    <div class="container-fluid text-center my-4 pb-5">
        <h3>Vision and Mission</h3>
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