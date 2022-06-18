<?php
session_start();
include 'connection.php';
if (isset($_POST['B_DAYS'])) {
    $DAY=$_POST['B_DAYS'];
    if($DAY == "0"){
        $message = "Select a day";
        echo "<script type='text/javascript'>alert('$message');</script>";
    }
    else{
        $_SESSION['DAY'] = $DAY;
    header("Location:S_busy.php");
    }

} else {
    die();
}


?>