<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            // Address error handling, if you want.
            ini_set('display_errors', 1);
            error_reporting(E_ALL | E_STRICT);
            
            // Get the values from the $_POST array:
            $hd_cost  = $_POST['cost'];
            $num_hdds = $_POST['numhd'];
            $discount = $_POST['discount'];
            
            $pre_disc_total  = $hd_cost * $num_hdds;
            $perc_reg_price  =(100 - $discount) / 100;
            $post_disc_total = $pre_disc_total * $perc_reg_price;
            
            $pre_disc_total  = number_format($pre_disc_total, 2);
            $post_disc_total = number_format($post_disc_total, 2);
            
            print "<h1>Your total</h1>";
            print "<h3>Full price for $num_hdds hard drives would be \$$pre_disc_total dollars</h3>";
            print "<h3>Thanks to your <span>$discount%</span> discount, your $num_hdds hard drives will cost: \$$post_disc_total</h3>";
        ?>
    </body>
</html>
