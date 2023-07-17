<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hadi Online/<?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] = true) {
         echo  $_SESSION['username'] ;
    }?></title>

    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Owl-carousel CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha256-UhQQ4fxEeABh4JrcmAJ1+16id/1dnlOEVCFOxDef9Lw=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha256-kksNxjDRxd/5+jGurZUJd1sdR2v+ClrCl3svESBaJqw=" crossorigin="anonymous" />

    <!-- font awesome icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />
    <!-- Custom CSS file -->
    <link rel="stylesheet" href="style.css">
    <style>
#navbar{
    
    background-color: #0d8ba6;
}
#btn{
    padding: 10px;
    border-radius: 20px;

}
 </style>
<?php
    // require functions.php file
    require('functions.php');
    // require('./database/DBController.php');
?>
</head>

<body>
<?php
    ob_start();
?>
    <!-- Primary Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark color-navbar-bg" id="navbar">
        <img src="assets/navbar-1.png"  style="height:60px;" alt="Hadi online">
        <!-- <a class="navbar-brand" href="assets/navbar.png"></a> -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav m-auto font-rubik">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">On Sale</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Category <i class="fas fa-chevron-down"></i></a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="main-product.php">Shirts</a>
                        <a class="dropdown-item" href="main-product.php">Shoes</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="main-product.php">Men Accesories</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="main-product.php">Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Blog</a>
                </li>
                <?php
                if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] = true) {
                ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            MY Accounts
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="/e_commerce/account.php"><?php echo  $_SESSION['username'] ?></a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="/e_commerce/Template/_wishlist_templates.php">My Wishlist</a>
                            <a class="dropdown-item" href="/e_commerce/cart.php">My Cart</a>
                            <a class="dropdown-item" href="/e_commerce/logout.php">Log Out</a>
                        </div>
                    </li>
                <?php } else { ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            MY Accounts
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="/e_commerce/login.php">Login</a>
                            <a class="dropdown-item" href="/e_commerce/register.php">Signup</a>
                        </div>
                    </li>
                <?php } ?>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Coming Soon</a>
                </li>
            </ul>
            <form action="#" class="font-size-14 font-rale">
                <a href="cart.php" class="py-2 rounded-pill color-primary-bg">
                    <span class="font-size-16 px-2 text-white"><i class="fas fa-shopping-cart"></i></span>
                </a>

                <form class="form-inline my-2 my-lg-0" id="btn">

                    <button class="btn btn-success   px-3 mx-2 my-2 my-sm-0 color-primary-bg .btn-rounded " type="submit" onclick="window.location.href='login.php'"> Login </button>

                    <button class="btn btn-success px-3 my-2 my-sm-0 color-primary-bg" type="submit" onclick="window.location.href='/e_commerce/register.php'">Signup</button>
                </form>
            </form>
        </div>
    </nav>
    </body>
</html>