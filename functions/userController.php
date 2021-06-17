<?php
include_once('connectDB.php');

if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    if($stmt = $conn->prepare("SELECT id, username FROM users WHERE username=? AND password=?")){
        $stmt->bind_param("ss",$username,$password);
        $stmt->execute();
        $stmt->bind_result($id, $username);
        if($stmt->fetch()){
            $_SESSION['user_id'] = $id;
            $_SESSION['username'] = $username;

            echo 'Logged in';
        }else{
            echo $stmt->fetch();
            echo "Your username or password is invalid";
            //header("Location: ../login.php");
        }
        $stmt->close();
    }
    $conn->close();
}
?> 