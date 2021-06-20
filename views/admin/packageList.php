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
            <h1 class="text-center">Package Lists</h1>

            <table class="table table-hover table-responsive">
                <tr class="table-dark">
                    <td>No.</td>
                    <td>Title</td>
                    <td>Adult Price</td>
                    <td>Children Price</td>
                    <td>Slots Available</td>
                    <td>Action</td>
                </tr>
                <?php
                    $count = 0;
                    $sql = "SELECT * FROM tourpackage";
                    $result = mysqli_query($conn, $sql);
                    if(mysqli_num_rows($result) > 0){
                        while($row = mysqli_fetch_assoc($result)){
                            $overview = str_replace( '&', '&amp;', $row['pkgOverview'] );
                            $details = str_replace( '&', '&amp;', $row['pkgDetails'] );
                            $count ++;
                ?>
                    <tr>
                        <td><?php echo $count; ?></td>
                        <td><?php echo $row['pkgTitle']; ?></td>
                        <td><?php echo $row['pkgPrice']; ?></td>
                        <td><?php echo $row['pkgChildPrice']; ?></td>
                        <td><?php echo $row['pkgSlots']; ?></td>
                        <td>
                            <button type="button" class="btn btn-sm btn-secondary" data-bs-toggle="modal" data-bs-target="#moreDetailsID<?php echo $row['id']; ?>">More Details</button>
                            <a href="editPackageList.php?pkgID=<?php echo $row['id']; ?>" class="btn btn-sm btn-success">Edit</a>
                        </td>
                    </tr>

                    <!-- start of more details modal -->
                        <div class="modal fade" id="moreDetailsID<?php echo $row['id']; ?>" tabindex="-1" aria-labelledby="moreDetailsLabel" aria-hidden="true">
                            <div class="modal-dialog modal-xl">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Details</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-md-3">
                                                Overview:
                                            </div>
                                            <div class="col-md-9">
                                                <textarea class="form-control" rows="10" col="10" readonly>
                                                    <?php echo $overview; ?>
                                                </textarea>
                                            </div>
                                            <div class="col-md-3">
                                                Details:
                                            </div>
                                            <div class="col-md-9">
                                                <textarea class="form-control" rows="10" col="10" readonly>
                                                    <?php echo $details; ?>
                                                </textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <!-- end of more details modal -->
                <?php
                        }
                    }
                ?>
                    <tr>
                        <td colspan="6">
                            <a href="addPackage.php" class="btn btn-primary align-items-center" style="width: 100%;">
                                Add Package
                            </a>
                        </td>
                    </tr>
            </table>
        </div>
    </div>
</body>
</html>