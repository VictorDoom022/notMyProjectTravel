<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <title>Document</title>
    <style>
        .footer {
            position: fixed;
            right: 0;
            bottom: 0;
            left: 0;
        }
    </style>
</head>
<body>
   <!-- start of nav bar section -->
    <?php
        include 'components/navBar.php'
    ?>
    <!-- end of nav bar section --> 

    <!-- start of login card -->
    <div class="container-fluid mt-5">
        <div class="row justify-content-center align-item-center">
            <div class="col-md-8">
                <div class="card text-center px-2">
                    <h3 class="card-title">Login</h3>
                    <form method="post" action="../functions/userController.php">
                        <p class="form-label text-start">Username:</p>
                        <input type="text" name="username" class="form-control form-control-sm" required>

                        <p class="form-label text-start">Password:</p>
                        <input type="password" name="password" class="form-control form-control-sm" required>

                        <button type="submit" name="login" class="btn btn-sm btn-outline-success mt-3">
                            Login
                        </button>
                    </form>
                    <a href="register.php" class="my-3">Register</a>
                </div>
            </div>
        </div>
    </div>
    <!-- end of login card -->

    <!-- start of footer section -->
    <?php
        include 'components/footer.php'
    ?>
    <!-- end of footer section -->
</body>
</html>