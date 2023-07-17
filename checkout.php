<?php

session_start();

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] = true) {
    include('payment.php');
} else {
    ob_start();
    include('checkin.php');
}

?>