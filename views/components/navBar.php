<nav class="navbar navbar-light navbar-expand-md bg-light">
    <div class="container-fluid">
        <a class="navbar-brand h1 mr-0 mb-0" href="index.php">
            <img src="../assets/logo.png" alt="" width="30" height="24" class="d-inline-block align-text-top">
            N NANO TRAVEL
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav  me-auto">
                <?php
                    if(!empty($_SESSION['username'])){
                ?>
                    <a class="nav-link" aria-current="page" href="orderList.php">
                        Booking List
                    </a>
                <?php
                    }
                ?>
                <a class="nav-link" aria-current="page" href="https://www.facebook.com/n.nanotravel">
                    <i class="bi bi-facebook"></i>
                </a>
                <a class="nav-link" href="https://www.instagram.com/n.nanotravel/?utm_medium=copy_link">
                    <i class="bi bi-instagram"></i>
                </a>
            </div>
            <?php
                if(!empty($_SESSION['username'])){
            ?>
                    <p class="mb-0 mx-2">Welcome,<?php echo $_SESSION['username']; ?></p>
                    <a class="d-flex btn btn-outline-secondary btn-md" href="../functions/userController.php?logout">Logout</a>
            <?php
                }else{
            ?>
                    <a class="d-flex btn btn-outline-secondary btn-md" href="../views/login.php">Login</a>
            <?php
                }
            ?>
        </div>
    </div>
</nav>