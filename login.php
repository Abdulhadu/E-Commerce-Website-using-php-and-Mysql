<?php

session_start();
include "helper.php";
?>

<?php
$user = array();
require('mysqli_connect.php');

if (isset($_SESSION['userID'])) {
    $user = get_user_info($con, $_SESSION['userID']);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    require('login-process.php');
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link rel="stylesheet" href="./style.css">
    <style>
        #main-area {
            margin: 0px;
            padding: 0px;
            background: url(assets/background.jpg);
            background-size: cover;
        }
        #box{
            background-color: rgba(255, 255, 255, .5);
       
            backdrop-filter: blur(10px);
            /* background-color: black; */
            
            justify-items: center;
            padding-top: 50px;
            margin-top: 100px;
            margin-bottom: 100px;
        }
       #text h1{
            font-weight: bold;
            color: white;

        }

    </style>

</head>

<body>

    <?php require 'navbar.php' ?>

    <main id="main-area">
        <!-- registration area -->
        <section id="login-form">
            <div class="row m-0" >
                <di0v class="col-lg-4 offset-lg-2" id="box">
                    <div class="text-center pb-5" id="text">
                        <h1 class="login-title text-dark">Login</h1>
                        <p class="p-1 m-0 font-ubuntu text-black-50">Login and enjoy additional features</p>
                        <span class="font-ubuntu text-black-50">Create a new <a href="register.php">account</a></span>
                    </div>

                    <div class="d-flex justify-content-center">
                        <form action="login.php" method="post" enctype="multipart/form-data" id="log-form">

                            <div class="form-row my-4">
                                <div class="col">
                                    <input type="username" required name="username" id="username" class="form-control" placeholder="Name*">
                                </div>
                            </div>

                            <div class="form-row my-4">
                                <div class="col">
                                    <input type="password" required name="password" id="password" class="form-control" placeholder="password*">
                                </div>
                            </div>

                            <div class="submit-btn text-center my-5">
                                <button type="submit" class="btn btn-warning rounded-pill text-dark px-5">Login</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>
        <!-- #registration area -->
     <?php
        // footer.php
        include('footer.php');
     ?>
</body>