<?php

$error = array();

$username = validate_input_text($_POST['username']);
if (empty($username)){
    $error[] = "You forgot to enter your Email";
}

$password = validate_input_text($_POST['password']);
if (empty($password)){
    $error[] = "You forgot to enter your password";
}

if(empty($error)){
    // sql query
    $sql = "SELECT * from users where username='$username'";
    $result = mysqli_query($con, $sql);
    if(mysqli_num_rows($result) > 0 ){
    // $num = mysqli_num_rows($result);
    // if ($num == 1){
        while($rows = mysqli_fetch_assoc($result))
        if(password_verify($password, $rows['password'])){
            
            print "You are successfully logged in!";
            $login = true;
             session_start();
                $_SESSION['loggedin'] = true;
                $_SESSION['username'] = $username;
                header("location: index.php");
                exit();
        }
    }else{
        print "You are not a member please register!";
    }

}else{
    echo "Please Fill out email and password to login!";
}
?>