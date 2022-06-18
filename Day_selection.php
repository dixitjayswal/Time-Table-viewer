<?php
session_start();
include 'connection.php';
if (isset($_POST['DAYS'])) {
    $DAY=$_POST['DAYS'];
    if($DAY == "0"){
        $message = "Select a day";
        echo "<script type='text/javascript'>alert('$message');</script>";
    }
    else{
        $_SESSION['DAY'] = $DAY;
    header("Location:Selected_free.php");
    }

} else {
    die();
}


?>