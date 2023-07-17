<?php
ob_start();
include ('navbar.php');
?>

<?php

    /*  include top sale section */
        include ('Template/_top-sale.php');
    /*  include top sale section */

    /*  include special price section  */
         include ('Template/_special-price.php');
    /*  include special price section  */

    /*  include new phones section  */
        include ('Template/_new-phones.php');
    /*  include new phones section  */

?>


<?php
// include footer.php file
include ('footer.php');
?>