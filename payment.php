<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hadi Online/<?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] = true) {
                            echo  $_SESSION['username'];
                        } ?></title>

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
        #navbar {

            background-color: #0d8ba6;
        }

        #btn {
            padding: 10px;
            border-radius: 20px;

        }

        #button {
            text-align: center;
            justify-content: center;
            align-items: center;
        }
        #main-area {
            margin: 0px;
            padding: 0px;
            background: url(assets/background.jpg);
            background-size: cover;
        }
    </style>

    <?php
    // header 
        include('navbar.php');
    ?>


    <!-- main section dtart here  -->

<body>
<main id="main-area">
    <div class="container">
        <main>
            <div class="py-5 text-center">
                <h1>Checkout form</h1>
                <p class="lead">Below is an form to get all the information of payment and adress. Please fill out the form corectly to place the order..</p>
            </div>
            <hr class="my-3">

            <div class="row g-5">
                <div class="col-md-5 col-lg-4 order-md-last">
                    <h4 class="d-flex justify-content-between align-items-center mb-3">
                        <span class="text-primary">Your cart</span>
                        <span class="badge bg-primary rounded-pill"><?php echo isset($subTotal) ? count($subTotal) : 0; ?></span>
                    </h4>
                    <?php
                    foreach ($product->getData('cart') as $item) :
                        $cart = $product->getProduct($item['item_id']);
                        $subTotal[] = array_map(function ($item) {
                    ?>
                            <ul class="list-group mb-3">
                                <li class="list-group-item d-flex justify-content-between lh-sm">
                                    <div class="">
                                        <img src="<?php echo $item['item_image'] ?? "./assets/products/buy-1.jpg." ?>" style="height: 120px;" alt="cart1" class="img-fluid">
                                    </div>
                                    <div>
                                        <h5 class="font-baloo font-size-20"><?php echo $item['item_name'] ?? "Unknown"; ?></h5>
                                        <small>by <?php echo $item['item_brand'] ?? "Brand"; ?></small>
                                    </div>
                                    <span class="text-muted"><?php echo $item['item_price'] ?? "000"; ?></span>
                                </li>
                        <?php
                            return $item['item_price'];
                        }, $cart); // closing array_map function
                    endforeach;
                        ?>
                        <li class="list-group-item d-flex justify-content-between bg-light">
                            <div class="text-success">
                                <h6 class="my-0">Promo code</h6>
                                <small>EXAMPLECODE</small>
                            </div>
                            <span class="text-success">−$5</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between">
                            <h5 class="font-baloo font-size-20">Subtotal ( <?php echo isset($subTotal) ? count($subTotal) : 0; ?> item):&nbsp; <span class="text-danger">$<span class="text-danger" id="deal-price"><?php echo isset($subTotal) ? $Cart->getSum($subTotal) : 0; ?></span> </span> </h5>
                        </li>
                            </ul>
                            <form class="card p-2">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Promo code">
                                    <button type="submit" class="btn btn-warning">Redeem</button>
                                </div>
                            </form>
                </div>
                <div class="col-md-7 col-lg-8">
                    <h4 class="mb-3">Billing address</h4>
                    <form class="needs-validation" novalidate="" action ="dashboard.php" method="post">
                        <div class="row g-3">
                            <div class="col-sm-6 my-2">
                                <label for="firstName" name="firstname" id="firstname" class="form-label">First name</label>
                                <input type="text" class="form-control" id="firstName" placeholder="" value="" required="">
                                <div class="invalid-feedback">
                                    Valid first name is required.
                                </div>
                            </div>

                            <div class="col-sm-6 my-2">
                                <label for="lastName" name="lastname" id="lastname"  class="form-label">Last name</label>
                                <input type="text" class="form-control" id="lastName" placeholder="" value="" required="">
                                <div class="invalid-feedback">
                                    Valid last name is required.
                                </div>
                            </div>

                            <div class="col-12 my-2">
                                <label for="username" name="username" id="username"   class="form-label">Username</label>
                                <div class="input-group has-validation">
                                    <span class="input-group-text">@</span>
                                    <input type="text" class="form-control" id="username" placeholder="Username" required="">
                                    <div class="invalid-feedback">
                                        Your username is required.
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 my-2">
                                <label for="email" name="email" id="email"   class="form-label">Email <span class="text-muted">(Optional)</span></label>
                                <input type="email" class="form-control" id="email" placeholder="you@example.com">
                                <div class="invalid-feedback">
                                    Please enter a valid email address for shipping updates.
                                </div>
                            </div>

                            <div class="col-12 my-2">
                                <label for="address" name="address-1" id="address-1"    class="form-label">Address</label>
                                <input type="text" class="form-control" id="address" placeholder="1234 Main St" required="">
                                <div class="invalid-feedback">
                                    Please enter your shipping address.
                                </div>
                            </div>

                            <div class="col-12 my-2">
                                <label for="address2" name="address-2" id="address-2" class="form-label">Address 2 <span class="text-muted">(Optional)</span></label>
                                <input type="text" class="form-control" id="address2" placeholder="Apartment or suite">
                            </div>

                            <div class="col-md-5 my-5">
                                <label for="country" name="country" id="country" class="form-label">Country</label>
                                <select class="form-select" id="country" required="">
                                    <option value="">Choose...</option>
                                    <option>United States</option>
                                    <option>Pakistan</option>
                                    <option>China</option>
                                </select>
                                <div class="invalid-feedback">
                                    Please select a valid country.
                                </div>
                            </div>

                            <div class="col-md-4 my-5">
                                <label for="state" name="state" id="state" class="form-label">State</label>
                                <select class="form-select" id="state" required="">
                                    <option value="1">Choose...</option>
                                    <option>Punjab</option>
                                    <option>Sindh</option>
                                    <option>KPK</option>
                                    <option>Balochistan</option>
                                </select>
                                <div class="invalid-feedback">
                                    Please provide a valid state.
                                </div>
                            </div>

                            <div class="col-md-3 my-2 ">
                                <label for="zip" name="zip" id="zip" class="form-label">Zip</label>
                                <input type="text" class="form-control" id="zip" placeholder="" required="">
                                <div class="invalid-feedback">
                                    Zip code required.
                                </div>
                            </div>
                        </div>

                        <hr class="my-4">

                        <div class="form-check">
                            <input type="checkbox"  name="checkbox-1" id="checkbox-1"  class="form-check-input" id="same-address">
                            <label class="form-check-label" for="same-address">Shipping address is the same as my billing address</label>
                        </div>

                        <div class="form-check">
                            <input type="checkbox" name="checkbox-2" id="checkbox-2"  class="form-check-input" id="save-info">
                            <label class="form-check-label" for="save-info">Save this information for next time</label>
                        </div>

                        <hr class="my-4">

                        <h4 class="mb-3">Payment</h4>

                        <div class="my-3">
                            <div class="form-check">
                                <input id="credit" name="paymentMethod" type="radio" class="form-check-input" checked="" required="">
                                <label class="form-check-label" for="credit">Credit card</label>
                            </div>
                            <div class="form-check">
                                <input id="debit" name="paymentMethod" type="radio" class="form-check-input" required="">
                                <label class="form-check-label" for="debit">Debit card</label>
                            </div>
                            <div class="form-check">
                                <input id="paypal" name="paymentMethod" type="radio" class="form-check-input" required="">
                                <label class="form-check-label" for="paypal">PayPal</label>
                            </div>
                        </div>

                        <div class="row gy-3">
                            <div class="col-md-6">
                                <label for="cc-name" class="form-label" name="name" type="name">Name on card</label>
                                <input type="text" class="form-control" id="cc-name" placeholder="" required="">
                                <small class="text-muted">Full name as displayed on card</small>
                                <div class="invalid-feedback">
                                    Name on card is required
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label for="cc-number" class="form-label">Credit card number</label>
                                <input type="text" class="form-control" id="cc-number" placeholder="" required="">
                                <div class="invalid-feedback">
                                    Credit card number is required
                                </div>
                            </div>

                            <div class="col-md-3">
                                <label for="cc-expiration" class="form-label">Expiration</label>
                                <input type="text" class="form-control" id="cc-expiration" placeholder="" required="">
                                <div class="invalid-feedback">
                                    Expiration date required
                                </div>
                            </div>

                            <div class="col-md-3">
                                <label for="cc-cvv" class="form-label">CVV</label>
                                <input type="text" class="form-control" id="cc-cvv" placeholder="" required="">
                                <div class="invalid-feedback">
                                    Security code required
                                </div>
                            </div>
                        </div>

                        <hr class="my-4">

                        <button id="button" class=" justify-content-center mx-6 btn btn-warning mt-3 my-5 text-center" type="submit">Continue to checkout</button>
                    </form>
                </div>
            </div>
        </main>
    </div>

</main>
    <?php
    // footer.php
    include('footer.php');
    ?>

    <script src="/docs/5.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <script src="form-validation.js"></script>
</body>

</html>