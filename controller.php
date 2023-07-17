<?php
require ('mysqli_connect.php');
  if ($method ='POST'){
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $address1 = $_POST['address-1'];
    $address2 = $_POST['address-2'];
    $country = $_POST['country'];
    $state = $_POST['state'];
    $zip = $_POST['zip'];
    $checkbox = $_POST['checkbox-1'];
    $paymentmethod = $_POST['paymentMethod'];
    $sql = "INSERT INTO `customer-order` (`order-id`, `firstname`, `lastname`, `username`, `email`, `adress-1`, `adress-2`, `country`, `state`, `zip`, `payment`, `name`, `card-no`, `exp`, `cvv`, `time`) VALUES (NULL, $firstname,  $lastname , $username,$email, $address1, $address2, $country, $state, $zip, $checkbox, '', '', '', '', current_timestamp());";
    $result = mysqli_query($con, $sql);
    if ($result) {
        $alert = true;
        header('location: dashboard.php');
        echo 'submitted sucessfully';
    }
}
  

?>