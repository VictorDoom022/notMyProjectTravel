<?php
if($_SESSION["user_id"]==null){
    header('location: login.php');
}
?>