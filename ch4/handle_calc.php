<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Product Cost Calculator</title>
        <style type="text/css" media="screen">
            .number { font-weight: bold; }
       </style>
    </head>
    <body>
        <?php 
            // Script 4.2 - handle_calc.php
            /* This script takes values from 
            calculator.html and performs 
            total cost and monthly payment 
            calculations. */
        
            // Address error handling, if you want.
            ini_set('display_errors', 1);
            error_reporting(E_ALL | E_STRICT);
            
            // Get the values from the $_POST array:
            $price      = $_POST['price'];
            $quantity   = $_POST['quantity'];
            $discount   = $_POST['discount'];
            $tax        = $_POST['tax'];
            $shipping   = $_POST['shipping'];
            $payments   = $_POST['payments'];
            
            // Calculate the total:
            /**  (the old way)
            $total = $price * $quantity;
            $total = $total + $shipping;
            $total = $total - $discount;
             * 
             */
            
            $total = ( ($price * $quantity) + $shipping) - $discount;
            
            // Determine the tax rate:
            /**  (the old way)
            $taxrate = $tax/100;
            $taxrate = $taxrate + 1;
             * 
             */
            
            // New way for tax rate
            // $taxrate = ($tax/100) + 1;
            
            // incrementing tax rate
            $taxrate = ($tax/100);
            $taxrate++;
            
            // Factor in the tax rate:
            $total = $total * $taxrate;
            
            // Calculate the monthly payments:
            $monthly = $total / $payments;
            
            // Format the numbers
            $total = number_format($total, 2);
            $monthly = number_format($monthly, 2);
            
            // Print out the results:
            print "<p>You have selected to purchase:<br />
                <span class=\"number\">$quantity </span> widget(s) at <br />
                $<span class=\"number\">$price</span> price each plus a <br />
                $<span class=\"number\">$shipping </span> shipping cost and a <br />
                <span class=\"number\">$tax</span> percent tax rate.<br />
                After your $<span class=\"number\"> $discount</span> discount, the total cost is $<span class=\"number\">$total </span>.<br />
                Divided over <span class=\"number\"> $payments</span> monthly payments, that would be $<span class=\"number\"> $monthly</span> each.</p>";
            ?>
    </body>
</html>
