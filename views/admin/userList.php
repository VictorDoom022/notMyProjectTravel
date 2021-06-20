<?php
session_start();
require_once('../../functions/connectDB.php');
include_once('../../functions/checkSession.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?php
        include '../components/cdnSetup.php'
    ?>
    <title>Document</title>
</head>
<body class="bg-light">
    <a href="adminHome.php" class="btn btn-dark btn-sm mt-1">Back</a>
    <div class="container">
        <div class="card px-2 mt-5">
            <h1 class="text-center">User Lists</h1>

            <table class="table table-hover">
                <tr class="table-dark">
                    <td>No.</td>
                    <td>Username</td>
                    <td>E-mail</td>
                </tr>
                
                <?php
                    $count = 0;
                    $sql = "SELECT * FROM users";
                    $result = mysqli_query($conn, $sql);
                    if(mysqli_num_rows($result) > 0){
                        while($row = mysqli_fetch_assoc($result)){
                            $count ++;
                ?>
                    <tr>
                        <td><?php echo $count; ?></td>
                        <td><?php echo $row['username']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                    </tr>
                <?php
                        }
                    }
                ?>
            </table>
        </div>
    </div>
</body>
</html>