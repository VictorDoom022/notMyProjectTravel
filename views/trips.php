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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
        include 'components/cdnSetup.php'
    ?>
    <title>Document</title>
    <style>
        .tripTitleImage{
            background-image: url('../assets/trips.jpg');
            height: 350px;
            background-position: 50% -125px;
            background-attachment: fixed;
            background-repeat: no-repeat;
            background-size: cover;
            background-color: rgba(37, 42, 45, 0.7);
            background-blend-mode: multiply;
        }

        .tripInfoImage{
            max-height: 300px;
            
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
    
    <!-- start of tripTitle title -->
    <div class="container-fluid tripTitleImage">
        <p class="text-center text-light" style="font-size: 50px; font-weight: 700;position:absolute; top:40%; left:50%; transform: translate(-50%, -50%);">Trips</p>
    </div>
    <!-- end of tripTitle title -->

    <!-- start of trip lists -->
    <div class="container pb-5">
        <?php
            $count = 0;
            $sql = "SELECT * FROM tourpackage";
            $result = mysqli_query($conn, $sql);
            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_assoc($result)){
        ?>
        <div class="card my-3" onclick="redirect(<?php echo $row['id'] ?>)" style="cursor:pointer;">
            <div class="row">
                <div class="col-md-4">
                    <img class="tripInfoImage" src="<?php echo $row['pkgImageSrc'] ?>">
                </div>
                <div class="col-md-8 px-5">
                    <div class="card-body">
                        <h3 class="card-title"><?php echo $row['pkgTitle']?></h3>
                        <p class="card-text"><?php echo $row['pkgOverview']?></p>
                    </div>
                </div>
            </div>
        </div>
        <?php
                }
            }
        ?>
    </div>
    <!-- end of trip lists -->

    <!-- start of footer section -->
    <?php
        include 'components/footer.php'
    ?>
    <!-- end of footer section -->
</body>
<script>
function redirect(pkgID){
    window.location.href = "tourDescNew.php?locationID=" + pkgID;
}
</script>
</html>