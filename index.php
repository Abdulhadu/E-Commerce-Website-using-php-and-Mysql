


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

    /*  include banner area  */
        include ('Template/_banner-area.php');
    /*  include banner area  */

    /*  include top sale section */
        include ('Template/_top-sale.php');
    /*  include top sale section */

    /*  include special price section  */
         include ('Template/_special-price.php');
    /*  include special price section  */

    /*  include banner ads  */
        include ('Template/_banner-ads.php');
    /*  include banner ads  */

    /*  include new phones section  */
        include ('Template/_new-phones.php');
    /*  include new phones section  */

    /*  include blog area  */
         include ('Template/_blogs.php');
    /*  include blog area  */
    

    /*  include banner ads  */
    include ('Template/button.php');
    /*  include banner ads  */
?>


<?php
// include footer.php file
include ('footer.php');
?>