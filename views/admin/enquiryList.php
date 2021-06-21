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
            <h1 class="text-center">Enquiry Lists</h1>

            <table class="table table-hover table-responsive">
                <tr class="table-dark">
                    <td>No.</td>
                    <td>Name</td>
                    <td>E-mail</td>
                    <td>Subject</td>
                    <td>Message</td>
                </tr>
                
                <?php
                    $count = 0;
                    $sql = "SELECT * FROM inquiries";
                    $result = mysqli_query($conn, $sql);
                    if(mysqli_num_rows($result) > 0){
                        while($row = mysqli_fetch_assoc($result)){
                            $count++;
                ?>
                    <tr>
                        <td><?php echo $count; ?></td>
                        <td><?php echo $row['iqName']; ?></td>
                        <td><?php echo $row['iqEmail']; ?></td>
                        <td><?php echo $row['iqSubject']; ?></td>
                        <td><?php echo $row['iqMessage']; ?></td>
                    </tr>
                <?php
                        }
                    }else{
                ?>
                    <tr>
                        <td colspan="5" class="text-center"> No enquiries so far</td>
                    </tr>
                <?php
                    }
                ?>
            </table>
        </div>
    </div>
</body>
</html>