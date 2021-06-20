<?php
include_once('connectDB.php');

session_start();

if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $encryptedPassowrd = md5($password);

    if($stmt = $conn->prepare("SELECT id, username FROM users WHERE username=? AND password=?")){
        $stmt->bind_param("ss",$username,$encryptedPassowrd);
        $stmt->execute();
        $stmt->bind_result($id, $username);
        if($stmt->fetch()){
            $_SESSION['user_id'] = $id;
            $_SESSION['username'] = $username;
            if($username == 'admin'){
                echo "<script>window.location.href='../views/admin/adminHome.php';</script>";
            }else{
                echo "<script>window.location.href='../views/index.php';</script>";
            }
        }else{            
            echo $stmt->fetch();
            echo "<script>alert('Your username or password is invalid!');</script>";
            echo "<script>window.location.href='../views/login.php';</script>";
        }
        $stmt->close();
    }
    $conn->close();
}

if(isset($_POST['register'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $encryptedPassowrd = md5($password);

    $sql = "INSERT INTO users(username, email, password) 
    VALUES ('$username','$email','$encryptedPassowrd')";

    mysqli_query($conn, $sql);
    mysqli_close($conn);
    echo "<script>alert('Registred Successfully!')</script>";
    header("Location: ../views/login.php");
}

if(isset($_GET['logout'])){
    session_destroy();
    header("Location: ../views/login.php");
}
?> 