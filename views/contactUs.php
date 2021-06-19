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
        <p class="text-center text-light" style="font-size: 50px; font-weight: 700;position:absolute; top:40%; left:50%; transform: translate(-50%, -50%);">Contact Us</p>
    </div>
    <!-- end of contactUs title -->

    <div class="container-fluid mt-3">
        <p class="text-center" style="font-size:25px">We'll be happy to help you</p>
        <form action="">
            <div class="row px-5 mt-3">
                <div class="col-md-6">
                    <p class="form-label text-center">Name:</p>
                </div>
                <div class="col-md-6">
                    <input type="text" id="name" name="name" class="form-control form-control-sm">
                </div>
                <div class="col-md-6">
                    <p class="form-label text-center">Email:</p>
                </div>
                <div class="col-md-6">
                    <input type="email" id="email" name="email" class="form-control form-control-sm">
                </div>
                <div class="col-md-6">
                    <p class="form-label text-center">Subject:</p>
                </div>
                <div class="col-md-6">
                    <input type="text" id="subject" name="subject" class="form-control form-control-sm">
                </div>
                <div class="col-md-6">
                    <p class="form-label text-center">Message:</p>
                </div>
                <div class="col-md-6">
                    <textarea class="form-control form-control-sm" id="message" name="message" cols="20" rows="5"></textarea>
                </div>
                <div class="col-md-12 text-center">
                    <button type="button" onclick="sendMessage()" class="btn btn-sm btn-outline-success mt-3">
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
<script>
function sendMessage(){
    var name = document.getElementById('name').value;
    var email = document.getElementById('email').value;
    var subject = document.getElementById('subject').value;
    var message = document.getElementById('message').value;

    $.ajax({
        url: '../functions/inquiriesController.php',
        type: 'POST',
        data: { 
            'inquiry' : true,
            'name' : name,
            'email' : email, 
            'subject' : subject,
            'message' : message,
        },
        success: function(data){
            swal({
                icon: "success",
                title: "Success",
                text: "Send successfully",
                timer: 1500,
                buttons: false,
            }).then(function(){
                location.reload();
            });
        },
        error: function(){
            // do nothing
        }
    });
}
</script>
</html>