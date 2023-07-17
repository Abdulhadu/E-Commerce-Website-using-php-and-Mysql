<?php
if (isset($_SESSION['loggedin']) || $_SESSION['loggedin'] = true) {
    include ('account.php');
}
else{
    ob_start();
    include ('navbar.php');
}
?>

<?php

    /*  include products */
    include ('Template/_products.php');
    /*  include products */

    /*  include top sale section */
    include ('Template/_top-sale.php');
    /*  include top sale section */

?>

<?php
// include footer.php file
include ('footer.php');
?>

