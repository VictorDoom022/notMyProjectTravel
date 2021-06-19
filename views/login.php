<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?php
        include 'components/cdnSetup.php'
    ?>
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
<body class="bg-light">
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