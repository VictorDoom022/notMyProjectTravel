<?php
session_start();
require_once('../../functions/connectDB.php');
include_once('../../functions/checkSession.php');
$packageID = $_GET['pkgID'];

$sql = "SELECT * FROM tourpackage WHERE id = $packageID";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
        include '../components/cdnSetup.php'
    ?>
    <script src="https://cdn.ckeditor.com/ckeditor5/24.0.0/classic/ckeditor.js"></script>
    <title>Document</title>
    <style>
    /* Chrome, Safari, Edge, Opera */
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }

    /* Firefox */
    input[type=number] {
        -moz-appearance: textfield;
    }

    /* Firefox */
    input[type=number] {
        -moz-appearance: textfield;
    }

    .ck-editor__editable_inline {
        min-height: 300px;
    }
    </style>
</head>
<body class="bg-light">
    <a href="packageList.php" class="btn btn-dark btn-sm mt-1">Back</a>
    <div class="container">
        <div class="card px-2 mt-5">
            <h1 class="text-center">Edit Package</h1>

            <div class="row">
                <div class="col-md-12">
                    <label>Title</label>
                    <input type="text" name="title" id="title" class="form-control" value="<?php echo $row['pkgTitle']; ?>">
                </div>
                <div class="col-md-6">
                    <label>Adult Price (RM)</label>
                    <input type="number" name="adultPrice" id="adultPrice" class="form-control" value="<?php echo $row['pkgPrice']; ?>">
                </div>
                <div class="col-md-6">
                    <label>Child Price (RM)</label>
                    <input type="number" name="childPrice" id="childPrice" class="form-control" value="<?php echo $row['pkgChildPrice']; ?>">
                </div>
                <div class="col-md-6">
                    <label>Slots</label>
                    <input type="number" name="slots" id="slots" class="form-control" value="<?php echo $row['pkgSlots']; ?>">
                </div>
                <div class="col-md-6">
                    <label>Image src</label>
                    <input type="text" name="imageSRC" id="imageSRC" class="form-control" value="<?php echo $row['pkgImageSrc']; ?>">
                </div>
                <div class="col-md-12">
                    <label>Overview</label>
                    <textarea class="form-control" name="overview" id="overview" cols="30" rows="15" ><?php echo $row['pkgOverview']; ?></textarea>
                </div>
                <div class="col-md-12">
                    <label>Details</label>
                    <textarea class="form-control" name="details" id="details" cols="30" rows="15" ><?php echo $row['pkgDetails']; ?></textarea>
                </div>
                <div class="col-md-12 my-3">
                    <button type="button" onclick="editPackage()" class="btn btn-primary"style="width:100%;">Edit Package</button>
                </div>
            </div>
        </div>
    </div>
</body>
<script>
let overviewEditor;
let detailsEditor;

ClassicEditor
    .create( document.querySelector( '#overview' ) )
    .then( newEditor => {
        overviewEditor = newEditor;
    } )
    .catch( error => {
        console.error( error );
} );

ClassicEditor
    .create( document.querySelector( '#details' ) )
    .then( newEditor => {
        detailsEditor = newEditor;
    } )
    .catch( error => {
        console.error( error );
} );

function editPackage(){
    var title = document.getElementById('title').value;
    var adultPrice = document.getElementById('adultPrice').value;
    var childPrice = document.getElementById('childPrice').value;
    var slots = document.getElementById('slots').value;
    var imageSRC = document.getElementById('imageSRC').value;
    var overview = overviewEditor.getData();
    var details = detailsEditor.getData();

    $.ajax({
        url: '../../functions/packageController.php',
        type: 'POST',
        data: { 
            'editPackage' : true,
            'pkgID' : <?php echo $packageID ; ?>,
            'title' : title,
            'adultPrice' : adultPrice, 
            'childPrice' : childPrice,
            'slots' : slots,
            'imageSRC' : imageSRC,
            'overview' : overview,
            'details' : details
        },
        success: function(data){
            swal({
                icon: "success",
                title: "Success!",
                text: "Package Edited Successfully",
                timer: 1500,
                buttons: false,
            }).then(function(){
                window.location.href = "packageList.php";
            });
        },
        error: function(){
            swal({
                icon: "error",
                title: "Error!",
                text: "Opps something went wrong",
                timer: 1500,
                buttons: false,
            }).then(function(){
                location.reload();
            });
        }
    });
}
</script>
</html>
<?php
    }
}
?>