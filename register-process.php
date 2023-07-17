<?php
ob_start();

$alert = false;
$showalert = false;
$error = array();

$username = validate_input_text($_POST['username']);
if (empty($username)){
    $error[] = "You forgot to enter your first Name";
}

$email= validate_input_email($_POST['email']);
if (empty($email)){
    $error[] = "You forgot to enter your Name";
}

$password = validate_input_text($_POST['password']);
if (empty($password)){
    $error[] = "You forgot to enter your password";
}

$cpassword = validate_input_text($_POST['cpassword']);
if (empty($cpassword)){
    $error[] = "You forgot to enter your Confirm Password";
}
$exist = false;
require ('mysqli_connect.php');
$existsql ="SELECT * from users where username='$username'";
    $result = mysqli_query($con, $existsql);
    $existrow = mysqli_num_rows($result);
    if ($existrow > 0) {
        $showalert = "Username already exists";
    } else {

        if (($password == $cpassword) && $exist == false) {
            $hash = password_hash($password, PASSWORD_DEFAULT);

            $sql = "INSERT INTO `users` (`id`, `email`, `password`, `date` , `username` ) VALUES (NULL, '$email', '$hash', current_timestamp() , '$username' );";
            $result = mysqli_query($con, $sql);
            if ($result) {
                $alert = true;
                header('location: login.php');

            }
        } else {
            $showalert = "Password don't match";
        }
    }
    if ($alert) {
        echo
        '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Succesfully Submitted</strong> Congradulation you are sign-up succesfully..!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
    }
    if ($showalert) {
        echo
        '<div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>' . $showalert . '</strong> Please check your password and try again..!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
    }
    ob_flush(); 
 
 ?>

















