<?php

session_start();
include ('helper.php');

$user = array();


if(isset($_SESSION['userID'])){
    require ('mysqli_connect.php');
    $user = get_user_info($con, $_SESSION['userID']);
}

?>

<!-- nav bar  -->
<?php require 'navbar.php' ?>
