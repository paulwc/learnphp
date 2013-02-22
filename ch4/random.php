<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Lucky Numbers</title>
    </head>
    <body>
        <?php
            // Script 4.6 from PHP for the Web
        
            // Address error handling, if you want.
            ini_set('display_errors', 1);
            error_reporting(E_ALL | E_STRICT);
            
            // Create 3 random numbers
            $n1 = rand(1,99);
            $n2 = rand(1,99);
            $n3 = rand(1,99);
            
            // Print out the numbers
            print "</p>Your lucky numbers are:<br />$n1<br />$n2<br />$n3<br />";
        ?>
    </body>
</html>
