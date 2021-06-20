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

        .ck-editor__editable_inline {
            min-height: 300px;
        }
    </style>
</head>
<body class="bg-light">
    <a href="packageList.php" class="btn btn-dark btn-sm mt-1">Back</a>
    <div class="container">
        <div class="card px-2 mt-5">
            <h1 class="text-center">Add Package</h1>

            <div class="row">
                <div class="col-md-12">
                    <label>Title</label>
                    <input type="text" name="title" id="title" class="form-control">
                </div>
                <div class="col-md-6">
                    <label>Adult Price (RM)</label>
                    <input type="number" name="adultPrice" id="adultPrice" class="form-control">
                </div>
                <div class="col-md-6">
                    <label>Child Price (RM)</label>
                    <input type="number" name="childPrice" id="childPrice" class="form-control">
                </div>
                <div class="col-md-6">
                    <label>Slots</label>
                    <input type="number" name="slots" id="slots" class="form-control">
                </div>
                <div class="col-md-6">
                    <label>Image src</label>
                    <input type="text" name="imageSRC" id="imageSRC" class="form-control">
                </div>
                <div class="col-md-12">
                    <label>Overview</label>
                    <textarea class="form-control" name="overview" id="overview" cols="30" rows="15" ></textarea>
                </div>
                <div class="col-md-12 my-3">
                    <button type="button" onclick="addPackage()" class="btn btn-primary"style="width:100%;">Add Package</button>
                </div>
            </div>
        </div>
    </div>
</body>
<script>
let editor;
ClassicEditor
    .create( document.querySelector( 'textarea' ) )
    .then( newEditor => {
        editor = newEditor;
    } )
    .catch( error => {
        console.error( error );
} );

function addPackage(){
    var title = document.getElementById('title').value;
    var adultPrice = document.getElementById('adultPrice').value;
    var childPrice = document.getElementById('childPrice').value;
    var slots = document.getElementById('slots').value;
    var imageSRC = document.getElementById('imageSRC').value;
    var overview = editor.getData();

    var imageFullSrc = '../assets/'+ imageSRC;

    $.ajax({
        url: '../../functions/packageController.php',
        type: 'POST',
        data: { 
            'addPackage' : true,
            'title' : title,
            'adultPrice' : adultPrice, 
            'childPrice' : childPrice,
            'slots' : slots,
            'imageSRC' : imageFullSrc,
            'overview' : overview,
        },
        success: function(data){
            swal({
                icon: "success",
                title: "Success!",
                text: "Package Added Successfully",
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